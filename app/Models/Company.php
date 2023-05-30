<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'description',
        'address',
        'city',
        'zipcode',
        'email',
        'password',
        'logo',
    ];
    
    //Relationship with Job
    public function job() {
        return $this->hasMany(Job::class, 'company_id');
    }

}
