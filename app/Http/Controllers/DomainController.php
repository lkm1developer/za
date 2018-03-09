<?php

namespace App\Http\Controllers;

use App\Domain;
use App\order;
use App\Plan;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Api\DomainApi;
use App\Api\ResellerApi;

use Illuminate\Support\Facades\Redirect;
class DomainController extends Controller
{
    public function __construct(){
		 $this->middleware('auth');
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=(Auth::user())->id;
		$plan=Plan::where('user_id',$user_id);
		return view('plan')->with('plan',$plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$sld = null,$tld = null,$err = null)
		{
			
			
			$ret['sld']=$sld;
			$ret['tld']=$tld;
			$ret['error']=null;
			
			return view('domaincreate')->with('ret',$ret);
		}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		
		$user=Auth::user();
		
		$cancel_url=url('/').'/plan/cancel';
		$return_url=url('/').'/plan/success';
		$contacts=array('registrantfirstname'=>$user->firstname,					
						'registrantlastname'=>$user->lastname,
						'registrantaddress1'=>$user->address1,
						'registrantaddress2'=>$user->address2,
						'registrantstateprovince'=>$user->state,
						'registrantcity'=>$user->city,
						'registrantpostalcode'=>$user->zip,
						'registrantcountry'=>$user->country,
						'registrantemailaddress'=>'lkm1developer@gmail.com',//$user->email,
						'registrantphone'=>$user->phone);
						
						
		$domains=array(0=>array(	'type'=>'register',
						'sld'=>Input::get('sld'),
						'tld'=>Input::get('tld'),
						'period'=>1,//Input::get('periods'),
						'custom_nameservers'=>0,//Input::get('periods'),
						'contacts'=>$contacts));
		$arg=array('section'=>'order',
					'command'=>'order_domains',
					'username'=>'lakhvind',//$user->name,
					'ip'=>$request->ip(),
					'currency'=>'USD',//Input::get('currency'),
					'price_type'=>'price',
					'payment_method'=>'2co',//Input::get('payment_method'),
					'country'=>'usa',//$user->country,
					'is_business'=>0,//$user->country,
					'cancel_url'=>$cancel_url,
					'return_url'=>$return_url,
					'domains'=>$domains,
					);					
				 
		
		$Client = new ResellerApi;
				
		$plan_order=$Client->CallApi('GET',$arg);
		//echo '<pre>';
		//echo 'request parameter:';
		//print_r($arg);
		//echo 'request result:';
		//print_r($plan_order);die();
		if($plan_order['status']==true)
		{
			$result=$plan_order['result'][1];
			if($result["error_code"]){ 
			//var_dump($result);
				return view('plancreate')->with('planid',Input::get('planid'),'error',$result["error_code"]	);
			}
			else{
				$plan =new Plan;
				$plan->planid=Input::get('planid')?Input::get('planid'):33333;		
				$plan->user_id=(Auth::user())->id;
				$plan->currency='USD';//Input::get('currency');
				$plan->payment_method='2co';//Input::get('payment_method');
				$plan->periods=1;//Input::get('periods');
				$plan->domain='yes';
				$plan->price_type='price';
				$plan->save();
				$order=New order;
				$order->planid=$plan->id;
				$order->redirect=$result['redirect'];
				$order->redirect_url=$result['redirect_url'];
				$order->orderId=$result['temporary_id'];
				$order->tempid =$result['temporary_id'];
				$order->meta =json_encode($result,true);
				$order->status =true;
				$order->save();
				if($result['redirect']==1){
					return view('domaincreate')->with('ret',$plan_order['result'][1]);
					// return redirect($result['redirect_url']);
				}
			
			}
			
		}
		/* $Domain=new ResellerApi;
			$fields = array();
			$fields['key'] = urlencode("a0f830aafa18de4efad676422e8a57e1");
			$fields['sld'] = urlencode(Input::get('sld'));
			$fields['tld'] = urlencode(Input::get('tld'));		
			$result = $Domain->curl_download("https://api-v3.domains.co.za/api/domain/domain/check", $fields);
			$result=json_decode($result);
			if(!($result->intReturnCode==1))
			{
				return redirect()->action(
					'DomainController@create',
					['sld' => Input::get('sld'),
					'tld' => Input::get('tld'),
					'err' => 'Domain not Available']
				);
			}
			else{
		$domain =new Domain;
		$domain->sld=Input::get('sld');		
		$domain->tld=Input::get('tld');		
		$domain->user_id=(Auth::user())->id;
		$domain->currency=Input::get('currency');
		$domain->payment_method=Input::get('payment_method');
		$domain->periods=Input::get('periods');
		
		$domain->price_type='price';
		
		
		$domain->save();
		$user=Auth::user();
		
		$cancel_url=url('/').'/domain/cancel';
		$return_url=url('/').'/domain/success';
		$ns1='ns1.'.Input::get('sld') .'.'. Input::get('tld');
		$ns2='ns2.'.Input::get('sld') .'.'. Input::get('tld');
		$arg=array(
					'key'=>urlencode("a0f830aafa18de4efad676422e8a57e1"),
					'sld' => urlencode(Input::get('sld')),
					'tld' =>urlencode(Input::get('tld')),
					'domain'=>urlencode(Input::get('domainid')),	
					'registrantCountry'=>urlencode($user->country),
					'registrantName'=>urlencode($user->firstname),
					
					'registrantEmail'=>urlencode($user->email),
					'registrantContactNumber'=>urlencode($user->phone),
					'registrantAddress1'=>urlencode($user->address1),
					'registrantAddress2'=>urlencode($user->address2),
					'registrantProvince'=>urlencode($user->state),
					'registrantCity'=>urlencode($user->city),
					'registrantPostalCode'=>urlencode($user->zip),		
					'currency'=>urlencode(Input::get('currency')),
					'period'=>urlencode(Input::get('periods')),
					'ns1'=>urlencode($ns1),
					'ns2'=>urlencode($ns2)
					
				 );
				 $DomainApi=new DomainApi;
			$result = $DomainApi->curl_download("https://api-v3.domains.co.za/api/domain/domain/create", $arg);
			$result=json_decode($result,true);
			echo '<pre>';var_dump($result);
			if(!($result['intReturnCode']==1))
			{
				return redirect()->action(
					'DomainController@create',
					['sld' => Input::get('sld'),
					'tld' => Input::get('tld'),
					'err' => $result]
				);
			}
		else{
			
			$order=New order;
				$order->planid=$result->strRegistrant;
				$order->redirect='0';
				$order->redirect_url='';
				$order->orderId=$result->strDomainName;
				$order->tempid =$result->strRegistran;
				$order->meta =json_encode($result,true);
				$order->status =true;
				$order->save();
				$order->id;
				return redirect()->action(
					'DomainController@show',
					['id' => $order->id]
				);
			
		}		
		
		
		var_dump($result);//die();
	 
    } */
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $domain)
    {
        //
    }
	
	public function cancel(Request $request)
	{
		var_dump(Input::all());
	}
	
	public function success(Request $request)
	{
		var_dump(Input::all());
	}
	
	public function Makeorder(Request $request)
	{
		
		
		$user=Auth::user();
		
		$cancel_url=url('/').'/domain/cancel';
		$return_url=url('/').'/domain/success';
		$arg=array(
					'section'=>'order',
					'command'=>'create',
					'domain'=>Input::get('domainid'),	
					'country'=>$user->country,
					'firstname'=>$user->firstname,
					'username'=>$user->name,
					'lastname'=>$user->lastname,
					'email'=>$user->email,
					'phone'=>$user->phone,
					'address1'=>$user->address1,
					'address2'=>$user->address2,
					'state'=>$user->state,
					'city'=>$user->city,
					'zip'=>$user->zip,		
					'currency'=>Input::get('currency'),
					'period'=>Input::get('periods'),
					'ip'=>$request->ip(),
					'cancel_url'=>$cancel_url,
					'return_url'=>$return_url,
					'payment_method'=>'2co'//Input::get('payment_method')
				 );
		
		$Client = new ResellerApi;
				
		$domain_order=$Client->CallApi('GET',$arg);
		
		if($domain_order['status']==true)
		{
			$result=$domain_order['result'][1];
			if($result["error_code"]){ 
			var_dump($result);
				return view('domaincreate')->with('domainid',Input::get('domainid'),'error',$result["error_code"]	);
			}
			else{
				$domain =new Plan;
				$domain->domainid=Input::get('domainid');		
				$domain->user_id=(Auth::user())->id;
				$domain->currency=Input::get('currency');
				$domain->payment_method=Input::get('payment_method');
				$domain->periods=Input::get('periods');
				$domain->domain='no';
				$domain->price_type='price';
				$domain->save();
				$order=New order;
				$order->domainid=$domain->id;
				$order->redirect=$result['redirect'];
				$order->redirect_url=$result['redirect_url'];
				$order->orderId=$result['parameters'][0]['value'];
				$order->tempid =$result['parameters'][1]['value'];
				$order->meta =json_encode($result,true);
				$order->status =true;
				$order->save();
				if($result['redirect']==1){
					 return redirect($result['redirect_url']);
				}
			
			}
			
		}
		
	}
	
	
	
	
}
