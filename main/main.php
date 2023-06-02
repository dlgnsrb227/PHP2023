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
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- include -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/main01.png, ../assets/img/main01@2x.png 2x, assets/img/main01@3x.png 3x" />
                <img src="../assets/img/main01.png" alt="소개이미지">
            </picture> 
            <p class="intro__text">
                명확한 목적이 있는 사람은 가장 험난한 길에서 조차도 앞으로 나아가고,
                아무런 목적이 없는 사람은 가장 순탄한 길에서 조차도 앞으로 나아가지 못한다.
            </p>
        </div>
        <div class="blog__inner">
            <div class="main__wrap">
                <div class="main__banner">
                    <h2>WELCOME</h2>
                </div>
                <h2>Blog View</h2>
                <div class="cards__inner col4 line2">

<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>
<?php
    foreach($result as $blog){
?>
                    <div class="card">
                        <figure class="card__img">
                            <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                                <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                            </a>
                        </figure>
                        <div class="card__title">
                            <h3><?=$blog['blogTitle']?></h3>
                            <p><?=$blog['blogContents']?></p>
                        </div>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
    </main>
    <!-- main -->
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>