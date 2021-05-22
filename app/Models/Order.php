<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";

    public function book(){
        return $this ->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'dates',
        'hour',
        'numberOfPeople'
    ];
}
