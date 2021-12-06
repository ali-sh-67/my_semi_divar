<?php

namespace App\Http\Controllers;
use App\Models\ad;
use App\Models\category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
    public function indexAd(Request $request)
    {  
        $users = Auth::user()->name;            
        $id = Auth::user()->id;       
         $ads = Ad::where('user_id',$id)->get();
        return view('Ad.index')->with(['ads' => $ads]);
    }

   public function createAd()
   {  
       return view('Ad.createAd'); 
   }

   public function storeAd(Request $request)
    {
        $user = Auth::user()->id;
        $category = Auth::user()->id;
        
        $ad=new Ad([
        'user_id'=>$user,
        'category_id'=>$category,
        'title'=> $request->get('title'),
        'description'=>$request->get('description'),
        'image_url'=>$request->get('image_url'),
        'price'=>$request->get('price'),
        'address'=>$request->get('address'),
        'phone_number_ads'=> $request->get('phone_number_ads'),
        ]);
        
        
         if ($ad->save()) {
             
            return redirect(route('indexAd'));
          
        }
        // return; //422
    }

    public function deleteAd(Ad $id)   
    {    
    $id->delete();
    return redirect(route('indexAd'));
    }
    
    public function showAd(Ad $id)
    {  
        
        // dd($id);
        $users = Auth::user()->name;             
        return view('Ad.showAd')->with(['id'=>$id]);   
    }

    public function editAd(Ad $id)
    {   
        $users = Auth::user()->name;  
        return view('Ad.editAd')->with(['id'=>$id])->with(['users'=>$users]);            
    }

    
    
}
