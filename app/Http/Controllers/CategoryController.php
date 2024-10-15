<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //
    public function create_category(CategoryRequest $request){
        $fields = $request->validated();
        $category = new Category();
        $destinationPath = "images/main-category";
        $iconName = strtolower(str_replace(" ", "_", $fields['category_name']));
        $newDate = date('dmy');
        $finalIconName = "{$iconName}_{$newDate}";
        $filepath = $request->file('category_icon')->storeAs($destinationPath, "{$finalIconName}.{$request->file('category_icon')->extension()}", "public");

        if($request->file('category_icon')->isValid()){
            $category->category_name = $fields['category_name'];
            $category->category_extension = $fields['category_extension'];
            $category->category_icon = "{$finalIconName}.{$request->file('category_icon')->extension()}";
            $category->active = 1;

            $category->save();

            return redirect(route("add_main_category"))->with("message", "{$fields['category_name']} created.");
        }
        return back()->with("error_message", "Unsuccessful")->withInput();
    }
}
