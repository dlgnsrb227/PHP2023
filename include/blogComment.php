<div class="cate list2">
    <h4>최신댓글</h4>
    <ul>
        <?php
            $blogCommentNew = "SELECT * FROM blogcomment WHERE commentDelete = 0 ORDER BY blogCommentID DESC LIMIT 4";
            $blogCommentNewResult = $connect -> query($blogCommentNew);

            foreach($blogCommentNewResult as $blogComment){ ?>
                <li>
                    <a href="blogView.php?blogID=<?=$blogComment['blogID']?>">
                        <span><?=$blogComment['commentMsg']?></span>
                    </a>
                </li>
            <?php } ?>
    </ul>
</div>