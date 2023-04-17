<!DOCTYPE html>
<html>
  <head>
    <title>상품 주문 페이지</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .product {
        text-align: center;
      }
    </style>
  </head>
  <body class="container">
    <header>
      <h1>상품 주문 페이지</h1>
      <nav>
        <ul>
          <li><a href="http://localhost/03/index.html">홈페이지</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="product">
        <form action="checkout.php" method="post">
          <label for="name">이름:</label>
          <input type="text" id="name" name="name" required>
          <label for="address">주소:</label>
          <input type="text" id="address" name="address" required>
          <label for="phone">전화번호:</label>
          <input type="tel" id="phone" name="phone" required>
          <label for="payment">결제 방법:</label>
          <select id="payment" name="payment" required>
            <option value="credit-card">신용카드</option>
          </select>
          <label for="quantity">수량:</label>
          <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" required>
          <p id="stock-msg"></p>
          <button type="submit">주문하기</button>
          <button type="submit">취소하기</button>
        </form>
        <h3>가격: $280.00 </h3>
        <h2>상품 설명</h2>
        <img src="패딩.jpg" alt="상품 이미지">
      </div>
    </main>
  </body>
</html>