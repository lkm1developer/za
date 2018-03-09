<?php 
namespace App\Api;
use GuzzleHttp\Client;
class DomainApi  {
	public function __construct()
    {
      
		
    }


   
	public function curl_download($Url, $fields = null) {
		$fields_string = null;
		// is cURL installed yet?
		if (!function_exists('curl_init')) {
			die('Sorry cURL is not installed!');
		}
	// create a new cURL resource handle
		$ch = curl_init();
		if (!empty($fields)) {
			//url-ify the data for the POST
	foreach($fields as $key=>$value) {
	if (is_array($value)) {
					foreach($value as $value2) {
						if (!is_null($value2)) {
	$fields_string .= $key.'='.$value2.'&';
	}
					}
				} else {
					if (!is_null($value)) {
	$fields_string .= $key.'='.$value.'&';
	}
				}
			}
			rtrim($fields_string,'&');
	 //set the number of POST vars, POST data
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
		}
		// Set URL to download
		curl_setopt($ch, CURLOPT_URL, $Url);
		// stop the verification of certificate
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	// Set a referer
		curl_setopt($ch, CURLOPT_REFERER, "http://lara.ihosts.co.za/public/");
		// User agent
		curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/2.0");
		// Include header in result? (0 = yes, 1 = no)
		curl_setopt($ch, CURLOPT_HEADER, 0);
		// Should cURL return or print out the data? (true = return, false = print)
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// Timeout in seconds
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		// Download the given URL, and return output
		$output = curl_exec($ch);
		// Close the cURL resource, and free system resources
		curl_close($ch);
		return $output;
	}
}

?>