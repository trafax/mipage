<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'parent_id',
        'title',
        'slug',
        'sort',
        'seo'
    ];

    public $casts = [
        'seo' => 'array'
    ];

    public function childs()
    {
        return $this->hasMany(Page::class, 'parent_id', 'id')->orderBy('sort');
    }
}
