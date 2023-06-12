<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'admin.products';
    use SoftDeletes;

    protected $fillable = [
        'part_number', 'sku', 'name', 'title', 'subtitle', 'slug_large', 'slug_short', 'model', 'category_id', 'subcategory_id', 'mark_id', 'unit_id', 
        'detail', 'link', 'status', 'user_id', 'correlative'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withTrashed();
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory')->withTrashed();
    }

    public function mark()
    {
        return $this->belongsTo('App\Models\Mark')->withTrashed();
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit')->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function specifications()
    {
        return $this->hasMany('App\Models\Specification');
    }

    public function prices()
    {
        return $this->hasMany('App\Models\Price');
    }

    public function arts()
    {
        return $this->hasMany('App\Models\Art');
    }

    //scope
    public function scopePartNumber($query, $part)
    {
        if ($part) {
            return $query->where('part_number', 'LIKE', '%$part%');
        }

    }

    public function scopeBusqueda($query, $name)
    {
        if ($name) {
            return $query->where('title', 'LIKE', '%$name%');
        }

    }
}
