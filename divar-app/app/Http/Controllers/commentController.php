<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ad;
use App\Models\category;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function createComment(Ad $id){
        // dd($id);
        return view('Comment.create')->with(['id'=>$id]);

    }


    public function StoreComment(Request $request, $id){         

        $user_id = Auth::user()->id;      
        $Ads_id  = ad::where('id',$id)->first()->id;         

        $comment=new comment([            
            'user_id'=> $user_id,                 
            'Ads_id'=> $Ads_id,                 
            'description'=> $request->get('description'),           
            ]);       

        if($comment->save())
        {              
            return redirect(route('indexAd'));          
        }    

    }
}
