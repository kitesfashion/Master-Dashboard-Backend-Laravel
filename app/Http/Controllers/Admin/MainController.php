<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Company;
use App\Models\Admin\Mission;
use App\Models\Admin\Blog;
use App\Models\Admin\Contact;
use App\Models\Admin\Appoinment;
use App\Models\Admin\Doctor;
use App\Models\Admin\Testappoinment;
use App\Models\Admin\DoctorAppoinment;

class MainController extends Controller
{
    public function company(){
         $result=Company::first();
        return view('admin.home.company',compact('result'));
    }
public function companyinfo(){
    
    $result=Company::first();      
    return response()->json($result);
}
    public function company_edit($id){
        $data=Company::find($id);
        return $data;
    }
    public function company_update(Request $request){
            
        $member=Company::find($request->id);
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
        $this->imgdf($request,$imageUrl);
        return redirect()->back()->with('update','add');
    }
 public function imgdf($request,$imageUrl){
        $member=Company::find($request->id);
        $member->name=$request->name;
        $member->mobile1=$request->mobile1;
        $member->mobile2=$request->mobile2;
        $member->address=$request->address;
        $member->email=$request->email;
        $member->free=$request->time;
        $member->image=$imageUrl;
        $member->save();
    }
//Mission Quota------------------------------------------------------------------
    public function mission(){
        $result=Mission::first();
       return view('admin.home.mission',compact('result'));
   }
public function missioninfo(){
   
   $result=Mission::first();      
   return response()->json($result);
}
   public function mission_edit($id){
       $data=Mission::find($id);
       return $data;
   }
   public function mission_update(Request $request){
           
       $member=Mission::find($request->id);
       $img=$request->file('image');
       $img2=$request->file('banner');
       if($img){
           $image=$request->file('image');
           $name=uniqid().$image->getClientOriginalName();
           $uploadPath='public/image/';
           $image->move($uploadPath,$name);
           $imageUrl=$uploadPath.$name;
       }else{
           $imageUrl=$member->image;
       }   
       if($img2){
        $image=$request->file('banner');
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl2=$uploadPath.$name;
    }else{
        $imageUrl2=$member->banner;
    } 
    
       $this->imgdfg($request,$imageUrl,$imageUrl2);
       return redirect()->back()->with('update','add');
   }
public function imgdfg($request,$imageUrl,$imageUrl2){
       $member=Mission::find($request->id);
       $member->about=$request->about;
       $member->mission=$request->mission;
       $member->uniquenes=$request->uniquenes;
       $member->quoto=$request->quoto;
       $member->quotoname=$request->quotoname;
       $member->image=$imageUrl;
       $member->banner=$imageUrl2;
       $member->save();
   }

   //Blogs------------------------------------------------------------------------------------------
   public function blogs(){
       $result=Blog::orderBy('id','DESC')->get();
       return view('admin.pages.blogs',compact('result'));
   }
   public function blog_api(){
    
    $blog=Blog::inRandomOrder()->get();      
    return response()->json($blog);
      }
    public function blog_view($id){
        $blog=Blog::find($id);      
        return response()->json($blog);
    }

   public function blogs_store(Request $request){
    $image=$request->file('image');
    $name=uniqid().$image->getClientOriginalName();
    $uploadPath='public/image/';
    $image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;          
    $this->imgdfgk($request,$imageUrl);
return redirect()->back()->with('add','add');
}
public function imgdfgk($request,$imageUrl){
    $blog=new Blog();
    $blog->name=$request->name;
    $blog->author=$request->author;
    $blog->details=$request->details;
    $blog->details1=$request->details1;
    $blog->details2=$request->details2;
    $blog->details3=$request->details3;
    $blog->image=$imageUrl;
    $blog->save();

}
public function blogs_edit($id){
    $data=Blog::find($id);
    return $data;
}
public function blogs_delete($id){
    $data=Blog::find($id);
    $data->delete();
return redirect()->back()->with('delete','add');

}
public function blogs_update(Request $request){
            
    $member=Blog::find($request->id);
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
    $this->imgdfb($request,$imageUrl);
    return redirect()->back()->with('update','add');
}
public function imgdfb($request,$imageUrl){
    $blog=Blog::find($request->id);
    $blog->name=$request->name;
    $blog->author=$request->author;
    $blog->details=$request->details;
    $blog->details1=$request->details1;
    $blog->details2=$request->details2;
    $blog->details3=$request->details3;
    $blog->image=$imageUrl;
    $blog->save();
}
//contact us-------------------------------------------------------------------------
public function contact_store(Request $request){
             // dd($request->all());
              $contact = new Contact([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]);
            $contact->save();     

            }
//Appoinmnt.....................................................................
    public function appoinment_store(Request $request){
        //dd($request->all());
        $appoinment = new Appoinment([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'appointcat' => $request->input('appointcat'),
            'sample' => $request->input('sample'),
            'report' => $request->input('report'),
            'address' => $request->input('address'),
            'comments' => $request->input('comments'),
        ]);
        $appoinment->save();     

    }   
    //Test Appoinment.............................................................
    public function testappoinment(Request $request){
       // dd($request->all());
        $randomNumber = rand(0000,9999);
        $appoinment = new Testappoinment([
            'bookingid' => $randomNumber,
            'testid' => $request->input('testid'),
            'patient' => $request->input('patient'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'phone' => $request->input('phone'),
            'sample' => $request->input('sample'),
            'report' => $request->input('report'),
            'address' => $request->input('address'),
            'age' => $request->input('age'),

        ]);
        $appoinment->save();     

    } 

    //Doctor Apooinment ----------------------------------------------------------
    public function appointment(Request $request){
        // dd($request->all());
         $randomNumbetr = rand(0000,9999);
         $dappoinment = new DoctorAppoinment([
             'free' => $randomNumbetr,
             'doctor' => 1,
             'patient' => $request->input('patient'),
             'date' => $request->input('date'),
             'time' => $request->input('time'),
             'phone' => $request->input('phone'),
             'age' => $request->input('age'),
 
         ]);
         $dappoinment->save();     
 
     } 
    //Doctors.........................................................................
    public function doctor(){
        $doctor=Doctor::orderBy('id','DESC')->get();
        return view('admin.pages.doctor',compact('doctor'));
    }
    public function doctor_api(){
        $doctor=Doctor::inRandomOrder()->get();      
        return response()->json($doctor);
    }
     
    public function doctor_store(Request $request){
        $image=$request->file('image');
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;          
        $this->im($request,$imageUrl);
    return redirect()->back()->with('add','add');
    }
    public function im($request,$imageUrl){
        $doctor=new Doctor();
        $doctor->name=$request->name;
        $doctor->specialty=$request->specialty;
        $doctor->degree=$request->degree;
        $doctor->chamber=$request->chamber;
        $doctor->image=$imageUrl;
        $doctor->save();
    
    }
    public function doctor_edit($id){
        $data=Doctor::find($id);
        return $data;
    }
    public function doctor_delete($id){
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('delete','add');
    }
    public function doctor_update(Request $request){
            
        $member=Doctor::find($request->id);
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
        $this->imgdfkb($request,$imageUrl);
        return redirect()->back()->with('update','add');
    }
    public function imgdfkb($request,$imageUrl){
        $doctor=Doctor::find($request->id);
        $doctor->name=$request->name;
        $doctor->specialty=$request->specialty;
        $doctor->degree=$request->degree;
        $doctor->chamber=$request->chamber;
        $doctor->image=$imageUrl;
        $doctor->save();
    }
}
