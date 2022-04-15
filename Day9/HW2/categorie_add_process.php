<?php
    require_once('connection.php');
    
    $data = $_POST;
    
    $path = uploadMuti('thumbnail', 'images');
    
    // echo '<pre>';
    //     var_dump($data);
    // echo '</pre>';
    

    // var_dump(date("Y-m-d H:i:s")); die();
    $query = "INSERT INTO posts(title, description,thumbnail, category_id, content, created_at) 
    VALUES('".$data['title']."', '".$data['description']."','". $path."',".$data['category_id'].",  '".$data['content']."', '".date("Y-m-d H:i:s")."')";

    
    // echo '<pre>';
    //     var_dump($query); 
    // echo '</pre>';die();
    
    $result = $conn->query($query);
    header('Location:index.php');

    //dinh nghia ham
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

            // if($upload_status) {
            //     if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $path)) {
            //         return array(true, $path);
            //     } else {
            //         $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
            //         return array(false, $errors);
            //     }
            // }
    

            move_uploaded_file($_FILES[$input_name]['tmp_name'], $path);
        }


        return $path;
    }

    
?>