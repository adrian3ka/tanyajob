<?php
use Illuminate\Support\Facades\Config;
return [
	 'getQuestion' => 'http://localhost:8000/api/v1/ask/question/',
	 'extractInformation' => 'http://localhost:8000/api/v1/extract/information/',
	 'port' => '8000',
	 'maxRedirs' => 10,
	 'timeOut' => 30,
	 'request' => "POST",
	 'header' => array(
			"Content-Type: application/json",
			"Postman-Token: 99cfa4d0-2d50-4c0d-a711-8d685c97fedb",
			"cache-control: no-cache"
		  ),
	 'httpVersion' => CURL_HTTP_VERSION_1_1,
	 'returnTransfer' => true,
	 
	 ];
