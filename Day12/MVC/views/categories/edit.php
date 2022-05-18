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
            <h3 align="center">Category</h3>
            <hr>
                <form action="index.php?mod=category&action=update&id=<?=$category['id']?>" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" name = "id" value="<?=$category['id']?>" >
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="" placeholder="" name="id" value="<?=$category['id']?>" disabled = "true">
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$category['name']?>">
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?=$category['slug']?>">
                    </div> -->
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['description']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Avatar</label> <br>
                        <img src="upload/<?=$category['thumbnail']?>" alt="" width="250px" height="250px" style="border-radius: 20%;"> 
                        <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="" >
                    </div>
                    <div class="form-group">
                        <label for="">parent_id</label>
                        <!-- <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?=$category['parent_id']?>"> -->
                     
                           <select name="parent_id" id="" class="form-control">
                                <?php
                                   
                                    foreach ($categories as $key => $cate) {
                                        $selected = "";
                                        if($cate['id'] == $category['parent_id']) {
                                            $selected = 'selected';
                                        }
                                        echo '
                                            <option value ="' . $cate['id'] . '"' . ' ' . $selected . ' ' . '>' .$cate['name'].'</option>

                                        ';
                                    }
                                ?>
                            </select>
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </body>


         <!-- footer -->
        <?php
                require_once("./views/partials/footer.php");
        ?>