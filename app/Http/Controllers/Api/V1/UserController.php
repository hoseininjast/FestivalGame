<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\TempUsers;
use Illuminate\Http\Request;
use Kavenegar;

class UserController extends Controller
{
    public function GetVerificationCode(Request $request)
    {
        $request->validate([
            'PhoneNumber' => ['required', 'numeric']
        ]);
        $Code = rand(100000, 999999);
        TempUsers::create([
            'PhoneNumber' => $request->PhoneNumber,
            'VerificationCode' => $Code
        ]);

        try {
            $sender = "10008663";        //This is the Sender number

            $message = "کد احراز هویت شما : {$Code} میباشد .";        //The body of SMS


            $result = Kavenegar::Send($sender, $request->PhoneNumber, $message);
            if ($result) {
                return response()->json([
                    'Message' => 'کد برای شما پیامک شد.',
                    'Code' => $Code
                ], 200);
            }
        } catch (\Kavenegar\Exceptions\ApiException $e) {
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            return response()->json([
                'Message' => $e->errorMessage()
            ], 200);
        } catch (\Kavenegar\Exceptions\HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            return response()->json([
                'Message' => $e->errorMessage()
            ], 200);
        } catch (\Exceptions $ex) {
            // در صورت بروز خطایی دیگر
            return response()->json([
                'Message' => $ex->getMessage()
            ], 200);
        }
    }


    public function GetSubCateorys(Request $request){
        $request->validate([
            'ParentCategory' => ['required' , 'exists:product_categories,id']
        ]);

        $SubCategorys = ProductCategory::where('ParentID' , $request->ParentCategory)->get();

        return response()->json([
            'SubCategorys' => $SubCategorys,
            'Code' => 200
        ], 200);
    }
}
