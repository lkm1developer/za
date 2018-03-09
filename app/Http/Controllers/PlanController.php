<?php

namespace App\Http\Controllers;

use App\Plan;
use App\order;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Api\ResellerApi;
use Illuminate\Support\Facades\Redirect;
class PlanController extends Controller
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
    public function create(Request $request,$id = null)
		{
			
			
			return view('plancreate')->with('planid',$id,'error',null);
		}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$plan =new Plan;
		$plan->planid=Input::get('planid');		
		$plan->user_id=(Auth::user())->id;
		$plan->currency=Input::get('currency');
		$plan->payment_method=Input::get('payment_method');
		$plan->periods=Input::get('periods');
		$plan->domain='no';
		$plan->price_type='price';
		$plan->save();
		$user=Auth::user();
		
		$cancel_url=url('/').'/plan/cancel';
		$return_url=url('/').'/plan/success';
		$arg=array(
					'section'=>'order',
					'command'=>'create',
					'plan'=>Input::get('planid'),	
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
					'payment_method'=>Input::get('payment_method')
				 );
		
		$Client = new ResellerApi;
				
		$plan_order=$Client->CallApi('GET',$arg);
		var_dump($plan_order);//die();
	 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
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
		
		$cancel_url=url('/').'/plan/cancel';
		$return_url=url('/').'/plan/success';
		$arg=array(
					'section'=>'order',
					'command'=>'create',
					'plan'=>Input::get('planid'),	
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
				
		$plan_order=$Client->CallApi('GET',$arg);
		
		if($plan_order['status']==true)
		{
			$result=$plan_order['result'][1];
			if($result["error_code"]){ 
			var_dump($result);
				return view('plancreate')->with('planid',Input::get('planid'),'error',$result["error_code"]	);
			}
			else{
				$plan =new Plan;
				$plan->planid=Input::get('planid');		
				$plan->user_id=(Auth::user())->id;
				$plan->currency=Input::get('currency');
				$plan->payment_method=Input::get('payment_method');
				$plan->periods=Input::get('periods');
				$plan->domain='no';
				$plan->price_type='price';
				$plan->save();
				$order=New order;
				$order->planid=$plan->id;
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
