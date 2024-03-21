<?php
namespace App\Http\Controllers;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DSC;
use App\Models\TrackingStatus;
use App\Models\State;
use App\Models\District; 
use App\Models\User; 
use DB;
use Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Jobs\SendEmailJob;
use DataTables;
class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd("test");
        if ($request->ajax()) {
         
            $data = DSC::leftjoin('tracking_status', 'dsc_form.id', '=', 'tracking_status.user_id')
                        ->select('dsc_form.*', 'tracking_status.comments','tracking_status.remarks as remarks')
                        ->where('dsc_form.deleted_at','=', NULL);
            if( isset($request->client_status) ) {
                   $data = $data->where('dsc_form.client_status','=', $request->client_status); 
            }
           
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route("admin.edit-user", $row->id).'"><i class="fa fa-edit"></i></a>  
                           <a href="'.route("admin.view-user", $row->id).'"><i class="fa fa-eye"></i></a>
 
                           <a href="javascript: delete_user('.$row->id.')"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
                    ->editColumn('payment_status', function($row) {
                        $icon = '<i class="fa fa-times text-danger" aria-hidden="true"></i>';
                        if($row->payment_status){
                            $icon = '<i class="fa fa-check text-green" aria-hidden="true"></i>';
                                }
                        return $icon;
                    })
                    ->editColumn('client_status', function($row) {
                        return ucwords($row->client_status);
                    })
                    ->editColumn('created_at', function($row) {
                        return date('d-m-Y h:i A', strtotime($row->created_at));
                    })
                    ->order(function ($query) {
                        $query->orderBy('created_at', 'desc');
                    })
                    ->rawColumns(['action','payment_status'])
                    ->make(true);
        }
   
        return view('admin/dashboard');
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
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsc_data = DB::table('dsc_form')->leftjoin('tracking_status', 'dsc_form.id', '=', 'tracking_status.user_id')->select('dsc_form.*', 'tracking_status.comments','tracking_status.remarks')->where('dsc_form.deleted_at','=', NULL)->where('dsc_form.id','=',$id)->first(); 
        //dd($dsc_data);
        $state_name = [];
        $district_name = [];
        if($dsc_data->state != '') {
            $state_name = State::where('id', '=', $dsc_data->state)->first();
        }
        if($dsc_data->district != '') {
            $district_name = District::where('id', '=', $dsc_data->district)->first();
        }  
        $diff_state_name = [];
        $diff_district_name = [];
        if($dsc_data->diff_state != '') {
            $diff_state_name = State::where('id', '=', $dsc_data->diff_state)->first();
        }
        if($dsc_data->district != '') {
            $diff_district_name = District::where('id', '=', $dsc_data->diff_district)->first();
        }  
        return view('admin/view_user', compact('dsc_data', 'state_name', 'district_name', 'diff_district_name','diff_state_name') );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $dsc_data = DB::table('dsc_form')->where('id', $id)->first();
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
        $tracking_data = TrackingStatus::where('user_id', '=', $id)->first();
        //dd($dsc_data);
        return view('admin/edit_user', compact('dsc_data','all_states','selected_district', 'tracking_data','selected_district','selected_diff_district') );
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
        $dsc_update->name_of_person                    = $request->get('name_of_person');
        $dsc_update->aadhaar_number                   = $request->get('aadhaar_number');
        $dsc_update->pan_number                   = $request->get('pan_number');
        $dsc_update->mobile                    = $request->get('mobile');
        $dsc_update->email                 = $request->get('email');
        $dsc_update->company_name                 = $request->get('company_name');
        $dsc_update->gst_radio                 = $request->get('gst_radio');
        $dsc_update->gst_number                 = $request->get('gst_number');
        $dsc_update->address                 = $request->get('address');
        $dsc_update->postal_code                 = $request->get('postal_code');
        $dsc_update->state                 = $request->get('state');
        $dsc_update->district                 = $request->get('district');
        $dsc_update->diffaddress_radio                 = $request->get('diffaddress_radio');
        $dsc_update->diff_address                 = $request->get('diff_address');
        $dsc_update->diff_postal_code                 = $request->get('diff_postal_code');
        $dsc_update->diff_state                 = $request->get('diff_state');
        $dsc_update->diff_district                 = $request->get('diff_district');
        $dsc_update->save();
   
        return Redirect::back()->with('success', 'Data Saved Successfully!');      
         
    }
     public function viewUpdate(Request $request)
    { 
        //dd($request->all());
        $user_id = $request->get('user_id');   
        $DSC_update = DSC::find($user_id);  
        $DSC_update->client_status           = $request->get('client_status');  
        $DSC_update->save();
         if($DSC_update) 
        {
            $tracking_data = TrackingStatus::where('user_id', '=', $user_id)->first();  
            $tracking_data->remarks             = $request->get('remarks'); 
            $tracking_data->comments            = $request->get('tracking_status');
            $tracking_data->save(); 
        }
        return Redirect::back()->with('success', 'Data Saved Successfully!');          
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {   
        $DSC_user = DSC::find($id)->delete();  
        return redirect('dashboard')->with('success', 'User is Deleted Successfully!');
    }
    public function sendEmail($id) {
        $DSC_user = DSC::where('id', '=', $id)->first(); 
        $tracking_data = TrackingStatus::where('user_id', '=', $id)->first(); 
        //dd($tracking_data);
        $track_id  = '';
        $trackURL = '';
 
        $track_id = $DSC_user->track_id;
        $trackURL = url('track-application?tracking_id='.$track_id);
        $data = array (
               'name_of_person'     => $DSC_user->name_of_person,
               'name_of_firm'       => $DSC_user->name_of_firm,
               'email'              => $DSC_user->email, 
               'track_id'           => $track_id,
               'trackURL'           => $trackURL,
               'login_url'          => $tracking_data->login_url, 
               'DSC_seller_id'      => $tracking_data->DSC_seller_id,
               'DSC_username'       => $tracking_data->DSC_username,
               'DSC_password'       => $tracking_data->DSC_password,
            );
        Mail::send('emails.DSC_credential_mail', $data, function ($message) use ($data) {
            $message->from('noreply@digisignature.org', 'DSC Registration Consultant');
            $message->to($data['email']);
            $message->subject('Successfully Completed Your DSC Registration');
        });
        return Redirect::back()->with('success', 'Email Sent Successfully!');      
    }
     function validateFunction(Request $request)
    { 
        if(!empty($request->get('type_of_org') != '') ) { 
            $validatedData = $request->validate([
                            'name_of_person'            => 'required',
                            'aadhaar_number'            => 'required | digits_between:12,12',
                            'pan_number'                => 'required',
                            'name_of_firm'              => 'required',
                            'date_of_incorporation'     => 'required',
                            'address'                   => 'required',
                            'state'                     => 'required',
                            'district'                  => 'required',
                            'city'                      => 'required',
                            'pincode'                   => 'required | digits_between:6,6',
                            'email'                     => 'required | email',
                            'mobile'                    => 'required | digits_between:10,10',
                            'ac_holder_name'            => 'required',
                            'account_number'            => 'required',
                            'ifsc'                      => 'required',
                            'date_of_birth'             => 'required',
                            'income_tax'                => 'required', 
                            ],
                            [ 
                                'mobile.digits_between'     => 'Mobile must have 10 digits.',
                                'pincode.digits_between'    => 'Pincode must have 6 digits.',
                                'aadhaar_number.digits_between'   => 'Aadhaar number must have 12 digits.',
                                
                            ]);    
            if($request->gst_radio == 'yes') 
            {
                $validatedData = $request->validate([
                            'gst_number'            => 'required',
                            ]);
            }
        }   else {
            $validatedData = $request->validate([
                                    'type_of_org' => 'required']);
        }
    }
}
