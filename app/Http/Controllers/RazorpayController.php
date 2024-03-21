<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use Redirect;
use App\Models\DSC;
use App\Models\TrackingStatus;
use App\Jobs\SendThankyouEmailJob;

class RazorpayController extends Controller
{
    public function payWithRazorpay()
    {        
        return view('payWithRazorpay');
    }
    public function payment(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($request->razorpay_payment_id);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $payment->capture(array('amount'=>$payment['amount']));
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => $request->user_id,
                   'amount' => $request->amount,
                ];
                
        Payment::insertGetId($payInfo);  
        
        \Session::put('success', 'Payment successful');
        $user_token = '';
        
        //update payment_status on successful payment
        DSC::where('id', '=', $request->user_id)->update(['payment_status'=>1, 'client_status'=>'processing']);
        //update comments(Tracking Status) on successful payment
        TrackingStatus::where('user_id', '=', $request->user_id)->update(['comments'=> 1]);
        $user = DSC::where('id', '=', $request->user_id)
                    // ->where('payment_status', '=', 1)
                    ->first();
        $user_token = $user->csrf_token; 
        return route('dsc-form.sucesssPayment', ['token' => $user_token]);
    }
    public function sucesssPayment() { 
         
        $user_token = '';
        if(!empty($_GET['token'])) {
            $user_token = $_GET['token'];
        }
        $dsc_data = DSC::where('csrf_token', '=', $user_token)->first();
        $view_data = $dsc_data->thanks_view;
        $payment_status = $dsc_data->payment_status;
        $track_id = $dsc_data->track_id;
        if($view_data != 1) { 
            if($payment_status == 1) {
                DSC::where('csrf_token', '=', $user_token)->update(['thanks_view'=>1]);
            } 
            return view('thankyou',compact('track_id'));
        } else {
            return view('trackApplication');
        } 
        
    }
}
