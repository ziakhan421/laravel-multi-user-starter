<?php

namespace App\Models;

use Carbon\Carbon;
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


    public function getCreatedAtAttribute($value): string
    {
        return $this->asDateTime($value)->format('Y-m-d H:i:s');
    }

}
