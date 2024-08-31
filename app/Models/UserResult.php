<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResult extends Model
{

    use HasFactory;

    protected $guarded = [];

    const status = [
        'single' => 'اعزب',
        'married' => 'متزوج',
        'divorced' => 'مطلق',
        'widower' => 'ارمل'
    ];
    const gender = [
        'male' => 'ذكر',
        'female' => 'انثى',
    ];


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
