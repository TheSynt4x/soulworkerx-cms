<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $connection = 'gm';

    protected $table = 'TB_NEWS';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID', 'TITLE', 'TEXT', 'AUTHOR', 'DATE'
    ];
}
