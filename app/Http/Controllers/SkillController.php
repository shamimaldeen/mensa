<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SkillController extends Controller
{   


	public function __construct()
    {
        $this->middleware('auth');
    }




      public function create()
    {
      $skill=DB::table('skills')->get();
      return view('pages.skill.create',compact('skill'));
    }


       public function store(Request $request)
    {

       $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
     
        $image=$request->file('image');
            if ($image) {
                // $image_name= str_random(5);
                $image_name= date('dmy_H_s_i');

                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/skill/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['image']=$image_url;
                $skill=DB::table('skills')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully skill Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $skill=DB::table('skills')
                          ->insert($data);
                 $notification=array(
                     'messege'=>' Added Done!',
                     'alert-type'=>'success'
                      );
                 return Redirect()->route('all.skill')->with($notification);
            }
   
    }





      public function index()
    {
      $skill=DB::table('skills')->get();
        return view('pages.skill.index',compact('skill'));

    }





             public function Deleteskill($id)
    {
        $data=DB::table('skills')->where('id',$id)->first();
        $image=$data->image;
        if ($image) {
           unlink($image);
        $post=DB::table('skills')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully skill Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);   

        }else{

             $skill=DB::table('skills')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully skill Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);   


        }
      
    }



     public function Editskill($id)
    {
         $skill=DB::table('skills')->where('id',$id)->first();
         return view('pages.skill.edit_skill',compact('skill'));
    }






     public function Updateskill(Request $request,$id)
    {
        $oldlogo=$request->old_logo;
        $data=array();
       
        $data['title']=$request->title;
        $data['description']=$request->description;
        $image=$request->file('image');
            if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/skill/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                $skill=DB::table('skills')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully skill Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('all.skill')->with($notification);                      
            }else{
              $skill=DB::table('skills')->where('id',$id)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('all.skill')->with($notification); 
            }
    }

    
}
