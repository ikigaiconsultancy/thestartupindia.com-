<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class TrackingStatus extends Model
{
    use HasFactory;
    protected $table = 'tracking_status'; 
    public $primaryKey  = 'id';
    protected $fillable = [ 
        'user_id',
        'track_id',
        'comments', 
        'remarks',
        'created_at',
        'updated_at'
    ];
}
