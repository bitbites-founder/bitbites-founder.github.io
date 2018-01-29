<?php
$api_key = 'c5310a6059bb37fde83c117a9f18d96e-us17';
$datacenter = 'us17';
$list_id = '7e43681ee3';
$str_json = file_get_contents('php://input');
$json_arr = json_decode($str_json, true);
$email = $json_arr['email']
$status = 'pending';
if(!empty($_POST['status'])){
    $status = $_POST['status'];
}
$url = 'https://'.$datacenter.'.api.mailchimp.com/3.0/lists/'.$list_id.'/members/';
$username = 'apikey';
$password = $api_key;
$data = array("email_address" => $email,"status" => $status);
$data_string = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$api_key");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result=curl_exec ($ch);
curl_close ($ch);
echo $result;
?>