<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://webfontworld.github.io/score/SCoreDream.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    
    <main id="main" class="container ">
        <div class="login_inner">
            <div class="banner"><img src="../../assets/img/logo.png" alt="배너이미지"></div>
            <p>아이디를 찾기 위한 정보를 입력해주세요</p>
            <div class="login_form">
                <form action="loginfindResult.php" name="loginfind" method="post">
                    <fieldset>
                        <legend class="blind">아이디 찾기</legend>
                        <div>
                            <label for="youName">이름</label>
                            <input type="text" id="youName" name="youName" class="inputStyle"   placeholder="이름" required>
                        </div>
                        <div>
                            <label for="youEmail">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일" required>
                        </div>
                        <button type="submit" class="button">아이디 찾기</button>
                    </fieldset>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>