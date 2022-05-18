    <!-- header -->
    <?php require_once("./views/fontend/patials/header.php"); ?>
    <!-- header -->

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php 
                                echo $post['title'];
                            ?></h1>
                            <h2 class="subheading"><?php 
                                echo $post['description'];
                            ?></h2>
                            <span class="meta">
                                Posting time
                                <a href="#!">
                                    <?php 
                                        echo $post['user_id'];
                                    ?>
                                    <br>
                                </a>
                                    <?php 
                                        echo $post['created_at'];
                                    ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    
                            <?php 
                                
                                echo '<div>
                                    '.$post["content"].'
                                    </div>';
                            ?>
                        
                    </div>
                </div>
            </div>
        </article>
      <!-- Footer-->
        <?php require_once("./views/fontend/patials/footer.php"); ?>
        <!-- Footer-->