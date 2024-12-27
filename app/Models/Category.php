<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];
    // Project Model
// Category Model
public function projects()
{
    return $this->hasMany(Project::class);
}


}
