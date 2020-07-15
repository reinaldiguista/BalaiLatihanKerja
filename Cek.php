<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Cek {


	public function disable_cache() {
        $this->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        $this->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        $this->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $this->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
        $this->set_header('Pragma: no-cache');
	}


	public function way($noktp)
	{

	$fields = array(
		"nik" => $noktp,
		"ip_address"=>"192.168.31.1",
		"password"=>"123456.",
		"user_id"=>"YOGA"
		);


	$fields_string = http_build_query($fields);
	$data_string = json_encode( $fields ); 
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => "HTTP://192.168.31.5:8000/dukcapil/get_json/diskominfo/nik",
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $data_string,

	CURLOPT_HTTPHEADER => array(
		'Accept: application/json',
		'Content-Type: application/json',

		),
	));



	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
//		$res = "cURL Error #:" . $err;
		return $err;
//		return $response;
	} else {
//		return json_decode($response, true);
		return $response;
	}

	}


}
