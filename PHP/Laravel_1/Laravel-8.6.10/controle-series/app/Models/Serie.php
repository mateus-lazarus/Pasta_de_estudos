<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'series';
    protected $fillable = ['nome'];     // Permite que seja criado da * FORMA 2 * no arquivo app\Http\Controllers\SeriesController.php
    public $timestamps = true;          // Created_at e Update_at
}