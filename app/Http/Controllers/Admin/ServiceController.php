<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Service;
use App\Models\Admin\Banner;


class ServiceController extends Controller
{
    public function service(){
        $service=Service::orderBy('id','DESC')->get();
        return view('admin.Service.service',compact('service'));
    }

    public function homesample(){   
        $result=Service::where('service',1)->first();      
        return response()->json($result);
    }
    public function homereport(){   
        $result=Service::where('service',2)->first();      
        return response()->json($result);
    }
    public function onlinereport(){   
        $result=Service::where('service',3)->first();      
        return response()->json($result);
    }

    public function service_store(Request $request){
        $image=$request->file('bannerimage');
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name; 
         
        $image1=$request->file('image');
        $name1=uniqid().$image1->getClientOriginalName();
        $uploadPath1='public/image/';
        $image1->move($uploadPath1,$name1);
        $imageUrl1=$uploadPath1.$name1; 
        
        $this->imgdfgk($request,$imageUrl,$imageUrl1);
    return redirect()->back()->with('add','add');
    }
    public function imgdfgk($request,$imageUrl,$imageUrl1){
        $service=new Service();
        $service->service=$request->service;
        $service->header1=$request->header1;
        $service->details1=$request->details1;
        $service->header2=$request->header2;
        $service->details2=$request->details2;
        $service->header3=$request->header3;
        $service->details3=$request->details3;
        $service->header4=$request->header4;
        $service->details4=$request->details4;
        $service->header5=$request->header5;
        $service->details5=$request->details5;
        $service->bannerimage=$imageUrl;
        $service->image=$imageUrl1;
        $service->save();
    
    }
    public function service_edit($id){
        $data=Service::find($id);
        return $data;
    }
    public function service_update(Request $request){

        $service=Service::find($request->id);
        $bimg=$request->file('bannerimage');
        $img=$request->file('image');
        if($bimg){
            $bimage=$request->file('bannerimage');
            $bname=uniqid().$bimage->getClientOriginalName();
            $buploadPath='public/image/';
            $bimage->move($buploadPath,$bname);
            $imageUrl=$buploadPath.$bname;
        }else{
            $imageUrl=$service->bannerimage;
        } 
        if($img){
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl1=$uploadPath.$name;
        }else{
            $imageUrl1=$service->image;
        }

        $this->imgd($request,$imageUrl,$imageUrl1);
    return redirect()->back()->with('update','add');
    }
    public function imgd($request,$imageUrl,$imageUrl1){
        $service=Service::find($request->id);
        $service->service=$request->service;
        $service->header1=$request->header1;
        $service->details1=$request->details1;
        $service->header2=$request->header2;
        $service->details2=$request->details2;
        $service->header3=$request->header3;
        $service->details3=$request->details3;
        $service->header4=$request->header4;
        $service->details4=$request->details4;
        $service->header5=$request->header5;
        $service->details5=$request->details5;
        $service->bannerimage=$imageUrl;
        $service->image=$imageUrl1;
        $service->save();
    
    }
    //Banner--------------------------------------------------------------------------
    public function banner(){
        $blog=Banner::first();
        return view('admin.Service.banner',compact('blog'));
    }
    public function banner_api(){   
        $result=banner::first();      
        return response()->json($result);
    }
    public function banner_edit($id){
        $data=Banner::find($id);
        return $data;
    }
    public function banner_update(Request $request){

        $service=Banner::find($request->id);

       // dd($service);
        $img1=$request->file('image1');
        $img2=$request->file('image2');
        $img3=$request->file('image3');
        $img4=$request->file('image4');
        if($img1){
            $image=$request->file('image1');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl1=$uploadPath.$name;
        }else{
            $imageUrl1=$service->image1;
        } 
        if($img2){
            $image=$request->file('image2');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl2=$uploadPath.$name;
        }else{
            $imageUrl2=$service->image2;
        }
        if($img3){
            $image=$request->file('image3');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl3=$uploadPath.$name;
        }else{
            $imageUrl3=$service->image3;
        }
        if($img4){
            $image=$request->file('image4');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl4=$uploadPath.$name;
        }else{
            $imageUrl4=$service->image4;
        }
        $this->imgdgf($request,$imageUrl1,$imageUrl2,$imageUrl3,$imageUrl4);
    return redirect()->back()->with('update','add');
    }
    public function imgdgf($request,$imageUrl1,$imageUrl2,$imageUrl3,$imageUrl4){
        $service=Banner::find($request->id);
        $service->image1=$imageUrl1;
        $service->image2=$imageUrl2;
        $service->image3=$imageUrl3;
        $service->image4=$imageUrl4;
        $service->save();
    
    }
}
