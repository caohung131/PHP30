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
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>

                        <!-- data Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                 
                                    <thead>   
                                        <a href="categorie_add.php" class="btn btn-primary">add new user</a>
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
                                            <td><img src="<?=$categorie['avatar']?>" alt="" width="200px" height="200px"></td>
                                            <td><?=$categorie['status']?></td>
                                            <td><?=$categorie['created_at']?></td>
                                            <td><?=$categorie['update_at']?></td>

                                            <td>
                                                <a href="categorie_detail.php?id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                                                <a href="categorie_edit.php?id=<?=$categorie['id']?>" class="btn btn-success">Edit</a>
                                                <a href="category_delete.php?id=<?=$categorie['id']?>" class="btn btn-danger">Delete</a>
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