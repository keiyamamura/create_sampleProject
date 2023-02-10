<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'title',
        'description',
        'prefectures_id',
        'status',
        'wage_type',
        'salary_amount',
        'img',
        'age',
        'license',
        'experience',
        'company_name',
        'company_tel',
        'company_email',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
