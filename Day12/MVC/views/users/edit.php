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
        <form action="index.php?mod=user&action=updateUser&id=<?=$categorie['id']?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$categorie['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" id="" placeholder="" name="mobile" value="<?=$categorie['mobile'] ?> ">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$categorie['email'] ?> ">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password" value="<?=$categorie['password'] ?> ">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <img src="upload/<?=$categorie['avatar'] ?>" alt="">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail"  >
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" id="" placeholder="" name="status" value="<?=$categorie['status'] ?> ">
            </div>
            
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

  <!-- footer -->
    <?php
        require_once("./views/partials/footer.php");
    ?>