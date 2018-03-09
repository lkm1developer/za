<?php 
namespace App\Api;
use GuzzleHttp\Client;
class ResellerApi  {
	public function __construct()
    {
        $this->client=new Client();
		$this->host='https://api.duoservers.com';
		$this->query=array(
							'auth_username'=>'artichosts',
							'auth_password'=>'rofiat271',
							'TEST_MODE'=>1,
							'return_type'=>'serialization'												
							);
		
    }


    public function CallApi($type,$arg)
    {
        
		 
		 
		 $query=array_merge($this->query,$arg);
		
		 $response = $this->client->request($type, $this->host, [
				'query' => $query
			]);
		if($response->getStatusCode()!==200){
			$data=array(
			'status'=>false,
			'result'=> $response->getReasonPhrase()
			);
			return $data;
		}
		$response=unserialize($response->getBody());
		if($response[1]["error_code"]==1){
		
			$data=array(
			'status'=>false,
			'result'=>  $response
			);
		}
		else{
			$data=array(
			'status'=>true,
			'result'=>  $response
			);
		}
		return $data;
		
         
        


	}
}

?>