<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_name',
        'company_phone',
        'company_address',
        'company_url',
    ];


    protected static array $rules = [
        'company_name' => 'required',
        'company_phone' => 'required',
        'company' => 'unique:company_name,company_phone',
    ];
}
