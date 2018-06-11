<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailer.php');
require('mail/SMTP.php');

class home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tin_model');


	}

	public function index()
	{
		$this->load->model('Slides_model');
		$dl = $this->Slides_model->layDulieuSlide();
		$dl = array('mangdl' => $dl);
		$this->load->view('trangchu',$dl);
	}
	public function reservation()
	{
		$this->load->view('reservation');
	}
	public function datban()
	{
		$tenkh = $this->input->post('tenkh');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		$ngaydatban = $this->input->post('ngaydatban');
		$giodatban = $this->input->post('giodatban');
			$a = (string)$ngaydatban;
			$b = (string)$giodatban;
		$giodatban = $a . " " . $b;
		$songuoi = $this->input->post('songuoi');
	
		$this->load->model('Slides_model');
		if($this->Slides_model->booking($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi)){
			$this->load->view('thanhcong');
			// Gửi mail cho Admin: có ngưòi vừa đặt bàn:
			$mail = new PHPMailer\PHPMailer\PHPMailer(true);                           // Passing `true` enables exceptions
		try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'duongminhnam99@gmail.com';                 // SMTP username
	    $mail->Password = 'zvssdgnuwoyhszpy';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('GI@company.vn', 'GI restaurant');
	    $mail->addAddress('nam.duongminhnam99@gmail.com');     // Add a recipient
	    // $mail->addAddress('ellen@example.com');               // Name is optional
	    // $mail->addReplyTo('info@example.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    // //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // //Content
	    // $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = "Thông báo có khách vừa đặt bàn tên là:" .$tenkh. "SĐT là". $sdt;
	    $mail->Body    = "Tên:".$tenkh."/n". "Điện thoại:". $sdt."/n". "Thời gian: ngày ". $ngaydatban. "vào lúc". $giodatban ."/n". "Số người:".$songuoi;
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	    $mail->Charset = "UTF-8";
	    $mail->send();
	    echo 'Message has been sent';
		} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		}else{
			$this->load->view('thatbai');
		}
	}
	public function blog()
	{
		
		$this->load->model('Tin_model');
		$dl = $this->Tin_model->loadDanhsachTin2();
		$sotrang = $this->Tin_model->soTrang();
		$mangdl = array(
			'dulieutin' => $dl,
			'sotrang' => $sotrang
			);
		$this->load->view('blog', $mangdl);
	}
	public function page($trang)
	{
		$dl = $this->Tin_model->loadTintheoTrang($trang);
		$sotrang = $this->Tin_model->soTrang();
		$mangdl = array(
			'dulieutin' => $dl,
			'sotrang' => $sotrang
			);
		$this->load->view('blog', $mangdl);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */