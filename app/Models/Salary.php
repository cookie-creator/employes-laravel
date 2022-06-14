<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function salary_types()
    {
        return $this->hasMany(SalaryTypes::class);
    }
}