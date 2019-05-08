<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fuzzy extends Model
{
    protected $table = 'fuzzy_variables';

    protected $fillable = [
        'criteria', 'name_set', 'min_set', 'max_set'
    ];
}
