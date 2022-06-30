<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './assets/PHPMailer-6.6.0/src/Exception.php';
    require './assets/PHPMailer-6.6.0/src/PHPMailer.php';
    require './assets/PHPMailer-6.6.0/src/SMTP.php';

    class ContactController {
        public function index() {
            require_once("./views/fontend/contact.php");
        }

        public function email() {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $contents = $_POST['message'];
            $subject = $_POST['title'];
            $this->send_email($email,$name,$contents,$subject);

            $data = $_POST;
            // var_dump($_POST); die();

            header("Location: index.php?mod=index&action=index");
        }
       
    
    // send email
	function send_email($email_recive,$name,$contents,$subject){
		//https://www.google.com/settings/security/lesssecureapps
		// Khai báo thư viên phpmailer
				
        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 0;
				$mail->SMTPOptions = array (
		        'ssl' => array(
	        	'verify_peer'  => false,
	        	'verify_peer_name'  => false,
	        	'allow_self_signed' => true)
				);
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "hoclaptrinhphp30@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "Caohung1311"; //Mật khẩu của gmail
        $mail->SetFrom("hoclaptrinhphp30@gmail.com", "Cao Hung"); // Thông tin người gửi
        $mail->AddReplyTo("hoclaptrinhphp30@gmail.com","Cao Hung");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        //$mail->AddCC($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
         //$mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
					return false;
        } else {
					return true;
        }
	}

    }
?>