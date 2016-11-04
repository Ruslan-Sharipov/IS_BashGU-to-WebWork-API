<?php
class My_test extends CI_Controller {

 public function index()
 {
  // echo 'Hello World!';
  $this->load->view('my_test_view');
 }
 public function hidden_handler()
 {
 echo 'Скрытый текст: '.htmlspecialchars($_POST["hidden_text"]).'.';
 }
 public function remote_handler()
 { 
 $url = base_url().'index.php/my_test/hidden_handler';
 $myvars = '&hidden_text=e%3D2.72';

 $ch = curl_init($url);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$myvars);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
 curl_setopt($ch,CURLOPT_HEADER,0);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 $response = curl_exec($ch);

 echo $response;
 }

}

