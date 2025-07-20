<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = "doctors";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'gender',
        'salary',
    ];

    public function course() {
        return $this->hasMany(Course::class);
    }
}
