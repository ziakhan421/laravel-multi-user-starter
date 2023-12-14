<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_id' => 'exists:users,id',
        'message' => 'required|max:255',
        'subject' => 'required'
    ];

    /**
     * Fillable
     *
     * @var array
     */
    protected $fillable = [
        'subject',
        'company_id',
        'message',
        'created_by'
    ];

}
