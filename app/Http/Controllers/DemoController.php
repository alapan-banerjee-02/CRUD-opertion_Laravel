<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class DemoController extends Controller
{
    //
    
    //logic
    public function first_example(){
        echo "<h3>'welcome to laravel 10....'<h3>";
    }
    public function signup_form():View{
        return view('form');
    }

    public function submit_data(Request $req){
        //print_r($req->all());
        //dd($req->all());
        $req->validate(
            [
                'name' => ['required','regex:/^[A-Za-z ]{3,30}$/'],
                'age' => ['required','integer','between:18,40'],
                'email' => ['required','regex: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/'],
                'phone' => ['required','regex:/^[6-9][0-9]{9}$/'],
                'pass' => ['required','regex: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/'],
                'img' => ['required','mimes:jpg,jpeg,png,gif|max:4096']   //kb
            ]
        );
        $name=$req->input('name');
        $age=$req->input('age');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $pass=md5($req->input('pass'));
        $file= $req->file('img');
        $fileName= time()."_".$file->getClientOriginalName();
        $uploadLocation="./uploads";
        $file->move($uploadLocation,$fileName);
        $submitData =[
            'name'  => $name,
            'age'  => $age,
            'email'  => $email,
            'phone'  => $phone,
            'password'  => $pass,
            'image'  => $uploadLocation."/".$fileName
        ];
        DB::table('laravel_demo')->insert($submitData);
        //return view('form')->with(['userInfo'=>$submitData]);
        return redirect('/display');
    }
    function display_data(){
        $fetchData = DB::table('laravel_demo')->get();
        return view('display')->with(['allInfo'=>$fetchData]);
    }

    function delete_data($delId){
        DB::table('laravel_demo')->where('user_id',$delId)->delete();
        return redirect('/display');
    }


    function edit_data($edId){
        $fetchData = DB::table('laravel_demo')->where('user_id',$edId)->get()->first();
        return view('edit')->with(['editInfo'=>$fetchData]);
    }

    public function update_data(Request $req){
            $req->validate(
            [
                'name' => "required|regex:/^[A-Za-z ]{3,30}$/",
                'age' => "required|integer|between:18,40",
                'email' => "required|regex: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/",
                'phone' => "required|regex:/^[6-9][0-9]{9}$/",
                'img' => "nullable|mimes:jpg,jpeg,png,gif,webp|max:4096"   //kb
            ]
        );

        $id = $req->input('uid');
        $name = $req->input('name');
        $age = $req->input('age');
        $email = $req->input('email');
        $phone = $req->input('phone');

         $submitData = [
            'name'  => $name,
            'age'  => $age,
            'email'  => $email,
            'phone'  => $phone
            // 'image'  => $uploadLocation."/".$fileName
        ];

        // $file = $req->file('image');
        // $fileName = time()."_".$file->getClientOriginalName();
        // $uploadLocation = "./uploads";
        // $file->move($uploadLocation,$fileName);
     if ($req->hasFile('img') && $req->file('img')->isValid()) {
        $file = $req->file('img');
        $fileName = time() . "_" . $file->getClientOriginalName();
        $uploadLocation = "./uploads";
        $file->move($uploadLocation, $fileName);
        $submitData['img'] = $uploadLocation . "/" . $fileName;
    }
   
      DB::table('laravel_demo')->where('user_id',$id)->update($submitData);
      return redirect('/display');
     }
}
