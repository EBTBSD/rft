<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SexModel extends Model
{
    protected $table = 'sex';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'sex',
    ];
}
