<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PortfolioController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }




     public function portfolio()
    {
      $portfolio=DB::table('portfolios')->get();
      return view('pages.portfolio.portfolio',compact('portfolio'));
    }



      public function storeportfolio(Request $request)
    {
      
        $data=array();
        $image=$request->file('image');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/portfolio/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['image']=$image_url;
                $portfolios=DB::table('portfolios')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Image Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $portfolio=DB::table('portfolios')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Successfully added done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }

    }




     public function Deleteportfolio($id)
    {
        $data=DB::table('portfolios')->where('id',$id)->first();
        $image=$data->image;
        unlink($image);
        $portfolio=DB::table('portfolios')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully Image Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);   

    }






       public function Editportfolio($id)
    {
         $portfolio=DB::table('portfolios')->where('id',$id)->first();
         return view('pages.portfolio.edit_portfolio',compact('portfolio'));
    }




      public function Updateportfolio(Request $request,$id)
    {
        $oldlogo=$request->old_logo;
        $data=array();
        $image=$request->file('image');
            if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/portfolio/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                $portfolio=DB::table('portfolios')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully Image Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('portfolio')->with($notification);                      
            }else{
              $portfolio=DB::table('portfolios')->where('id',$id)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('portfolio')->with($notification); 
            }
    }



 

}
