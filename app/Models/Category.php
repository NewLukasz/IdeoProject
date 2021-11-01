<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['title','parent_id'];


    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Models\Category','parent_id','id') ;
    }

    public static function destroyChildren($idOfParent){
        $children = Category::where('parent_id', '=', $idOfParent)->get();
        foreach($children as $child){
            $existingChild = Category::find($child->id);
            if($existingChild){
                $existingChild->delete();
            }
            Category::destroyChildren($child->id);
        }
    }
}
