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
                        <h1 class="mt-4">User category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">User category</li>
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
                                        <a href="index.php?mod=user&action=create" class="btn btn-primary">add new user</a>
                                        <tr>
                                            <th>id</th>
                                            <th>mobile</th>
                                            <th>email</th>
                                            <th>name</th>
                                            <th>password</th>
                                            <th>avatar</th>
                                            <th>status</th>
                                            <th>created_at</th>
                                            <th>update_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php  foreach($users as $key => $categorie) {?>
                                        <tr>
                                            <td><?=$categorie['id']?></td>
                                            <td><?=$categorie['mobile']?></td>
                                            <td><?=$categorie['email']?></td>
                                            <td><?=$categorie['name']?></td>
                                            <td><?=$categorie['password']?></td>
                                            <td><img src="upload\<?=$categorie['avatar']?>" alt="" width="100px" height="100px"></td>
                                            <td><?=$categorie['status']?></td>
                                            <td><?=$categorie['created_at']?></td>
                                            <td><?=$categorie['update_at']?></td>

                                            <td>
                                                <a href="index.php?mod=user&action=detail&id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                                                <a href="index.php?mod=user&action=edit&id=<?=$categorie['id']?>" class="btn btn-success">Edit</a>
                                                <a href="index.php?mod=user&action=delete&id=<?=$categorie['id']?>" class="btn btn-danger">Delete</a>
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