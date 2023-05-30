<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'postDate',
        'startDate',
    ];

    //Relationship with Company
    public function company() {
        return $this->belongsTo(Company::class, 'id');
    }
}