<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colRegistration extends Model
{
    use HasFactory;
    protected $table='colRegistration';
protected $fillable=[
    'user_id',
    "name",
    "father_name",
    "mother_name",
    "DOB",
    "stream",
    "Phone_no",
    "gender",
    "Category",
    "address",
    "state",
    "pincode"];

    public function User(){
        return $this->belongsTo('\App\User');
    }
}
