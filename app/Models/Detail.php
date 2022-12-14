<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'timeOpen',
        'timeClosed',
        'distributor_id'
    ];

    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }
}
