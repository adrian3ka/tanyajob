<?php
use Illuminate\Support\Facades\Config;
return [
	 'getQuestion' => env('API_GET_QUESTION', ''),
	 'extractInformation' => env('API_EXTRACT_INFORMATION', ''),
	 'port' => env('API_PORT', ''),
	 'maxRedirs' => env('API_MAXREDIRS', ''),
	 'timeOut' => env('API_TIMEOUT', ''),
	 'request' => env('API_POST', ''),
	 'header' => array(
                        env('API_CONTENT_TYPE', ''),
                        env('API_POSTMAN_TOKEN', ''),
                        env('API_CACHE_CONTROL', '')
                ),
	 'httpVersion' => env('API_HTTP_VERSION', ''),
	 'returnTransfer' => true,
	 ];
