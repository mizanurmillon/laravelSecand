<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class aboutController extends Controller
{
    public function Contact()
    {
        $contact=DB::table('about')->get();
        return view('pages.contact')->with('data',$contact);
    }
    public function Insert()
    {
        return view('pages.insert');
    }
    public function Added(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['message']=$request->message;
        $insert=DB::table('about')->insert($data);
        return Redirect()->Route('all.contact');
    }
    public function Edit($id)
    {
        $edit=DB::table('about')->where('id',$id)->first();
        return view('pages.editcontact',compact('edit'));
    }
    public function Update(Request $request,$id)
    {
        $update=array();
        $update['name']=$request->name;
        $update['email']=$request->email;
        $update['phone']=$request->phone;
        $update['message']=$request->message;

        $update=DB::table('about')->where('id',$id)->update($update);
        return Redirect()->Route('all.contact');
    }
    public function Delete($id)
    {
        $dlt=DB::table('about')->where('id',$id)->delete();
        return Redirect()->Route('all.contact');
    }
    public function View($id)
    {
        $view=DB::table('about')->where('id',$id)->first();
        return view('pages.viewcontact',compact('view'));
    }
}
