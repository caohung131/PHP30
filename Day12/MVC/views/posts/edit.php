        <!-- header -->
        <?php   
                require_once("./views/partials/header.php");  
            ?>
        <!-- end header -->
        
        <!-- sidebar -->
            <?php
                require_once("views/partials/sidebar.php");
            ?>
        <!--end sidebar -->

        <body>
            <div class="container">
            <h3 align="center">Edit page</h3>
            <h3 align="center">Post</h3>
            <hr>
                <form action="index.php?mod=post&action=update&id=<?=$category['id']?>" method="POST" role="form" enctype="multipart/form-data">
                    <!-- <input type="hidden" name = "id" value="<?=$category['id']?>" > -->
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="" placeholder="" name="id" value="<?=$category['id']?>" disabled = "true">
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?=$category['slug']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$category['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['description']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Avatar</label> <br> <br>
                        <img src="upload/<?=$category['thumbnail']?>" alt="" width="250px" height="250px" style="border-radius: 20%;"> 
                        <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="" >
                    </div>
                    <div class="form-group">
                        <label for="">parent_id</label>
                        <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?=$category['user_id']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea id="summernote" name="content" class="form-control" rows="20" cols="70" value="<?=$category['content']?>"></textarea>
                        <!-- <input  rows="20" cols="30" type="text" class="form-control" id="" placeholder="" name="content" value="<?=$category['content']?> "> -->
                    </div>
                    <div class="form-group">
                        <label for="">created_at</label>
                        <input type="time" class="form-control" id="" placeholder="" name="created_at" value="<?=$category['created_at']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </body>


         <!-- footer -->
        <?php
                require_once("./views/partials/footer.php");
        ?>

                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });
                            </script>