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
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="index.php?mod=category&action=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
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
           
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>

  <!-- footer -->
    <?php
        require_once("./views/partials/footer.php");
    ?>