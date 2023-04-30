<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 판매 페이지</title>
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .product-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .product-image {
            width: 50%;
            max-height: 100%;
            overflow: hidden;
        }
        .product-image img {
            max-width: 100%;
        }
        .product-details {
            width: 50%;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .product-price {
            font-size: 20px;
            color: black;
            margin-bottom: 20px;
        }
        .buttons {
            margin-bottom: 20px;
        }
        .buttons button {
            width: 100%;
            padding: 10px 0;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .buttons button:hover {
            background-color: #0056B3;
        }
        .tab-menu {
            display: flex;
            justify-content: space-around;
            border-bottom: 1px solid #ccc;
        }
        .tab-menu button {
            padding: 10px 0;
            font-size: 18px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
        }
        .tab-content {
            display: block;
        }
        .tab-content.active {
            display: block;
        }
        .tab-image {       
        display: block;
            margin: 0 auto; 
        max-width: 100%;
        }
        .show-more {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .tab-content#reviews img,
        .tab-content#inquiries img {
          display: none;
      }
        .review {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
      }

      .review-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }

      .review-author {
        font-weight: bold;
      }

      .review-date {
        color: #777;
      }

      .review-body {
        margin-left: 20px;
      }

      .review-body p {
        margin-bottom: 10px;
      }

      .review-comments {
        margin-left: 20px;
        padding-left: 20px;
        border-left: 1px solid #ccc;
      }

      .comment {
        margin-bottom: 10px;
      }

      .comment-author {
        font-weight: bold;
      }

      .comment-date {
        color: #777;
      }
       .center-image {
        display: block;
        margin: 0 auto;
        max-width: 100%;
      }
        .hidden-image {
            height: 50%;
            overflow: hidden;
	}
	.hidden-content {
            max-height: 200px;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
       }
    </style>
</head>
<body>
    <body onload="openTabOnLoad()">
    <!-- 상품 판매 페이지의 구조 ... -->
    <div class="container">
        <div class="product-info">
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
            <button onclick="openTab(event, 'details')">상품상세</button>
            <button onclick="openTab(event, 'reviews')">상품평</button>
            <button onclick="openTab(event, 'inquiries')">상품문의</button>
            <button onclick="openTab(event, 'shipping-returns')">배송교환/반품 안내</button>
        </div>
        <div class="tab-content" id="details">
             <div>상품 세부 정보</div>
    		<button id="show-more-button" onclick="showMoreInfo()">상품정보 더보기</button>
            </div>
        <div class="tab-content" id="reviews">
               <button class="tab-menu button active" onclick="openTab(event, 'reviews')">상품평</button>
        </div>
        <script>
          var reviewsTab = document.querySelector("#reviews button");
          var reviewsImg = document.querySelector("#reviews img");

          reviewsTab.addEventListener("click", function() {
            reviewsImg.style.display = "none";
          });
        </script>

        <div class="tab-content" id="inquiries">
            <p>상품문의가 여기에 표시됩니다.</p>
        </div>
        <div class="tab-content" id="shipping-returns">
            <p>배송교환/반품 안내가 여기에 표시됩니다.</p>
        </div>
    </div>
        <script>
            function openTabOnLoad() {
            openTab(null, 'details');
            }

          function openTab(evt, tabName) {
            var i, tabContent, tabLinks;

            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
              tabContent[i].style.display = "none";
            }

            tabLinks = document.getElementsByClassName("tab-menu button");
            for (i = 0; i < tabLinks.length; i++) {
              tabLinks[i].className = tabLinks[i].className.replace(" active", "");
            }

            if (tabName === "reviews") {
              var reviewsImg = document.querySelector("#reviews img");
              reviewsImg.style.display = "none";
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
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
		  function openTabOnLoad() {
              openTab(null, 'details');
            }
            });
            function showMoreInfo() {
   		var hiddenImageDiv = document.getElementById("hidden-image");
    var showMoreButton = document.getElementById("show-more-button");
    if (hiddenImageDiv.style.maxHeight === "50%") {
        hiddenImageDiv.style.maxHeight = "none";
        showMoreButton.innerText = "상품정보 접기";
    } else {
        hiddenImageDiv.style.maxHeight = "50%";
        showMoreButton.innerText = "상품정보 더보기";
    }
}
        }
        </script>
</body>
</html>