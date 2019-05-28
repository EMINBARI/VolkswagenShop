<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    protected $fillable = [
        'id',
        'model_id',
        'user_id',
        'test_drive_date'
    ];
    protected $table = 'test_drives';

}
