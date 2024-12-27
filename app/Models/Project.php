<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'tagline',
        'category_id',
        'time_per_hour',
        'location',
        'logo',
    ];

    // Define relationship with Category
   // Project Model
public function category()
{
    return $this->belongsTo(Category::class);
}

}
