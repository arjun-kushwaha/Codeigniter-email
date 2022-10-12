<?php
		
		class Learn extends CI_Controller {



#working function
			public function send_email () {

				$this->load->library('email');
				$config = array(
					'protocol' =>'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_timeout' =>30,
					'smtp_port' => 465,
					'smtp_user' => 'sender email',
					'smtp_pass' => 'email app password',
					'charset' => 'utf-8',
					'mailtype' => 'html',
					'newline' => '\r\n'	
				
				);

				$this->email->initialize($config);
				$this->email->set_newline("\r\n");
				$this->email->set_crlf("\r\n");

				$this->email->from('xyzxyz@gmail.com');
				$this->email->to('receiver email');
				$this->email->subject('codeigniter email function');
				$this->email->message('Hello ! from codeigniter email library');
				if($this->email->send()) {
					echo "mail send successfully";
				}
				else
				{
					print_r($this->email->print_debugger());
				}



		}				

	}
?>
