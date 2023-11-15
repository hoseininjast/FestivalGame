<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SlidersController extends Controller
{
    Use Uploader;

    public function index(){
        $Sliders = Sliders::orderBy('Priority' )->get();
        return view('Dashboard.SiteSettings.Sliders.index')->with(['Sliders' => $Sliders]);
    }
    public function Add(){

    }
    public function Create(Request $request){
        $request->validate([
            'Name' => ['required' , 'string'],
            'Priority' => ['required' , 'int'],
            'MainImage' => ['required' , 'file'],
            'LinkTo' => ['required' , 'string' ,Rule::in('Product' , 'Category')],
            'Link' => ['required' , 'int' ],
        ]);

        $ImageURL = $this->UploadImage($request->MainImage , 'SiteSettings/Sliders');

        if ($request->LinkTo == 'Product'){
            $Product = Product::find($request->Link);
            $Link = route('Front.Product' , $Product->Name);
        }elseif ($request->LinkTo == 'Category'){
            $Category = ProductCategory::find($request->Link);
            if ($Category->ParentID){
                $Link = route('Front.SubCategory' , [$Category->Name , $Category->Parent->Name ]);
            }else{
                $Link = route('Front.Category' , $Category->Name);
            }
        }
        $Link = rawurlencode($Link);

        Sliders::create([
            'Name' => $request->Name,
            'Priority' => $request->Priority,
            'ImageUrl' => $ImageURL,
            'LinkTo' => $request->LinkTo,
            'Link' => $Link,
        ]);

        \Alert::success('عملیات موفق آمیز' , 'اسلایدر با موفقیت ساخته شد.');
        return redirect()->route('Dashboard.SiteSettings.Sliders.index');
    }
    public function Edit(){

    }
    public function Update(){

    }
    public function Delete(){

    }
}
