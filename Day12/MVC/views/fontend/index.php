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
                    
                    <br>
                    <br>
                    <br>
                    <div class="form-floating" >
                        <h4>Viết bình luận</h4><span class="glyphicon glyphicon-pencil">...</span>
                        <form action="index.php?mod=comment&action=index" method="POST" role="form">
                            <div class="form-group">
                                <textarea name="content" id="" rows="3" class="form-control"></textarea>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </form>
                    </div>

                    <div class="form-floating" >
                        <br>
                        <ul class="form-floating">
                            
                            <?php
                                    foreach($coments as $key => $commet) {
                                        echo '<div>';
                                        echo '<img src="upload/150143.jpg" alt="" width=100px>';
                                        echo "
                                        
                                        <li> ". $commet["content"]; ".</li>
                                
                                        ";

                                        echo '</div>';

                                    }
                            ?>

                    </ul>
                    </div>

                    <div>
                        <ul>
                            <?php
                                // foreach() {
                                //     echo '
                                
                                //     <li></li>
                               
                                // ';
                                // }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require_once("./views/fontend/patials/footer.php"); ?>
            
