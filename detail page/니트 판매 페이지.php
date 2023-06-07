<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 판매 페이지</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- 네비게이션 바 -->
    <nav class="navbar">
        <div class="navbar-top">
            <div class="navbar-top-content container">
                <div class="account">
                    <a href="#">로그인</a>
                    <a href="#">회원가입</a>
                    <a href="#">고객센터</a>
                </div>
            </div>
        </div>
            <div class="navbar-content container">
                <div class="navbar-top-content">
            <a href="../index.html" class="shop-logo">
                <img src="image/쇼핑몰 그림.png" alt="쇼핑몰 로고">
            </a>
            <form action="#" class="search-form">
                <input type="text" placeholder="검색어를 입력하세요">
                <button type="submit">검색</button>
            </form>
        </div>
    </nav>
    <body onload="openTabOnLoad() ; showMoreInfo(); resizeIframe();">
    <!-- 상품 판매 페이지의 구조 ... -->
    <div class="container">
        <div class="product-info">
            <div class="product-image">
                <img src="../image/ni2.jpg" alt="상품 이미지"></a>
            </div>
            <div class="product-details">
                <h1 class="product-title">상품 이름</h1>
                <p class="product-price"> 판매가: $20.00 ~ $30.00</p>
                <div class="buttons">
                    <button>장바구니 담기</button>
                    <button>구매</button>
                </div>
            </div>
        </div>
        <div class="tab-menu">
             <button onclick="openTab(event, 'details')" class="tablinks" href="#">상품 상세</button>
            <button onclick="openTab(event, 'reviews')" class="tablinks" href="#">상품평</button>
            <button onclick="openTab(event, 'inquiries')" class="tablinks" href="#">상품문의</button>
            <button onclick="openTab(event, 'shipping-returns')" class=" tablinks" href="#">배송교환/반품 안내</button>
        </div>
        <div class="tab-content" id="details">
            <img src="image/detail_nit.jpg" alt="상품 이미지">
        </div>
        <div class="tab-content" id="reviews">
            <p>상품평이 여기에 표시됩니다.</p>
           </div>
           <div class="tab-content" id="inquiries">
            <p>상품문의가 여기에 표시됩니다.</p>
        </div>
        <div class="tab-content" id="shipping-returns">
            <p>배송교환/반품 안내가 여기에 표시됩니다.</p>
        </div>
    </div>
        <script>
          var reviewsTab = document.querySelector("#reviews button");
          var reviewsImg = document.querySelector("#reviews img");

          reviewsTab.addEventListener("click", function() {
            reviewsImg.style.display = "none";
          });
            function openTabOnLoad() {
            openTab(null, 'details');
            var firstTabButton = document.querySelector(".tab-menu button");
            firstTabButton.classList.add("active");
            }

          function openTab(evt, tabName) {
           var i, tabContent, tabLinks;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
              tabContent[i].style.display = "none";
            }
            tabLinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tabLinks.length; i++) {
              tabLinks[i].className = tabLinks[i].className.replace(" active", "");
            }
            if (tabName === "details") {
              document.getElementById(tabName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            else {
              document.getElementById(tabName).style.display = "block";
              evt.currentTarget.className += " active";
              document.getElementById("details").style.display = "none";
            }
          // 상품평 댓글 닫기
            var reviews = document.getElementById("reviews");
            var reviewComments = reviews.querySelectorAll(".review-comments");
            reviewComments.forEach(function(comment) {
              comment.style.display = "none";
            });

            // 상품평 댓글 보이기/닫기
            var reviewBodies = reviews.querySelectorAll(".review-body");
            reviewBodies.forEach(function(body) {
              var commentButton = document.createElement("button");
              commentButton.innerText = "댓글 보기";
              commentButton.addEventListener("click", function() {
                var comments = body.querySelector(".review-comments");
                if (comments.style.display === "none") {
                  comments.style.display = "block";
                  commentButton.innerText = "댓글 닫기";
                } else {
                  comments.style.display = "none";
                  commentButton.innerText = "댓글 보기";
                }
              });
              body.appendChild(commentButton);
            });
            function showMoreInfo() {
    	 	   var hiddenContent = document.querySelector(".hidden-content");
               var showMoreButton = document.getElementById("show-more-button");
               if (hiddenContent.style.maxHeight === "200px") {
                   hiddenContent.style.maxHeight = "none";
                   hiddenImage.style.maxHeight = "none";
                   showMoreButton.innerText = "상품정보 접기";
                } else {
                    hiddenContent.style.maxHeight = "200px";
                    hiddenImage.style.maxHeight = "50%";
                    showMoreButton.innerText = "상품정보 더보기";
                }
            }
              function resizeIframe() {
              var iframe = document.getElementById("content-frame");
              iframe.height = "";
              iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
            }
        }
        </script>
</body>
</html>