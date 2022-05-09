
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://neh3na.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://neh3na.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://neh3na.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="text-align: center; width: 80%;
    display: contents;" >
        <h2 class="text-center">--- Detail ---</h2>
       
        
                <h3>ID: <?= $categorie['id']?></h3>
                <h3>Name: <?= $categorie['title']?></h3>
                <h3>Slug:<?= $categorie['slug']?></h3>
                <h3>Description: <?= $categorie['description']?></h3>
                <h3>Thumbnail:<br/><img width="550px" height="450px" src="upload/<?= $categorie['thumbnail']?>" alt="" ></h3>
                <h3>Parent_id: <?= $categorie['user_id']?></h3>
                <h3>Parent_id: <?= $categorie['content']?></h3>
                <h3>Created_at: <?= $categorie['created_at']?></h3>

               
         
    </div>
</body>
</html>