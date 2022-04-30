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
                                        <a href="index.php?mod=post&action=create" class="btn btn-primary">add new category</a>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>description</th>
                                            <th>thumbnail</th>
                                            <th>category_id</th>
                                            <th>content</th>
                                            <th>created_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php  foreach($posts as $key => $categorie) {?>
                                        <tr>
                                            <td><?=$categorie['id']?></td>
                                            <td><?=$categorie['title']?></td>
                                            <td><?=$categorie['description']?></td>
                                            <td><img src="<?=$categorie['thumbnail']?>" alt=""><?=$categorie['thumbnail']?></td>
                                            <td><?=$categorie['category_id']?></td>
                                            <td><?=$categorie['content']?></td>
                                            <td><?=$categorie['created_at']?></td>

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