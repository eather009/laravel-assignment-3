<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;
    protected $table = 'work_histories';

    protected static $rules = [
        'join_date' => 'required,date|after:1900-01-01|before:today',
        'designation' => 'required',
        'user_id' => 'required|exists:users,id',
        'company_id' => 'required|exists:companies,id',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
