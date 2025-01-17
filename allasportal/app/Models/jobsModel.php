<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'company',
        'position',
        'salary',
        'description',
        'publisher',
    ];
}
