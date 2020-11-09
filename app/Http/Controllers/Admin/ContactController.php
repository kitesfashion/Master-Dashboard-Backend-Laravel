<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Models\Admin\Appoinment;
use App\Models\Admin\Testappoinment;



class ContactController extends Controller
{
    public function contact_us(){
        $contact=Contact::orderBy('id','DESC')->get();
        return view('admin.pages.contactus',compact('contact'));
    }
    public function appointlist(){
        $appoinment=Appoinment::orderBy('id','DESC')->get();
        return view('admin.pages.appointment',compact('appoinment'));

    }
    public function apoinment_view($id){
        $appoinmentview=Appoinment::find($id);
        return view('admin.pages.appointview',compact('appoinmentview'));
        
    }
    public function testppointlist(){
        $testppoinment=Testappoinment::orderBy('id','DESC')->get();
        return view('admin.pages.testappoinment',compact('testppoinment'));
    }
    public function testppoint_view($id){
        $testppoinment_view=Testappoinment::find($id);
        return view('admin.pages.testappoinmentview',compact('testppoinment_view'));
    }
}
