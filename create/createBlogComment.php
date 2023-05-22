<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE blogComment (";
    $sql .= "blogCommentID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned,";
    $sql .= "blogID int(10) unsigned,";
    $sql .= "commentName varchar(20) NOT NULL,";
    $sql .= "commentPass varchar(20) NOT NULL,";
    $sql .= "commentMsg varchar(255) NOT NULL,";
    $sql .= "commentDelete int(10) NOT NULL,";
    $sql .= "regTime int(10) NOT NULL,";
    $sql .= "PRIMARY KEY (blogCommentID)";
    $sql .= ") charset=utf8";

    $connect -> query($sql);
?>