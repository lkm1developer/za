<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Api\ResellerApi;
class AjaxController extends Controller
{
	
    public function index()
    {		
		
    }
	public function SearchDomain(Request $request)
	{	
		/* $Domain=new DomainApi;
		$fields = array();
		$fields['key'] = urlencode("a0f830aafa18de4efad676422e8a57e1");
		$fields['sld'] = urlencode(Input::get('domain'));
		$fields['tld'] = urlencode(Input::get('tld'));		
		$result = $Domain->curl_download("https://api-v3.domains.co.za/api/domain/domain/check", $fields);
		return $result; */
		$Client = new ResellerApi;
		$arg=array(
					'section'=>'products',
					'command'=>'get_domains',
					'name'=>Input::get('domain'),
					'tlds'=>array(Input::get('tld'))
			);
							
		$result=$Client->CallApi('GET',$arg);

		if($result['status']==true){
			if($result['result'][1]['error_code']==0){
			$str='<div class="main_dom">';
			
			$str.='<form action="'. url('/').'/domain"method="post">';
			$str.='<input name="_token" value="'.csrf_token().'" type="hidden">';
			$str.='<input type="hidden"name="sld" value="'.Input::get('domain').'">';	
			foreach ($result['result'][1]['domains'] as $dom=>$det){
				if(array_key_exists("period_12",$det['prices'])){
				$str.='<div class="dom">';
				$str.='<input type="radio" name="tld" value="'.$dom.'">';
				// $str.=$dom.' '.$det['currency_symbol'].
				
				$str.=Input::get('domain') .'.'.$dom.' $'.$det['prices']['period_12']['USD']['price'];
				
				$str.='</div>';
				}
			}
			$str.='<input type="submit"value="Register Domain"></form></div>';
		}}
		$ret['status']=true;
		$ret['html']=$str;
		
		return $ret;
		
	}
}
