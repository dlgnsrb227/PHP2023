<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_POST['boardID'];
    $boardName = $_POST['boardName'];
    $boardTitle = $_POST['boardTitle'];
    $boardIngre = $_POST['boardIngre'];

    $boardName = $connect -> real_escape_string($boardName);
    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardIngre = $connect -> real_escape_string($boardIngre);

    $memberID = $_SESSION['memberID'];
    
    echo $boardID, $boardName, $boardTitle, $memberID, $boardIngre;


    $sql = "SELECT * FROM member WHERE memberID = '$memberID'";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['MemberID'] == $memberID){
            $sql = "UPDATE board SET boardName = '$boardName', boardTitle = '$boardTitle', boardIngre = '$boardIngre'";
            $connect -> query($sql);
        }
    }
?>