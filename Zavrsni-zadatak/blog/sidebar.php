
<?php include('povezivanjeBaze.php')?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest posts</h4>
            
                <?php

                    $sql3 = "SELECT Title, Id FROM posts ORDER BY Created_at DESC LIMIT 5" ;
                    $statement = $connection->prepare($sql3);
                    $statement ->execute();
                    $statement ->setFetchMode(PDO::FETCH_ASSOC);
                    $postsId = $statement->fetchAll();            
                ?>

                <?php foreach($postsId as $postId) { ?>
                    <div>
                    <a href = "single-post.php?post_id=<?php echo($postId['Id']) ?>"><?php echo ($postId['Title'])?> </a>             
            </div>
                

                <?php } ?>
              
</aside><!-- /.blog-sidebar -->