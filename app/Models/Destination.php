<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name', 'district_id', 'category_id', 'cost', 'popularity', 'visitor', 'facilities', 'cleanliness', 'accessibility', 'business_hours', 'address'
    ];

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
