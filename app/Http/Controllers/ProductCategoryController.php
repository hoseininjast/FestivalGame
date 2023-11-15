<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    use Uploader;
    public function index(){
        $Categorys = ProductCategory::all();
        return view('Dashboard.ProductCategory.index')->with(['Categorys' => $Categorys]);
    }

    public function Add(){
        return view('Dashboard.ProductCategory.Add');
    }
    public function Create(Request $request){
        $request->validate([
            'Name' => ['required' , 'string'],
            'Icon' => ['required' , 'file'],
            'ParentID' => ['nullable' , 'exists:product_categories,id']
        ]);
        $Icon = $this->UploadImage($request->Icon , 'ProductCategories');

        ProductCategory::create([
            'Name' => $request->Name,
            'Icon' => $Icon,
            'ParentID' => $request->ParentID
        ]);
        \Alert::success('عمیلات با موفقیت انجام شد' , 'دسته بندی ساخته شد');
        return redirect()->route('Dashboard.ProductCategory.index');
    }
    public function Edit($ID){
        $Category = ProductCategory::find($ID);
        return view('Dashboard.ProductCategory.Edit')->with(['Category' => $Category]);

    }
    public function Update($ID , Request $request){
        $request->validate([
            'Name' => ['required' , 'string'],
            'Icon' => ['nullable' , 'file'],
            'ParentID' => ['nullable' , 'exists:product_categories,id']
        ]);
        $Category = ProductCategory::find($ID);
        if ($request->has('Icon')){
            $Icon = $this->UploadImage($request->Icon , 'ProductCategories');
        }else{
            $Icon = $Category->Icon;
        }
        $Category->update([
            'Name' => $request->Name,
            'Icon' => $Icon,
            'ParentID' => $request->ParentID
        ]);
        \Alert::success('عمیلات با موفقیت انجام شد' , 'دسته بندی با موفقیت بروزرسانی شد');
        return redirect()->route('Dashboard.ProductCategory.index');
    }
    public function Delete(){}
}
