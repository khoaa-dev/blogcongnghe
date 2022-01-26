<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'userId', 'subCategoryId', 'title', 'content', 'reviewStar'
    ];

    protected $table = 'posts';

    public function subCategory() {
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
