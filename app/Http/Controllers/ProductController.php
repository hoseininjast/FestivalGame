<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    Use Uploader;
    public function index(){
        $Products = Product::all();
        return view('Dashboard.Product.index')->with(['Products' => $Products]);
    }

    public function Add(){
        $Categorys = ProductCategory::where('ParentID' , null)->get();
        return view('Dashboard.Product.Add')->with(['Categorys' => $Categorys]);
    }
    public function Create(Request $request){

        $request->validate([
            'Name' => ['required' , 'string'],
            'Brand' => ['required' , 'string'],
            'Price' => ['required' , 'string'],
            'PartnerPrice' => ['required' , 'string'],
            'Discount' => ['required' , 'int' , 'max:100'],
            'Count' => ['required' , 'int' ],
            'Type' => ['required' , 'string' ,Rule::in('Physical' , 'Digital')],
            'Status' => ['required' , 'string' ,Rule::in('Available' , 'NotAvailable')],
            'Colors' => ['required' , 'array' ],
            'Options' => ['required' , 'array' ],
            'Description' => ['required' , 'string' ],
            'CategoryID' => ['required' , 'exists:product_categories,id'],
            'SubCategoryID' => ['required' , 'exists:product_categories,id'],
            'MainImage' => ['required' ,  'file'],
            'OtherImages' => ['required' ,'array'  ],
        ]);
//        $validator = Validator::make($request->all(), [
//            'Name' => ['required' , 'string'],
//            'Brand' => ['required' , 'string'],
//            'Price' => ['required' , 'numeric'],
//            'PartnerPrice' => ['required' , 'numeric'],
//            'Discount' => ['required' , 'int' , 'max:100'],
//            'Count' => ['required' , 'int' ],
//            'Type' => ['required' , 'int' ,Rule::in('Physical' , 'Digital')],
//            'Status' => ['required' , 'int' ,Rule::in('Available' , 'NotAvailable')],
//            'Colors' => ['required' , 'array' ],
//            'Options' => ['required' , 'array' ],
//            'Description' => ['required' , 'string' ],
//            'ParentID' => ['required' , 'exists:product_categories,id'],
//            'SubCategory' => ['required' , 'exists:product_categories,id'],
//            'MainImage' => ['required' , 'file' ],
//            'OtherImages' => ['required' , 'array' ],
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()->back()
//                ->withErrors($validator)
//                ->withInput();
//        }
//
//        $data = $validator->validated();
//        dd($request->all());

        $OtherImagesUrl = [];
        $MainImageUrl = '';
        foreach ($request->OtherImages as $otherImage) {
          $OtherImagesUrl[] = $this->UploadImage($otherImage , 'Products');
        }
        if ($request->hasFile('MainImage')) {
            $MainImageUrl = $this->UploadImage($request->MainImage , 'Products');
        }


        Product::create([
            'ProductID' => 'FGP' . rand(100,10000) . time(),
            'Name' => $request->Name,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'PartnerPrice' => $request->PartnerPrice,
            'Discount' => $request->Discount,
            'MainImage' => $MainImageUrl,
            'Images' => implode(',' , $OtherImagesUrl),
            'Type' => $request->Type,
            'Status' => $request->Status,
            'Brand' => $request->Brand,
            'Count' => $request->Count,
            'Colors' => implode(',' , $request->Colors),
            'Options' => implode(',' , $request->Options),
            'CategoryID' => $request->CategoryID,
            'SubCategoryID' => $request->SubCategoryID,
        ]);
        \Alert::success('عمیلات با موفقیت انجام شد' , 'محصول ساخته شد');
        return redirect()->route('Dashboard.Product.index');
    }

    protected function Upload(UploadedFile $file){
        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);


        //get file extension
        $extension = $file->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_' . rand(100000 , 100000000).time().'.'.$extension;



        //Upload File
        $file->storeAs(date('Y/m/d') , $filenametostore ,'PublicPath');

        return '/Uploads/' . date('Y/m/d') . $filenametostore;

    }
    public function Edit(){}
    public function Update(){}
    public function Delete(){}
}
