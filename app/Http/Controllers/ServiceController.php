<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }




       public function create()
    {
      $service=DB::table('services')->get();
      return view('pages.service.create',compact('service'));
    }



       public function store(Request $request)
    {

       $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
     
              $services=DB::table('services')
                          ->insert($data);
                 $notification=array(
                     'messege'=>' Added Successfully Done!',
                     'alert-type'=>'success'
                      );
                 return Redirect()->route('all.service')->with($notification);
           
   
    }



      public function index()
    {
        $service=DB::table('services')->get();
        return view('pages.service.index',compact('service'));

    }




       public function Deleteservice($id)
    {
        

     $service=DB::table('services')->where('id',$id)->delete();
        $notification=array(
             'messege'=>'Successfully service Deleted ',
             'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);  
      
    }




      public function Editservice($id)
    {
         $service=DB::table('services')->where('id',$id)->first();
         return view('pages.service.edit_service',compact('service'));
    }






     public function Updateservice(Request $request,$id)
    {
        
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;

	    $services=DB::table('services')->where('id',$id)->update($data);
	         $notification=array(
	             'messege'=>' Successfully Updated!',
	             'alert-type'=>'success'
	              );
	        return Redirect()->route('all.service')->with($notification); 
            
    }





}
