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

                <main>
                        <!-- cookie -->
                        <?php if(isset($_COOKIE['msg'])) { ?>
                            <div class="alert alert-sucsess">
                                <strong>Congratulations!</strong> <?php $_COOKIE['msg']; ?>
                            </div>
                        <?php }?>

                        <?php if(isset($_COOKIE['error'])) { ?>
                            <div class="alert alert-danger">
                                <strong>Opp!</strong> <?php $_COOKIE['error']; ?>
                            </div>
                        <?php }?>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">List category</li>
                        </ol>
                        
                    

                        <!-- data Table -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">

                                    <thead>   
                                        <a href="index.php?mod=category&action=create" class="btn btn-primary">add new category</a>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Thumbnail</th>
                                            <th>Parent name</th>
                                            <th>Created at</th>
                                            <th>Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <!-- <?php  foreach($categories as $key => $categorie) {?> -->
                                        <tr>
                                            <td><?=$categorie['id']?></td>
                                            <td><?=$categorie['name']?></td>
                                            <td><?=$categorie['slug']?></td>
                                            <td><?=$categorie['description']?></td>
                                            <td><img src="upload/<?=$categorie['thumbnail']?>" alt="" width="150px" height="150px"></td>
                                            <td><?=$categorie['parent_name']?></td>
                                            <td><?=$categorie['created_at']?></td>

                                            <td>
                                                <a href="index.php?mod=category&action=detail&id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                                                <a href="index.php?mod=category&action=edit&id=<?=$categorie['id']?>" class="btn btn-success">Edit</a>
                                                <a href="index.php?mod=category&action=delete&id=<?=$categorie['id']?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    
                                    <!-- <?php } ?> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                

                <!-- footer -->
                <?php
                    require_once("./views/partials/footer.php");
                ?>