<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function manageCategory()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('categoryTreeview',compact('categories','allCategories'));
    }

    public function addCategory(Request $request)
    {
        $this->validate($request, [
        		'title' => 'required',
        	]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        Category::create($input);
        return back()->with('success', 'New Category added successfully.');
    }

    public function addNewCategory(Request $request, $idOfParent)
    {
        $newCategory = new Category();
        $newCategory->title=$request->nameOfNewCategory;
        $newCategory->parent_id=$idOfParent;
        $newCategory->save();
        return $newCategory;
    }



    public function destroy(Request $request,$id)
    {
        $existingItem = Category::find($id);

        Category::destroyChildren($id);

        if($existingItem){
            $existingItem->delete();
            return "Item is deleted.";
        }
        return "Item not found";
    }
}
