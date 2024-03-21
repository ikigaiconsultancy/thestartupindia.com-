<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\DSC;
use App\Models\State;
use App\Models\District;
use App\Models\TrackingStatus;
use App\Jobs\SendEmailJob;
use App\Jobs\SendThankyouEmailJob;

use DB;
use URL;
use Session; 
use Redirect; 
class DscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_states = State::orderBy('state_name', 'ASC')->get();   
        $all_district = District::all();   
        return view('index', compact('all_states','all_district'));
    }
    public function district_ajax(Request $request)
    {
        $all_districts = District::select('*')
        ->where('state_id','=', $request->get('state_id'))
        ->get();
        echo "<option value=''>Select District</option>";                       
        foreach ($all_districts as $all_district) {
            $district_name = strtoupper($all_district->district_name); 
            echo "<option value=$all_district->id>$district_name</option>";
        }                        
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   


    public function store(Request $request)
    {   
        $this->validate($request, [
        'g-recaptcha-response' => 'required|captcha',
        ]);
        $random_token = str::random(32); 
        $status_rand = str::random(5);
        $st_status = "TOKEN-".$status_rand;
        $track_comment = "Currently, Your payment is pending. Please make payment to complete your registration process."; 
        $dsc = new DSC([ 
            'name_of_person'            => $request->get('name_of_person'),
            'aadhaar_number'            => $request->get('aadhaar_number'),
            'pan_number'                => $request->get('pan_number'),
            'mobile'                    => $request->get('mobile'),
            'email'                     => $request->get('email'),
            'name_of_firm'              => $request->get('name_of_firm'),
            'gst_radio'                 => $request->get('gst_radio'),
            'gst_number'                => $request->get('gst_number'),
            'address'                   => $request->get('address'),
            'postal_code'               => $request->get('postal_code'),
            'state'                     => $request->get('state'),
            'district'                  => $request->get('district'),
            'diffaddress_radio'         => $request->get('diffaddress_radio'),
            'diff_address'              => $request->get('diff_address'),
            'diff_postal_code'          => $request->get('diff_postal_code'),
            'diff_state'                => $request->get('diff_state'),
            'diff_district'             => $request->get('diff_district'),
            'discount_price'            => $request->get('discount_price'),
            'csrf_token'                => $random_token,
            'track_id'                  => $st_status,
            'client_status'             => 'pending',
        ]);
        $dsc->save();
        if( $dsc->save() ) {
            $trac_st = new TrackingStatus([
                'user_id'         => $dsc->id,
                'track_id'        => $dsc->track_id, 
                'comments'        => $track_comment,  
            ]);
            $trac_st->save();
        }
            $user = DB::table('dsc_form')->where('csrf_token', $random_token)->first(); 
            $emailURL  = '';
            $track_id  = '';
            $trackURL = '';
            $emailURL = url('dsc-form/confirmation/'.$user->csrf_token);
            $track_id = $user->track_id;
            $trackURL = url('track-application');
            $type_of_reg = $user->type_of_reg;
            $email_content = $user->email_content;
            $email_img = $user->email_img;
           
            $data = array (
                'name_of_person'    => $request->get('name_of_person'), 
                'email'             => $request->get('email'), 
                'track_id'          => $track_id,
                'confirmationURL'   => $emailURL,
                'trackURL'          => $trackURL,
                'type_of_reg'       => $type_of_reg,
                'email_content'     => $email_content,
                'email_img'         => $email_img,
            );
            if(!empty($request->get('email'))) {
                SendEmailJob::dispatch($data); 
            }
        return redirect('dsc-form/confirmation/'.$dsc->csrf_token)->with('success', 'Your data is saved successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        $dsc_data = DSC::select('*')
        ->where('csrf_token', '=', $token)
        ->first();
        if($dsc_data != '') {
            $status_data = TrackingStatus::where( 'user_id', '=' ,$dsc_data->id )->first(); 
            if($dsc_data->payment_status == 0) {
                $fee_to_pay = '4340';
                if($dsc_data->discount_price){
                   $fee_to_pay = 4340 - $dsc_data->discount_price; 
                }
                return view('confirmation', compact('dsc_data','status_data','fee_to_pay'));
            } else {
                return redirect('track-application');
            }               
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($token)
    {
        $dsc_data = DB::table('dsc_form')->where('csrf_token', $token)->first();
        
        $all_states = State::orderBy('state_name', 'ASC')->get();
        $selected_district = '';
        if($dsc_data->district != '') {
            $selected_district = District::select('*') 
            ->where('state_id', '=', $dsc_data->state)
            ->get();  
        } else {
            $selected_district = District::select('*')->get(); 
        } 
        $selected_diff_district = '';
        if($dsc_data->diff_district != '') {
            $selected_diff_district = District::select('*') 
            ->where('state_id', '=', $dsc_data->diff_state)
            ->get();  
        } else {
            $selected_diff_district = District::select('*')->get(); 
        } 
        return view('edit_dsc_form', compact('dsc_data','all_states','selected_district','selected_diff_district') );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = $request->get('user_id'); 
        $dsc_update = DSC::find($user_id);    
        $dsc_update->name_of_person            = $request->get('name_of_person');
        $dsc_update->aadhaar_number            = $request->get('aadhaar_number');
        $dsc_update->pan_number                = $request->get('pan_number');
        $dsc_update->mobile                    = $request->get('mobile');
        $dsc_update->email                     = $request->get('email');
        $dsc_update->name_of_firm              = $request->get('name_of_firm');
        $dsc_update->gst_radio                 = $request->get('gst_radio');
        $dsc_update->gst_number                = $request->get('gst_number');
        $dsc_update->address                   = $request->get('address');
        $dsc_update->postal_code               = $request->get('postal_code');
        $dsc_update->state                     = $request->get('state');
        $dsc_update->district                  = $request->get('district');
        $dsc_update->diffaddress_radio         = $request->get('diffaddress_radio');
        $dsc_update->diff_address              = $request->get('diff_address');
        $dsc_update->diff_postal_code          = $request->get('diff_postal_code');
        $dsc_update->diff_state                = $request->get('diff_state');
        $dsc_update->diff_district             = $request->get('diff_district');
        $dsc_update->save();
        $confirmationURL  = '';
        $track_id  = '';
        $trackURL = ''; 
        $confirmationURL = url('dsc-form/confirmation/'.$dsc_update->csrf_token);
        $track_id = $dsc_update->track_id;
        $trackURL = url('track-application');
        $type_of_reg = $dsc_update->type_of_reg;
        $email_content = $dsc_update->email_content;
        $email_img = $dsc_update->email_img;
           
        $data = array (
            'name_of_person' => $request->get('name_of_person'), 
            'email'          => $request->get('email'), 
            'track_id'       => $track_id,
            'trackURL'       => $trackURL,
            'confirmationURL'=> $confirmationURL,
            'type_of_reg'    => $type_of_reg,
            'email_content'  => $email_content,
            'email_img'      => $email_img,
        );
       
        if(!empty($request->get('email'))) {
            SendEmailJob::dispatch($data); 
        }
        return redirect('dsc-form/confirmation/'.$dsc_update->csrf_token)->with('success', 'Data Saved Successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function trackApplication() 
    { 
        $comment_msg = '';
        if( isset($_GET['tracking_id']) ) {
            $status_data = TrackingStatus::where( 'track_id', '=' ,$_GET['tracking_id'] )->first();
            if( $status_data && $status_data->comments == 1) {
                $comment_msg = 'Your Digital Signature Certificate process is underway. Our associate will call you soon. Kindly check status after 12 Hours.';
            }
            $dsc_data = DSC::where( 'track_id', '=' ,$_GET['tracking_id'] )->first();
            return view('trackApplication',compact('status_data','dsc_data','comment_msg')); 
        }
        return view('trackApplication');
    }
    public function refundPolicy() 
    {  
        return view('refund_policy');
    }
    public function privacyPolicy() 
    {  
        return view('privacy_policy');
    }
    public function termsConditions() 
    {  
        return view('terms_conditions');
    }
}
?>
