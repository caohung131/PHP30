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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Post category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Post category</li>
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
                                        <a href="index.php?mod=post&action=create" class="btn btn-primary">add new category</a>
                                        <tr>
                                            <th>id</th>
                                            <th>slug</th>
                                            <th>title</th>
                                            <th>description</th>
                                            <th>thumbnail</th>
                                            <th>user name</th>
                                            <th>content</th>
                                            <th>created_at</th>
                                            <th>Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php  foreach($posts as $key => $categorie) {?>
                                        <tr>
                                            <td><?=$categorie['id']?></td>
                                            <td><?=$categorie['slug']?></td>
                                            <td><?=$categorie['title']?></td>
                                            <td><?=$categorie['description']?></td>
                                            <td><img src="upload/<?=$categorie['thumbnail']?>" alt="" width="200px" height="200px"></td>
                                            <td><?=$categorie['parentNameUser']?></td>
                                            <td><?=$categorie['content']?></td>
                                            <td><?=$categorie['created_at']?></td>

                                            <td>
                                                <a href="index.php?mod=post&action=detail&id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                                                <a href="index.php?mod=post&action=edit&id=<?=$categorie['id']?>" class="btn btn-success">Edit</a>
                                                <a href="index.php?mod=post&action=delete&id=<?=$categorie['id']?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    
                                    <?php } ?>
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