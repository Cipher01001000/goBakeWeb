<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'first_name', 'last_name', 'municipality', 'barangay', 'purok', 'zip_code', 'landmark'];
}
