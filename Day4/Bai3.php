
<?php
$name = "    vŨ          văN thƯơNg    ";
echo "Chuỗi ta nhập vào là: \"" . $name . "\"</br>";

$output = "";
$data = explode(" ", $name);
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] != '') {
        $output .= $data[$i] . " ";
    }
}
//thừa khoảng trắng cuối chuỗi
$output = trim($output);
// chuyển hết chuỗi thành chữ thường
$output = mb_strtolower($output, 'UTF-8');
// chuyển chữ cái đầu của mỗi từ thành in hoa
$output = ucwords($output);

var_dump($output);

echo "Chuỗi sau khi được chuẩn hóa là: \"" . $output . "\"";