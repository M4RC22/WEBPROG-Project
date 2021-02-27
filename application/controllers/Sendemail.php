<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

    public function index()
    {
        $this->load->view('#accordion');
    }
    public function send()
    {
        $subject = 'Application form of - ' . $this->input->post("lname").','. $this->input->post("fname") ;
        $file_data = $this->upload_file();
        if(is_array($file_data))
        {
        $message = '
        <h3 align="center">Application Details</h3>
            <table border="1" width="100%" cellpadding="5">
            <tr>
            <td width="30%">First Name:</td>
            <td width="70%">'.$this->input->post("fname").'</td>
            </tr>
            <tr>
            <td width="30%">Last Name:</td>
            <td width="70%">'.$this->input->post("lname").'</td>
            </tr>
            <tr>
            <td width="30%">Email Address:</td>
            <td width="70%">'.$this->input->post("email").'</td>
            </tr>
            <tr>
            <tr>
            <td width="30%">Phone Number:</td>
            <td width="70%">'.$this->input->post("contact").'</td>
            </tr>
            </table>
        ';

        $config = Array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_timeout' = '10',
                'smtp_user' => 'einstienalbert787@gmail.com', 
                'smtp_pass' => 'einstien787', 
                'mailtype'  => 'html',
                'charset'  => 'iso-8859-1',
                'wordwrap'  => TRUE
            );
        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('System');
        $this->email->to('marckennethricahuerta22@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->attach($file_data['full_path']);

        if($this->email->send()){
            if(delete_files($file_data['file_path'])){
                $response = $this->sendResponse();
                $this->session->set_flashdata('message', 'Application Sent');
                redirect('home', 'refresh'); 
        }
        }else{
            if(delete_files($file_data['file_path'])){
                $this->session->set_flashdata('message', 'Error Occured');
                redirect('home');
        }
        }
    }else{
        $this->session->set_flashdata('message', 'There is an error in attach file');
            redirect('home');
    }
}

    function upload_file()
    {
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'doc|docx|pdf';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('resume'))
        {
            return $this->upload->data();   
        }
        else
        {
            return $this->upload->display_errors();
        }
    }
    function sendResponse(){
        $this->email->clear();
        $this->email->to($this->input->post("email"));
        $this->email->from('System');
        $this->email->subject('Application Confirmation');
        $responseMessage ='
        <div align="center">
            <img src="<?php echo base_url();?>assets/images/logo.png" width="40px" height="40px"/> 
            <h1 style="color: #b9191c; letter-spacing:2px">Alcofil</h1>
         </div>
        <hr>	   
        <h3 align="center">Application Details</h3>
        <br> 
        <p>Dear Mr./Ms. '.$this->input->post("lname").',</p>
        <br>
        <p>This Letter is to let you know that we have recieved your application. We appreciate your interest in <b>Alcofil</b>. 
        We are Reviewing applications currently and expect to schedule interviews in the next couple of weeks. 
        If you are selected for an interview, please expect a phone call from our staff. </p>
        <br>
        <p>Thank you and have a nice day!</p>
        <br>
        <p>Regards,<p>
        <p><b>Alcofil Team</b></p>
            <table border="1" width="100%" cellpadding="5" style="margin-top: 30px">
            <tr>
            <td width="30%">First Name:</td>
            <td width="70%">'.$this->input->post("fname").'</td>
            </tr>
            <tr>
            <td width="30%">Last Name:</td>
            <td width="70%">'.$this->input->post("lname").'</td>
            </tr>
            <tr>
            <td width="30%">Email Address:</td>
            <td width="70%">'.$this->input->post("email").'</td>
            </tr>
            <tr>
            <tr>
            <td width="30%">Phone Number:</td>
            <td width="70%">'.$this->input->post("contact").'</td>
            </tr>
            </table>
        <br>
        <p>Here is your submitted resume:</p>
        ';
        $this->load->library('email', $config);
        $this->email->message($responseMessage);
        $this->email->send();
        return;
    }
}
