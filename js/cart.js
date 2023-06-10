function loadCart() {
    var cart = JSON.parse(localStorage.getItem('cart')) || [];
    var totalPrice = 0;
    var tbody = document.querySelector('.table tbody');
    tbody.innerHTML = '';  // 테이블 내용 초기화

    cart.forEach(function(item) {
        // 각 항목에 대해 테이블 행 생성
        var tr = document.createElement('tr');

        var productCell = document.createElement('td');
        productCell.textContent = item.product;
        tr.appendChild(productCell);

        var priceCell = document.createElement('td');
        priceCell.textContent = item.price;
        tr.appendChild(priceCell);

        var quantityCell = document.createElement('td');
        quantityCell.textContent = '1';  // 수량은 1로 고정
        tr.appendChild(quantityCell);

        var totalCell = document.createElement('td');
        totalCell.textContent = item.price;  // 각 항목의 총 가격
        tr.appendChild(totalCell);

        tbody.appendChild(tr);

        // 총합계 업데이트
        totalPrice += item.price;
    });

    // 총합계 표시 업데이트
    document.getElementById('totalPrice').textContent = totalPrice;
}