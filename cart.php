<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    array_push($_SESSION['cart'], array('product' => $product, 'price' => $price, 'quantity' => $quantity));
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>장바구니 페이지</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
    </header>
    <main>
        <div class="container mt-5">
            <h2>장바구니</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">제품</th>
                        <th scope="col">가격</th>
                        <th scope="col">수량</th>
                        <th scope="col">합계</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalPrice = 0;
                    foreach ($_SESSION['cart'] as $item) {
                        echo '<tr>';
                        echo '<td>' . $item['product'] . '</td>';
                        echo '<td>' . $item['price'] . '</td>';
                        echo '<td>' . $item['quantity'] . '</td>';
                        echo '<td>' . ($item['price'] * $item['quantity']) . '</td>';
                        echo '</tr>';
                        $totalPrice += ($item['price'] * $item['quantity']);
                    }
                    ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-end mb-3">
                <h5>총합계: <span id="totalPrice">₩<?= $totalPrice ?></span></h5>
            </div>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-primary">결제하기</a>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>