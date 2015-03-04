<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evento_c extends CI_Controller {

	function	__construct()
	{
		parent::__construct();
			#Carga de libreria y helpers
	}

/*	public function index()
	{
		$this->load->view('Principal_v');
	}
*/
	public function altaEvento()
	{
		 $this->load->library('email');
		 $this->load->library('parser');

		 $this->email->clear();
		 $config['mailtype'] = "html";
		 $this->email->initialize($config);
		 $this->email->set_newline("\r\n");
		 $this->email->from('facturassushi@gmail.com', 'Juan Ignacio');
		 $list = array('wolfernand@gmail.com');
		 $this->email->to($list);
		 $data = array();
		 $htmlMessage = $this->parser->parse('messages/email', $data, true);
		 $this->email->subject('This is an email test');
		 $this->email->message($htmlMessage);



		 if ($this->email->send()) {
		     echo 'Your email was sent, thanks chamil.';
		 } else {
		     show_error($this->email->print_debugger());
		 }
		/*// Set SMTP Configuration
		$emailConfig = array(
		   'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'facturassushi@gmail.com',
		    'smtp_pass' => 'todosjuntos',
		    'mailtype'  => 'html',
		    'charset'   => 'iso-8859-1'
		);
		 
		// Set your email information
		$from = array('email' => 'facturassushi@gmail.com', 'name' => 'Juan Ignacio');
		$to = array('wolfernand@gmail.com', 'fernandovela1@hotmail.com.com');
		$subject = 'PruebaPHP';
		 
		$message = 'Type your gmail message here';
		// Load CodeIgniter Email library
		$this->load->library('email', $emailConfig);
		 
		// Sometimes you have to set the new line character for better result
		$this->email->set_newline("rn");
		// Set email preferences
		$this->email->from($from['email'], $from['name']);
		$this->email->to($to);
		 
		$this->email->subject($subject);
		$this->email->message($message);
		// Ready to send email and check whether the email was successfully sent
		 
		if (!$this->email->send()) {
		    // Raise error message
		    show_error($this->email->print_debugger());
		}
		else {
		    // Show success notification or other things here
		    echo 'Success to send email';
		}*/
		// See more at: http://arjunphp.com/send-gmail-codeigniter-email-library/#sthash.78z73RqX.dpuf
/*		$this->load->library('email');

		$this->email->from('facturassushi@gmail.com', 'Juan Ignacio');
		$this->email->to('wolfernand@gmail.com'); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();
*/
		//echo $this->email->print_debugger();
		/*$config = Array(        
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'facturassushi@gmail.com',
			'smtp_pass' => 'todosjuntos',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
			);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$contenido="Contenido de Prueba";       

		$message="<html><body><span>This is php data".$contenido."</span></body></html>";
		echo $contenido;
		die();
		$this->email->from('facturassushi@gmail.com','Review for Find a care home');
		$this->email->to('wolfernand@gmail.com');
		$this->email->Subject('PruebaPHP');
		$this->email->message($message);

		$this->email->send();
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";*/
	}

}