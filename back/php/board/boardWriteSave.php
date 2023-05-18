<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $boardAuthor = $_SESSION['youNick'];
    $boardName = $_POST['boardName'];
    $boardTitle = $_POST['boardTitle'];
    $boardIngre = $_POST['boardIngre'];
    $boardContents1 = $_POST['boardContents1'];
    if(isset($_POST['boardContents2'])){
        $boardContents2 = $_POST['boardContents2'];
    }
    if(isset($_POST['boardContents3'])){
        $boardContents3 = $_POST['boardContents3'];
    }
    if(isset($_POST['boardContents4'])){
        $boardContents4 = $_POST['boardContents4'];
    }
    if(isset($_POST['boardContents5'])){
        $boardContents5 = $_POST['boardContents5'];
    }
    $boardView = 1;
    $regTime = time();
    // $boardTitle = $connect -> real_escape_string($boardTitle);
    // $boardContents1 = $connect -> real_escape_string($boardContents1);

    if(isset($_FILES['boardImg1'])){
        $boardImg1 = $_FILES['boardImg1'];
        $boardImgSize1 = $_FILES['boardImg1']['size'];
        $boardImgType1 = $_FILES['boardImg1']['type'];
        $boardImgName1 = $_FILES['boardImg1']['name'];
        $boardImgTmp1 = $_FILES['boardImg1']['tmp_name'];
    }

    if(isset($_FILES['boardImg2'])){
        $boardImg2 = $_FILES['boardImg2'];
        $boardImgSize2 = $_FILES['boardImg2']['size'];
        $boardImgType2 = $_FILES['boardImg2']['type'];
        $boardImgName2 = $_FILES['boardImg2']['name'];
        $boardImgTmp2 = $_FILES['boardImg2']['tmp_name'];
    }

    if(isset($_FILES['boardImg3'])){
        $boardImg3 = $_FILES['boardImg3'];
        $boardImgSize3 = $_FILES['boardImg3']['size'];
        $boardImgType3 = $_FILES['boardImg3']['type'];
        $boardImgName3 = $_FILES['boardImg3']['name'];
        $boardImgTmp3 = $_FILES['boardImg3']['tmp_name'];
    }

    if(isset($_FILES['boardImg4'])){
        $boardImg4 = $_FILES['boardImg4'];
        $boardImgSize4 = $_FILES['boardImg4']['size'];
        $boardImgType4 = $_FILES['boardImg4']['type'];
        $boardImgName4 = $_FILES['boardImg4']['name'];
        $boardImgTmp4 = $_FILES['boardImg4']['tmp_name'];
    }

    if(isset($_FILES['boardImg5'])){
        $boardImg5 = $_FILES['boardImg5'];
        $boardImgSize5 = $_FILES['boardImg5']['size'];
        $boardImgType5 = $_FILES['boardImg5']['type'];
        $boardImgName5 = $_FILES['boardImg5']['name'];
        $boardImgTmp5 = $_FILES['boardImg5']['tmp_name'];
    }

    // for($i=1; $i<=5; $i++){
    //     if(isset($_FILES['boardImg'.$i])){
    //         $boardImg = 'boardImg'.$i;
    //         $boardImgSize = 'boardImgSize'.$i;
    //         $boardImgType = 'boardImgType'.$i;
    //         $boardImgName = 'boardImgName'.$i;
    //         $boardImgTmp = 'boardImgTmp'.$i;

    //         ${$boardImg} = $_FILES['boardImg'.$i];
    //         ${$boardImgSize} = $_FILES['boardImg'.$i]['size'];
    //         ${$boardImgType} = $_FILES['boardImg'.$i]['type'];
    //         ${$boardImgName} = $_FILES['boardImg'.$i]['name'];
    //         ${$boardImgTmp} = $_FILES['boardImg'.$i]['tmp_name'];
    //     }
    // }

    echo $memberID, $boardAuthor, $boardName, $boardTitle, $boardIngre, $boardContents1;
    if(isset($boardContents2)){
        echo $boardContents2;
        if(isset($boardContents3)){
            echo $boardContents3;
            if(isset($boardContents4)){
                echo $boardContents4;
                if(isset($boardContents5)){
                    echo $boardContents5;
                }
            }
        }
    }

    // 이미지 파일명 확인
    if($boardImgType1){
        $fileTypeExtension = explode("/", $boardImgType1);
        $fileType = $fileTypeExtension[0];          // image
        $fileExtension = $fileTypeExtension[1];      // jpeg

        // 이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $boardImgDir = "../img/board/";
                $boardImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";

                echo "이미지 파일이 맞습니다.";
                // $sql = "INSERT INTO blog(memberID, blogTitle, blogContents, blogCategory, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCategory', '$blogAuthor', '$blogView', '$blogLike', '$blogImgName', '$blogImgSize', '0', '$regTime')";
            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    }

    // 이미지 사이즈 확인
    if($boardImgSize1 > 10000000){
    echo "<script>alert('이미지 파일 용량이 1MB를 초과했습니다.')</script>";
    }

    // echo "<pre>";
    // if(isset($boardImg1)){
    //     var_dump($boardImg1);
    // }
    // if(isset($boardImg2)){
    //     var_dump($boardImg2);
    // }
    // if(isset($boardImg3)){
    //     var_dump($boardImg3);
    // }
    // if(isset($boardImg4)){
    //     var_dump($boardImg4);
    // }
    // if(isset($boardImg5)){
    //     var_dump($boardImg5);
    // }
    // echo "</pre>";
?>
<script>
    // location.href = "board.php";
</script>