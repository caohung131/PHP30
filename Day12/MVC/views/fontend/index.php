    <!-- header -->
        <?php require_once("./views/fontend/patials/header.php"); ?>
    <!-- header -->

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>News</h1>
                            <span class="subheading">it's not difficult if we start</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php 
                        foreach($posts as $key => $post) {
                            // var_dump($key); die();
                            echo '
                            <div class="post-preview">
                                <a href="index.php?mod=index&action=post&id='.$post["id"].' ">
                                    <h2 class="post-title">'.$post['title'].'</h2>
                                    <h3 class="post-subtitle">'.$post['description'].'</h3>
                                </a>
                                <p class="index.php?mod=index&action=post&id='.$post["id"].' "">
                                
                                    <a href="#!">Up time</a>
                                    on '.$post['created_at'].'
                                </p>
                            </div>
                        
                            <hr class="my-4" /> 
                            ';
                        }
                    ?>
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require_once("./views/fontend/patials/footer.php"); ?>
            
