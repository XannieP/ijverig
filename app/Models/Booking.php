<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'phonenumber', 'email', 'firstname', 'dagdeel', 'online', 'vergaderruimte', 'description', 'lastname', 'date'
    ];
}
