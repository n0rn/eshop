<?php include ROOT. '/views/layouts/header.php';?>

<hr />
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-main">
                    <h1><a class="/site/<?php echo $postItem['id']; ?>"><?php echo $postItem['title'];?></a></h1>
                    <a href="singlepost.html">
                        <img src="/template/img/1.jpg" class="img-responsive img-rounded" />
                    </a>
                    <div class="blog-info">
                        <span class="label label-primary btn">Posted on 26th November 2014</span>
                        <span class="label label-success btn">In Technology</span>
                        <span class="label label-danger btn"><?php echo  $postItem['author'];?></span>
                    </div>
                    <div class="blog-txt">
                        <?php echo  $postItem['text'];?>
                    </div>
                </div>
                <!--BLOG THREE END -->

                <!--PAGING  END -->
            </div>
            <?php include ROOT. '/views/layouts/sidebar.php';?>
        </div>
    </div>
</section>
<?php include ROOT. '/views/layouts/footer.php';?>

</body>
</html>
