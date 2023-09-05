<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function building()
    // {
    //     return $this->hasOne(Building::class, 'project_id')->with('building_inventory', 'building_file', 'building_detail');
    // }
}
