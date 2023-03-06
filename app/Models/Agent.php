<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "agent";
    protected $fillable = [
        "name",
        "address",
        "mobileNumber",
        "email",
        "contactPerson"
    ];
}
