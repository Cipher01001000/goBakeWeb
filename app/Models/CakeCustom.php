<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CakeCustom extends Model
{
    use HasFactory;

    protected $fillable = [
        'cake_type',
        'cake_type_price',
        'cake_shape',
        'cake_shape_price',
        'cake_size',
        'cake_size_price',
        'cake_layer',
        'cake_layer_price',
        'cake_decoration',
        'cake_decoration_price',
        'image_decoration',
        'cake_topper',
        'cake_topper_price',
        'image_topper',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
