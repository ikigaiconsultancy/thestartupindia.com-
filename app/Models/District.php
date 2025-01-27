<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class District extends Model
{
    use HasFactory;
    protected $table = 'all_district'; 
    public $primaryKey  = 'id';
    protected $fillable = [ 
        'district_name', 
        'state_id',
    ];
}
