
function addToCart(product, price) {
    // 로컬 저장소에서 장바구니 불러오기 (장바구니가 없으면 빈 배열을 기본값으로 사용)
    var cart = JSON.parse(localStorage.getItem('cart')) || [];
    // 새 상품 추가
    cart.push({ product: product, price: price });
    // 장바구니를 다시 로컬 저장소에 저장
    localStorage.setItem('cart', JSON.stringify(cart));
}

let cart = 0; // 장바구니에 담긴 상품 개수를 저장하는 변수

function addToCart() { 
  cart += 1; // 상품을 장바구니에 추가할 때마다 변수 cart의 값을 1 증가
  document.querySelector(".badge").textContent = cart; // 변경된 cart 값으로 badge를 업데이트
}
