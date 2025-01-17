<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationsModel extends Model
{
    protected $fillable = [
        'job_name',
        'job_pos',
        'name',
        'sex',
        'email',
        'birthplace',
        'birthdate',
        'created_at',
        'updated_at',
    ];

    protected $table = 'applications';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
