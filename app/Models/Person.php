<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';

    protected $fillable=[
        'type',
        'subtype',
        'first_name',
        'last_name',
        'detailed_title',
        'national_id',
        'status',
        'website',
        'email',
        'economic_code',
        'reg_no',
        'note',
        'registrar',
        'updater',
        '',
    ];
}
