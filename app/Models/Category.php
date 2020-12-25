<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'parent_id',
        'title',
        'slug',
        'sort'
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function depth($depth = 0)
    {

        $parent = $this->where('parent_id', $this->id)->get();

        if ($parent && $parent->id) {
            $this->depth($parent->id, $depth++);
        }

        return $depth++;
    }
}
