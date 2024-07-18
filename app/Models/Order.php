<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected$guaded =['id'];
    protected $fillable = [
    'name', 
    'email',
    'phone',
    'status',
    'price',
    'payment_method',
];
public function User(){
    return $this->belongsTo(User::class);
}

public function Art(){
    return $this->belongsTo(Art::class);
}
public function definition(){
    return[
        'name', 
        'email',
        'phone',
        'status',
        'price',
        'payment_method',
        


    ];
}
public function categories(){
    return $this->belongsTo(Categories::class);
}
public function name(){
    return $this->belongsTo(User::class);
}

public function email(){
    return $this->belongsTo(User::class);
}
public function phone(){
    return $this->belongsTo(User::class);
}
public function price(){
    return $this->belongsTo(Art::class);
}
}
