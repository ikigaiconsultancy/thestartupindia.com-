<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DSC extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'dsc_form'; 
    public $primaryKey  = 'id';
    protected $fillable = [
                            'name_of_person'            , 
                            'aadhaar_number'    ,
                            'pan_number'        ,
                            'mobile'          	, 
                            'email'          	, 
                            'company_name'       , 
                            'gst_radio'          , 
                            'gst_number'          , 
                            'address'          , 
                            'postal_code'          , 
                            'state'          , 
                            'district'          , 
                            'diffaddress_radio'          , 
                            'diff_address'          , 
                            'diff_postal_code'          , 
                            'diff_state'          , 
                            'diff_disrict'          , 
                            'csrf_token'          , 
                            'payment_status'	,
                            'client_status'		,
                            'thanks_view'		,
                            'track_id'			,
                            ];
    protected $dates = ['deleted_at'];
}
