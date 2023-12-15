<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;


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
