<?php
    class BaseController {
        public function view($path, $data) {
            extract($data);
            require_once('views/' . $path);
        }

        public function redirect($url){
            header("Location: " . $url);
        }

         //up load file
         function fileUpload($input_file, $max_size, $formats_allowed_array)
         {
             define("MAX_SIZE", 500000);
             define("MINES", ['jpg', 'bmp', 'png', 'gif']);
             $target_dir = 'upload';
             $target_file = $target_dir . "/" . basename($input_file["name"]);
             $uploadOk = true;
             $file_path = '';
             $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
             $error_arr = [];
     
             // Check if file already exists
             // if (file_exists($target_file)) {
             //     $error_arr[] = "File đã tồn tại!";
             //     $uploadOk = false;
             // }
     
             // Check max file size
             if ($input_file["size"] > $max_size) {
                 $error_arr[] = "Nhập file nhỏ hơn " . $max_size . "B!";
                 $uploadOk = false;
             }
             // Allow certain file formats
             if (!in_array($imageFileType, $formats_allowed_array)) {
                 $error_arr[] = "Chỉ cho phép định dạng file " . implode(',', array_values($formats_allowed_array)) . "!";
                 $uploadOk = false;
             }
     
             // Check if $uploadOk false
             if ($uploadOk === false) {
                 $error_arr[] = "Sorry, your file was not uploaded.";
                 // if everything is ok, try to upload file
             } else {
                 if (move_uploaded_file($input_file["tmp_name"], $target_file)) {
                     $file_path = basename($input_file["name"]);
                 } else {
                     $uploadOk = false;
                     $error_arr[] = "Sorry, there was an error uploading your file.";
                 }
             }
             return [
                 'status' => $uploadOk,
                 'error' => $error_arr,
                 'file_path' => $file_path,
             ];
         }
 
    }
?>