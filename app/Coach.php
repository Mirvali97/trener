<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'table_coach';
    protected $fillable = [
        'fullname',
        'job',
        'type_sport',
        'year',
        'number_cert',
        'validate',
        'district',
        'region',
        'result'
        ];
}
