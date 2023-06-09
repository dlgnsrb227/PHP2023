<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/maincate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <title>Only For You</title>

</head>
<body>
    <?php include "../include/header.php" ?>
    <main id="main">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider__inner s1">
                    <div class="container">
                        <h2  style="color: #fff;">매일이 건강한 날! <br>온리포유와 함께<br> 시작해 보세요!</h2>
                        <img src="../../assets/img/sun-dynamic-color.png" alt="배너이미지">

                    </div>
                </div>
                <div class="swiper-slide slider__inner s2">
                    <div class="container">
                        <h2 style="color: #e54b4bc0;">맛있는 나의 레시피 , <br>내 레시피를 세상과 <br>공유하고 선물 받아가세요 !</h2>
                        <img src="../../assets/img/gift-dynamic-color.png" alt="배너이미지" class="gift-dynamic-color">
                    </div>
                </div>
                <div class="swiper-slide slider__inner s3">
                    <div class="container">
                        <h2 style="color: #F9F8E6;">ONLY ONE SITE FOR THE BEST HEALTH , VISIT NOW !</h2>
                        <img src="../../assets/img/heart-dynamic-color.svg" alt="배너이미지" class="heart-dynamic-color">
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div> -->
        </div>
        <div class="container">
            <!-- <div class="search">
                <h2>어느 부분이 고민이신가요 ?</h2>
                <form action="#">
                    <input type="text" placeholder="고민이 되는 부분을 검색해 보세요" required>
                    <button type="submit"></button>
                </form>
            </div> -->
            <div class="content">
                <h3>어떤 부분을 자세히 알고싶은가요 ?</h3>
                <div class="content__inner">
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content01.svg" alt="eye">
                            <p>눈</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content02.svg" alt="river">
                            <p>간</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content03.svg" alt="born">
                            <p>뼈</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content04.svg" alt="pregnant">
                            <p>임산부</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content05.svg" alt="stress">
                            <p>스트레스</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content06.svg" alt="skin">
                            <p>피부</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content07.svg" alt="blood">
                            <p>혈액순환</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content08.svg" alt="digestive">
                            <p>소화기능</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content09.svg" alt="Breathing">
                            <p>호흡기능</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <img src="../../assets/img/content10.svg" alt="climacterium">
                            <p>갱년기</p>
                        </a>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="reason mt150">
            <div class="lefttext_slide">
                <article id="typo">
                    <div class="wrapper">
                        <div class="marquee">
                            <div class="marquee__group">
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                                What you need now is ONLY FOR YOU    /
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="reason__main">
                <div class="reason__inner1">
                    <h1>영양제가 음식을 <span style="color: #FFAD7F;">대신할 수 없는 이유는 뭘까 ?</span></h1>
                    <div class="c1 pulse" >
                        <h2>자연 비타민이 생체 이용률이 높다.</h2>
                        <p class="pulse" data-delay="1500" >인체는 합성화학 물질을 잘 소화하지 못합니다. <br>천연 , 합성 비타민 E를 복용시킨 뒤 소변 검사를 하면 ,<br> 합성 비타민의 검출량이 훨씬 높습니다.</p>
                    </div>
                    <div class="c2" >
                        <h2>화학성 분자 합성은 천연물질을 이길 수 없다.</h2>
                        <p>화학적으로 분자를 합성했을 땐 비대칭성을 어떤 방법을 써도<br> 만들어 낼 수 없습니다.</p>
                    </div>
                    <div class="c3" >
                        <h2>합성 비타민은 천연 비타민에 있는 보조인자가 없다.</h2>
                        <p>비타민과 보조인자를 따로 먹는 것보다 식품을 온전히 농축해<br> 먹는 것이 영양학적으로도 식품 섭취의 효율성 측면에서도<br> 훨씬 좋습니다.</p>
                    </div>
                </div>
                <div class="reason__inner2">
                    <h1>영양제 의지는 NO! <span style="color: #FFAD7F;">건강한 음식을 먹어야 하는 이유는 ?</span></h1>
                    <div class="c4" >
                        <h2>영양소가 하는 일</h2>
                        <p>에너지를 발생시키고 우리 몸을 구성하고 , 몸의 기능을 조절하는  중요한 역할을 합니다.</p>
                    </div>
                    <div class="c5" >
                        <h2>부족하면 꼭 탈을 일으키는 부영양소.</h2>
                        <p>만약 부영양소가 부족하다면 우리 몸은 즉각적으로 결핍 증세를<br> 나타내기 시작합니다.</p>
                    </div>
                    <div class="c6" >
                        <h2>우리 몸에 중요한 비타민과 무기염류</h2>
                        <p>무기염류와 비타민은 우리 몸의 여러가지 기능이 정상적으로 <br>돌아가는 데 반드시 필요한 물질입니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="righttext_slide">
            <article id="typo">
                <div class="wrapper">
                    <div class="marquee">
                        <div class="marquee__group">
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                            What you need now is ONLY FOR YOU /
                        </div>
                    </div>
                </div>
            </article>
        </div> 
        <div id="why_wrap">
            <div class="whycontainer">
                <div class="whyheader">
                    <h1>온리포유 왜 필요한걸까요 ?</h1>
                </div>
                <div class="whymain">
                    <h3>since</h3>
                    <div class="reason__inner3">
                        <div class="c7">
                            2023
                        </div>
                    </div>
                    <p class="c8">건강한 자는 모든 희망을 안고 , 희망을 가진 자는 모든 꿈을 이룬다는 말이 있듯이<br> 저희 온리포유는 여러분께 사라지지 않는 건강이야기를 들려드리고 , <br>나에게 필요한 맞춤 영양소와 건강한 음식으로 인한<br> 신체 건강 관리를 도와드리고 있습니다.</p>
                </div>
            </div>
        </div>
        <div id="qwrap">
            <div class="qcontainer">
                <div class="qheader">
                    <h1>가장 많은 공감을 얻은 질문리스트 🍒</h1>
                </div>
                <div class="qmain">
                    <div class="qleft">
                        <div class="box1">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#뼈</div>
                                <p>40대 / 남 / W**님</p>
                            </div>
                            <div class="main">
                                <p>Q. 뼈에 좋은 멸치는 뭐랑 먹으면 더 좋은 시너지가 생길까요 ?<br><br>
                                    요즘 뼈 건강을 신경써야 돼서 , 온리포유를 통해 좋은 정보 많이 얻고 있습니다. <br>멸치를 자주 먹으려 하는데 멸치랑 또 뭘 챙겨먹으면 더 좋은 효과가 날 지 궁금합니다.
                                </p>
                            </div>
                        </div>
                        <div class="box2">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#눈</div>
                                <p>20대 / 여 / y**님</p>
                            </div>
                            <div class="main">
                                <p>Q. 컴퓨터를 많이 보는 직업이라 눈 건강이 신경쓰여요.<br><br>
                                    평소 컴퓨터를 오래 보는 직업이라 눈 건강에 특히 더 신경쓰고 있어요. <br>이럴 때 먹으면 도움이 될만한 좋은 음식들이 어떤 게 있을까요 ?
                            </div>
                        </div>
                        <div class="box3">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#임산부</div>
                                <p>30대 / 여 / l**님</p>
                            </div>
                            <div class="main">
                                <p>Q. 임신중인데 산모와 태아에게 좋은 음식을 더 알려주세요 !<br><br>
                                    온리포유를 너무 잘 사용하는 임산부입니다. 임산부는 특히 음식에 더 신경을 써야해서<br> 선택의 폭이 넓지 않은데 , 태아와 산모에게 좋은 음식을 더 자세히 알고 싶어요! 
                            </div>
                        </div>
                    </div>
                    <div class="aright">
                        <div class="box4">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#뼈</div>
                                <p>온리포유의 답변</p>
                            </div>
                            <div class="main">
                                <p>A. 멸치와 함께 먹을 수 있는 좋은 음식을 추천해드리도록 하겠습니다.<br><br>
                                    멸치와 함께 먹을 수 있는 좋은 음식으로는 다양한 채소와 함께 조리된<br> 요리, 스프, 볶음 등이 있습니다. 멸치와 채소를 함께 조리하면 식이섬유와 다른<br>필수 영양소를 함께 공급받을 수 있으며,더욱 건강한 식사를 할 수 있습니다. 💛
                                </p>
                            </div>
                        </div>
                        <div class="box5">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#눈</div>
                                <p>온리포유의 답변</p>
                            </div>
                            <div class="main">
                                <p>A. 컴퓨터를 오랫동안 사용하는 분에게 눈에 좋은 음식을 추천해드릴게요. <br><br>
                                    달걀: 눈 건강에 중요한 영양소인 루테인과 제아잔틴이 풍부하게 포함되어 있습니다. <br>어류: 오메가-3 지방산을 함유한 물고기(연어, 참치 등)는 망막 건강을 촉진하고 <br>노화로 인한 시력 감소를 예방할 수 있습니다.규칙적인 안구 운동, <br>적절한 휴식, 적정한 조명과 안경 사용 등도 중요합니다. 💛
                                </p>
                            </div>
                        </div>
                        <div class="box6">
                            <div class="side"></div>
                            <div class="header">
                                <div class="h1 catebox">#임산부</div>
                                <p>온리포유의 답변</p>
                            </div>
                            <div class="main">
                                <p>A. 임산부와 태아에게 좋은 음식 추천 목록입니다!<br><br>

                                    단백질: 닭고기, 양고기, 생선, 콩, 두부 등 고단백 식품은 태아의 성장과 발달에 필요한 <br>영양소입니다.
                                    잎채소: 시금치, 케일, 상추 등의 잎채소에는 철분, 엽산, 비타민 C, 칼슘 등이 <br>풍부하게 들어있습니다.
                                임신 중에는 음식 안전에도 주의해야 합니다. 익지 않은 고기, <br>날생선, 날씨 조건이 좋지 않은 해산물 등은 피하고, 식품 안전 지침을 준수해야 합니다.💛
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="subscribe">
            <div class="scontainer">
                <h1>SUBSCRIBE TO OUR SITE AND RECIVE NEW NEWS EVERY TIME</h1>
            </div>
        </div>
    </main>
    <!-- parallax__info -->
    <footer id="footer">
        <div class="container">
            <div class="footlogo">
                <img src="../../assets/img/footlogo.svg" alt="로고이미지">
            </div>
            <div class="footcont">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                </ul>
                <ul>
                    <li>ONLYFORYOU</li>
                    <li>BRN : 00 - 00 - 0000</li>
                    <li>Representative : people</li>
                </ul>
                <ul>
                    <li>call : 1588-0000</li>
                    <li>email : only@for.you</li>
                    <li>Address : ansan </li>
                </ul>
                <strong>copyright &copy; 2023 onlyforyou Inc All right reserved</strong>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },

            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },

            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        });
    </script>
    <!-- get방식으로 넘기는 스크립트 -->
    <script>
            const a = document.querySelectorAll(".content__inner > div a");
            const b = document.querySelectorAll(".content__inner > div > a >  img");
            
            // console.log(b)
            a.forEach((el,index)=>{
                el.addEventListener("click",(e)=>{
                    e.preventDefault();
                    const cate =b[index].alt;
                    console.log(b)
                    sendData(cate);
                })
            })

            function sendData(cate) {
            //데이터를 URL에 포함하여 새로운 URL 생성
            var url = "../cate/cate.php?category=" + encodeURIComponent(cate);
            
            // 새로운 URL로 이동
            window.location.href = url;
            }

            // 함수 실행
            
    </script>
    <!-- 검색 스크립트 -->
    <script>
        function scroll(){
            let scrollTop = window.pageYOffset || window.scrollY;
            //얘는 여러개를 한 번에 움직일 때 사용
            // document.querySelectorAll(".c1").forEach(item => {
            //     if(scrollTop > item.offsetTop - window.innerHeight/2 ){
            //         item.classList.add("show");
            //     }
            // });
            // if(scrollTop > document.querySelector(".reason__header1").offsetTop - window.innerHeight/2 ){
            //     document.querySelector(".reason__header1").classList.add("show");
            // }

            // if(scrollTop > document.querySelector(".reason__header2").offsetTop - window.innerHeight/2 ){
            //     document.querySelector(".reason__header2").classList.add("show");
            // }

            if(scrollTop > document.querySelector(".c1").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c1").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c2").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c2").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c3").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c3").classList.add("show");
            }
            if(scrollTop > document.querySelector(".c4").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c4").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c5").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c5").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c6").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c6").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c7").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c7").classList.add("show");
            }

            if(scrollTop > document.querySelector(".c8").offsetTop - window.innerHeight/2 ){
                document.querySelector(".c8").classList.add("show");
            }

            if(scrollTop > document.querySelector(".box1").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box1").classList.add("show");
            }
            if(scrollTop > document.querySelector(".box2").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box2").classList.add("show");
            }
            if(scrollTop > document.querySelector(".box3").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box3").classList.add("show");
            }
            if(scrollTop > document.querySelector(".box4").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box4").classList.add("show");
            }
            if(scrollTop > document.querySelector(".box5").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box5").classList.add("show");
            }
            if(scrollTop > document.querySelector(".box6").offsetTop - window.innerHeight/2 ){
                document.querySelector(".box6").classList.add("show");
            }

            if(scrollTop > document.querySelector(".scontainer").offsetTop - window.innerHeight/2 ){
                document.querySelector(".scontainer").classList.add("show");
            }

            
            requestAnimationFrame(scroll);  //1초에 60번만 작동하게 하는 애니메이션
        }
        scroll();
        
            
        


        
    </script>
</body>
</html>