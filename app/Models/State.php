<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
    use HasFactory;
    protected $table = 'all_state'; 
    public $primaryKey  = 'id';
    protected $fillable = [ 
        'state_name'
    ];
}
