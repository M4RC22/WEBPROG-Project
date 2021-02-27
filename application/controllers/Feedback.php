<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    public function index()
    {
        $this->load->view('contact');
    }
    public function send()
    {
        $subject = 'Alcofil';
        $message = '
        <h3 align="center">Application Details</h3>
            <table border="1" width="100%" cellpadding="5">
            <tr>
            <td width="30%">Name</td>
            <td width="70%">'.$this->input->post("fname").'</td>
            </tr>
            <tr>
            <td width="30%">Name</td>
            <td width="70%">'.$this->input->post("lname").'</td>
            </tr>
            <tr>
            <td width="30%">Email Address</td>
            <td width="70%">'.$this->input->post("email").'</td>
            </tr>
            <tr>
            <td width="30%">Message</td>
            <td width="70%">'.$this->input->post("text-area").'</td>
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
        $this->email->from('System-feedback', 'Alcofil');
        $this->email->to('marckennethricahuerta22@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);

        if($this->email->send()){
                $response = $this->sendResponse();
                $this->session->set_flashdata('message', 'Message Sent');
                redirect('contact', 'refresh'); 
        }else{
                $this->session->set_flashdata('message', 'Error Occured');
                show_error($this->email->print_debugger());
                redirect('contact');
        }
    }
    function sendResponse(){
        $this->email->clear();
        $this->load->library('email', $config);
        $this->email->to($this->input->post("email"));
        $this->email->from('System-Feedback', 'Alcofil');
        $this->email->subject('Message Confirmation');
        $data=array();
        $mesg = $this->load->view('templates/email','$data',true);;
        $this->email->message($mesg);
        $mail = $this->email->send();
        return;
    }
}
