<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name', 'categoryId'
    ];

    protected $table = 'sub_categories';

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
