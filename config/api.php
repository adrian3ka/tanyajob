<?php
use Illuminate\Support\Facades\Config;
return [
	 'getQuestion' => env('API_TANYA_JOB', '') . "/api/v1/ask/question/",
	 'extractInformation' => env('API_TANYA_JOB', '') . "/api/v2/extract/information/",
	 'extractFreshGraduate' => env('API_TANYA_JOB', '') . "/api/v1/fresh_graduate/extract/",
	 'getJobRecommendation' => env('API_TANYA_JOB', '') . "/api/v1/job/reccomendation/",
	 'getJobList' => env('API_TANYA_JOB', '') . "/api/v1/get/job",
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
