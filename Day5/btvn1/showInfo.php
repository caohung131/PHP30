<?php
    session_start();

    if(isset($_POST['add-info'])) {
        $data['students'][] = $_POST;
        $arrStudents = $data['students'];
    }
  


    // var_dump($data);

  
    // echo '<pre>';
    //     print_r($arrStudents);
    // echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center my-3">THÔNG TIN SINH VIÊN</h3>
    <?php foreach($arrStudents as $student) {?>
    <ul>
        <li><b>Họ và tên:</b> &nbsp<?= $student['name'] ?></li>
        <li><b>Giới tính:</b> &nbsp<?= $student['gender'] ?></li>
        <li><b>Ngày sinh:</b> &nbsp<?= $student['dob'] ?></li>
        <li><b>Quê quán:</b>&nbsp<?= $student['address'] ?></li>
        <li><b>Ngoại ngữ:</b>&nbsp<?= $student['language'] ?></li>
        <li><b>Thông tin thêm:</b>&nbsp<?= $student['info_more'] ?></li>
    </ul>

    <a href="form.php">Nhập lại</a>
    <?php } ?>
</body>
</html>