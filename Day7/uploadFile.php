<?php

// use function PHPSTORM_META\type;

    session_start();
    function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override) {
        $upload_status = true;
        $target_file = $target_dir . "/" . basename($_FILES[$input_name]["name"]);
        $errors = array();

        $types = "";
        if(is_array($allowtypes)) {
            foreach ($allowtypes as $key => $type) {
                $types .= $type.","; // nối điều khoản vào chuỗi
            }
        }
        $types = trim($types, ','); // cắt phảy cuối

        if(!isset($_FILES[$input_name])) {
            $errors[] = "Không có dữ liệu file";
            $upload_status = false;
        }

        if($_FILES[$input_name]['error'] != 0) {
            $errors[] = "Dữ liệu upload bị lỗi";
            $upload_status = false;
        }

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if(!in_array($imageFileType, $allowtypes)) {
            $errors[] = "Chỉ được upload các định dạng".$types;
            $upload_status = false;
        }

        // if($_FILES[$input_name]["size"] > $max_size*1024*1024);
        // {
        //     $errors[] = "Không được upload ảnh lớn hơn $max_size (MB).";
        //     $upload_status = false;
        // }

        if(file_exists($target_file) && $override == false) {
            $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
            $upload_status = false;
        }

        if($upload_status) {
            if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
                return array(true, $target_file);
            } else {
                $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
                return array(false, $errors);
            }
        }
        else {
            return array(false, $errors);
        }

    }

    //upload Muti
    function uploadMuti($input_name, $target_dir, $override = false) {
        if(is_array($_FILES[$input_name]['name'])) {

            $numberFile = count($_FILES[$input_name]['name']);
            
            for ($i=0; $i < $numberFile ; $i++) { 
                $path = $target_dir . '/' . $_FILES[$input_name]['name'][$i];

                //validate
                if(file_exists($path) && $override == false) {
                    $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
                    $upload_status = false;
                }
                
                move_uploaded_file($_FILES[$input_name]['tmp_name'][$i], $path);
            }


        } 
        else {
            $path = $target_dir . '/' . $_FILES[$input_name]['name'];

             //validate
            if(file_exists($path) && $override == false) {
                $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
                $upload_status = false;
            } 

            if($upload_status) {
                if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $path)) {
                    return array(true, $path);
                } else {
                    $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
                    return array(false, $errors);
                }
            }
    

            move_uploaded_file($_FILES[$input_name]['tmp_name'], $path);
        }


        
    }

    uploadMuti('avatar', 'images');

//     $upload = uploadFile('avatar', 'images', array('jpg', 'jpeg', 'png', 'gif'), 53, false);
//     echo "<pre>";
//     var_dump($_FILES['avatar']);
//     echo "</pre>";
//     $_SESSION['upload_status'] = $upload;
//    header('Location: upload.php'); // chuyen lai ve upload file de xem ket qua
?>