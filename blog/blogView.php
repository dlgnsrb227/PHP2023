<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    } else {
        Header("location: blog.php");
    };

    $blogID = $_GET['blogID'];

    $blogSql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($blogInfo);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- include -->
    <main id="main" class="container">
        <div class="blog__title" style="background-image:url(../assets/blog/<?= $blogInfo['blogImgFile'] ?>)">
            <span class="cate"><?= $blogInfo['blogCategory'] ?></span>
            <h2 class="title"><?= $blogInfo['blogTitle'] ?></h2>
            <div class="info">
                <span class="author"><?= $blogInfo['blogAuthor'] ?></span>
                <span class="date"><?= date('y-m-d', $blogInfo['blogRegTime']) ?></span>
                <div class="modify">
                    <a href="#">수정</a>
                    <a href="#">삭제</a>
                </div>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left mt70">
                <div class="blog__contents">
                    <h3><?= $blogInfo['blogTitle'] ?></h3>
                    <p><?= $blogInfo['blogContents'] ?></p>
                </div>
            </div>
            <div class="right mt70">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>

                    <?php include "../include/blogCate.php" ?>

                    <?php include "../include/blogNew.php" ?>

                    <?php include "../include/blogPop.php" ?>

                    <?php include "../include/blogComment.php" ?>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
        <div class="blog__comment">
            <h3>댓글</h3>
            <div class="comment__view">
                <div class="avatar">
                    <img src="https://t1.daumcdn.net/tistory_admin/blog/admin/profile_default_06.png" alt="회원이미지">
                </div>
                <div class="info">
                    <span class="nickname">곰돌이</span>
                    <span class="date">2023.05.22</span>
                    <p class="msg">댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다. 댓글 내용이 들어갑니다.</p>
                    <div class="comment__modify">
                        <label for="" class="blind">수정내용</label>
                        <textarea name="msg__modify" id="msg__modify" rows="4" placeholder="수정할 내용을 적어주세요."></textarea>
                        <label for="" class="blind">비밀번호</label>
                        <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호를 입력하세요.">
                        <button id="commentModifyCancle">취소</button>
                        <button id="commentModifyButton">수정</button>
                    </div>
                    <div class="comment__delete">
                        <label for="commentPass" class="blind">비밀번호</label>
                        <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호를 입력하세요.">
                        <button id="commentDeleteCancle">취소</button>
                        <button id="commentDeleteButton">삭제</button>
                    </div>

                    <div class="del">
                        <a href="#" class="comment__del__del">삭제</a>
                        <a href="#" class="comment__del__mod">수정</a>
                    </div>
                </div>
            </div>

            <div class="comment__write">
                <label for="">이름</label>
                <input type="text" id="commentName" name="commentName" placeholder="이름을 입력하세요.">
                <label for="commentPass">비밀번호</label>
                <input type="password" id="commentPass" name="commentPass" placeholder="비밀번호를 입력하세요.">
                <label for="">댓글쓰기</label>
                <textarea type="text" id="commentWrite" name="commentWrite" placeholder="댓글을 작성해주세요."></textarea>
                <button type="submit" class="btnStyle3 mt10">작성</button>
            </div>
        </div>
        <!-- blog__comment -->
        <div class="blog__article">
            <h3>관련글 보기</h3>
            <?php include "../include/blogArticle.php" ?>
            <!-- <div class="cards__inner col4 line0">
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg, assets/img/blog03@3x.jpg" />
                        <a href="#" class="more"><img src="assets/img/blog03.jpg" alt="카드이미지"></a>
                        <div class="card__title">
                            <h3>리액트의 추세</h3>
                            <p>React의 인기는 향후 몇 년 동안 계속 증가할 것으로 예상됩니다. React는 강력하고 유연한 라이브러리이며 다양한 웹사이트와 모바일 앱을 구축하는 데 사용할 수 있습니다.
                                 또한 React는 대규모 커뮤니티 지원을 받으므로 개발자가 문제를 해결하고 배우는 데 도움을 받을 수 있습니다.</p>
                        </div>
                    </figure>
                </div>
            </div> -->
        </div>
        <!-- blog__article -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>