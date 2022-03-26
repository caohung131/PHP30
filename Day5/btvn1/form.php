<?php
    //kt rong set gia tri mac dinh
    if(!empty($_POST['add-info'])) {
        $arrStudents = [
            'name' => isset($_POST['name']) ? $_POST['name'] : '',
            'gender' => isset($_POST['gender']) ? $_POST['gender'] : '',
            'dob' => isset($_POST['dob']) ? $_POST['dob'] : '',
            'address' => isset($_POST['address']) ? $_POST['address'] : '',
            'language' => isset($_POST['language']) ? $_POST['language'] : '',
            'info_more' => isset($_POST['info_more']) ? $_POST['info_more'] : '',
        ];
        
    }


?>
<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Zent-Group</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
     <div class="container">
          <form action="showInfo.php" method="POST" role="form" class="mb-5 w-75 mx-auto" autocomplete="off">
               <legend class="text-center my-3">
                    <h2>ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</h2>
               </legend>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Họ và Tên</label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" placeholder="Nhập họ tên" name="name">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Giới tính</label>
                    <div class="col-sm-9">
                         <input type="radio" name="gender" value="Nam"> Nam
                         <input type="radio" name="gender" value="Nữ"> Nữ
                         <input type="radio" name="gender" value="Khác"> Khác
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ngày sinh</label>
                    <div class="col-sm-9">
                         <input type="date" class="form-control" name="dob">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Quê quán</label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" placeholder="Nhập quê quán" name="address">
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ngoại ngữ</label>
                    <div class="col-sm-9">
                         <input type="checkbox" name="language" value="Tiếng Anh"> Tiếng Anh
                         <input type="checkbox" name="language" value="Tiếng Nhật"> Tiếng Nhật
                         <input type="checkbox" name="language" value="Tiếng Pháp"> Tiếng Pháp
                    </div>
               </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Thông tin thêm</label>
                    <div class="col-sm-9">
                         <textarea rows="4" class="form-control" name="info_more"></textarea>
                    </div>
               </div>

               <div class="text-center">
                    <input type="submit" name="add-info" class="btn btn-primary" value="Submit">
               </div>
               
            </form>
     </div>
</body>

</html>