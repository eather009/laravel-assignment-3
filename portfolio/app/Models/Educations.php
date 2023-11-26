<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected static array $rules = [
        'education_degree' => 'required',
        'year_of_pass' => 'required|year',
        'user_id' => 'required|exists:users,id',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
