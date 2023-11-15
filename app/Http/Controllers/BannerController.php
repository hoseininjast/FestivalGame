<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\SiteSettings\Banner;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    use Uploader;

    public function index(){
        $Banners = Banner::all();
        return view('Dashboard.SiteSettings.Banner.index')->with(['Banners' => $Banners]);
    }
    public function Add(){

    }
    public function Create(Request $request){
        $request->validate([
            'Name' => ['required' , 'string'],
            'Position' => ['required' , 'int' , 'unique:banners' ],
            'MainImage' => ['required' , 'file'],
            'LinkTo' => ['required' , 'string' ,Rule::in('Product' , 'Category')],
            'Link' => ['required' , 'int' ],
        ]);

        if ($request->Position > 9){
            Alert::error('عملیات شکست خورد' , 'شما نمیتوانید بیشتر از ۹ جایگاه داشته باشید');
            return redirect()->back();
        }



        $ImageURL = $this->UploadImage($request->MainImage , 'SiteSettings/Banner');

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

        Banner::create([
            'Name' => $request->Name,
            'Position' => $request->Position,
            'ImageUrl' => $ImageURL,
            'LinkTo' => $request->LinkTo,
            'Link' => $Link,
        ]);

        \Alert::success('عملیات موفق آمیز' , 'بنر با موفقیت ساخته شد.');
        return redirect()->route('Dashboard.SiteSettings.Banner.index');
    }
    public function Edit($ID){
        $Banner = Banner::find($ID);
        return view('Dashboard.SiteSettings.Banner.Edit')->with(['Banner' => $Banner]);
    }
    public function Update($ID , Request $request){
        $request->validate([
            'Name' => ['required' , 'string'],
            'MainImage' => ['nullable' , 'file'],
            'LinkTo' => ['nullable' , 'string' ,Rule::in('Product' , 'Category')],
            'Link' => ['nullable' , 'int' ],
        ]);
        $Banner = Banner::find($ID);
        if ($request->has('MainImage')){
            $ImageURL = $this->UploadImage($request->MainImage , 'SiteSettings/Banner');
        }else{
            $ImageURL = $Banner->ImageUrl;
        }

        if ($request->has('LinkTo')){
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

        }else{
            $Link = $Banner->Link;
        }



        $Banner->update([
            'Name' => $request->Name,
            'ImageUrl' => $ImageURL,
            'LinkTo' => $request->LinkTo,
            'Link' => $Link,
        ]);


        \Alert::success('عملیات موفق آمیز' , 'بنر با موفقیت بروزرسانی شد.');
        return redirect()->route('Dashboard.SiteSettings.Banner.index');
    }
    public function Delete(){

    }
}
