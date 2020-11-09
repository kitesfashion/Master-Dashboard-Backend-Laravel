<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TestCategory;
use App\Models\Admin\Slider;
use App\Models\Admin\Test;

class TestController extends Controller
{
    //Test Category---------------------------------------------------------
    public function test_category(){
        $result=TestCategory::orderBy('id','DESC')->get();
        return view('Admin.test.testcategory',compact('result'));
    }
    public function test_category_api(){
    
        $testcategory=TestCategory::inRandomOrder()->get();      
        return response()->json($testcategory);
    }
    public function single_view($id){
           $signle=Test::find($id);
        return response()->json($signle);

    }
    public function test_category_store(Request $request){
    
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;          
            $this->imgdf($request,$imageUrl);
        return redirect()->back()->with('add','add');
    }
 public function imgdf($request,$imageUrl){
        $testcategory=new TestCategory;
        $testcategory->test_category=$request->name;;
        $testcategory->image=$imageUrl;
        $testcategory->save();
    
    }
    public function test_category_edit($id){
        $data=TestCategory::find($id);
        return $data;
    }
    public function test_category_update(Request $request){
            
        $member=TestCategory::find($request->id);
        $img=$request->file('image');
        if($img){
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$member->image;
        }     
        $this->img($request,$imageUrl);
        return redirect()->back()->with('update','add');
    }
 public function img($request,$imageUrl){
        $member=TestCategory::find($request->id);
        $member->test_category=$request->name;
        $member->image=$imageUrl;
        $member->save();
    }
    public function test_category_delete($id){
        $data=TestCategory::find($id);
        $data->delete();
        return redirect()->back()->with('delete','add');

    }
    //Test------------------------------------------------------------------------------
      public function test(){
          $category=TestCategory::orderBy('id','DESC')->get();
          $categorys=TestCategory::orderBy('id','DESC')->get();
          $test=Test::orderBy('id','DESC')->get();    
          return view('Admin.test.test',compact('category','categorys','test'));
      }
      public function test_api($id){
            if($id=='all'){
                $result=Test::inRandomOrder()->get();
            }else{
                $result=Test::where('category',$id)->get();
            }
           
           return response()->json($result);
      }
      public function test_store(Request $request){   
        $image=$request->file('image');
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;          
        $this->imgdfl($request,$imageUrl);
    return redirect()->back()->with('add','add');
   }
    public function imgdfl($request,$imageUrl){
        $test=new Test;
        $test->category=$request->category;
        $test->name=$request->name;
        $test->price=$request->price;
        $test->duration=$request->duration;
        $test->report=$request->report;
        $test->appointment=$request->appointment;
        $test->details=$request->details;
        $test->image=$imageUrl;
        $test->save();

    } 
    public function test_edit($id){
        $data=Test::find($id);
        return $data;
    }

    public function test_update(Request $request){           
        $member=Test::find($request->id);
        $img=$request->file('image');
        if($img){
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$member->image;
        }     
        $this->imguy($request,$imageUrl);
        return redirect()->back()->with('update','add');
    }
 public function imguy($request,$imageUrl){
        $test=Test::find($request->id);
        $test->category=$request->category;
        $test->name=$request->name;
        $test->price=$request->price;
        $test->duration=$request->duration;
        $test->report=$request->report;
        $test->appointment=$request->appointment;
        $test->details=$request->details;
        $test->image=$imageUrl;
        $test->save();
    }

    public function test_delete($id){
        $data=Test::find($id);
        $data->delete();
        return redirect()->back()->with('delete','add');

    }

    //Slider-----------------------------------------------------------------------------
    public function slider(){
        $result=Slider::orderBy('id','DESC')->get();
        return view('Admin.home.slider',compact('result'));
    }
    public function slider_api(){
    
        $slider=Slider::inRandomOrder()->get();      
        return response()->json($slider);
    }
    public function slider_store(Request $request){
    
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;          
            $this->imgdfg($request,$imageUrl);
        return redirect()->back()->with('add','add');
    }
 public function imgdfg($request,$imageUrl){
        $testcategory=new Slider;
        $testcategory->name=$request->name;;
        $testcategory->image=$imageUrl;
        $testcategory->save();
    
    }
    public function slider_edit($id){
        $data=Slider::find($id);
        return $data;
    }
    public function slider_update(Request $request){
            
        $member=Slider::find($request->id);
        $img=$request->file('image');
        if($img){
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$member->image;
        }     
        $this->imgrt($request,$imageUrl);
        return redirect()->back()->with('update','add');
    }
 public function imgrt($request,$imageUrl){
        $member=Slider::find($request->id);
        $member->name=$request->name;
        $member->image=$imageUrl;
        $member->save();
    }
    public function slider_delete($id){
        $data=Slider::find($id);
        $data->delete();
        return redirect()->back()->with('delete','add');

    }
}
