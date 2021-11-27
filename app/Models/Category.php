<?php

namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Category extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'parent_id'
    ];

    
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function sub_childs()
    {
        return $this->childs()->with('sub_childs');
    }

    
}