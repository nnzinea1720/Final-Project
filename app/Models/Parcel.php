<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
    protected $table='parcels';
    protected $guarded=[];
}
// {
//    public function list()
//    {
//             return $this->belongsto (ParcelController::class,'parcel list', 'id');
//     }
// }
