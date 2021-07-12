<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Todo;

use Validator;

class testcontroller extends Controller
{
    // works on logic that we provide in the function
    // public function test()
    // {
    //     // return view("welcome");
    //     $mul = 4*5;
    //     // send the variable or result with the view
    //     return view("welcome", compact('mul')); 
    // }

    // public function home()
    // {
    //     return view("form.home");
    // }

    // public function register()
    // {
    //     return view('form.reg');
    // }

    // public function store()
    // {
    //     return view("form.home");
    // }

    public function insert()
    {
         // for single row insertion
        $data = DB::table("temp")->insert(["clm_name"=>"value", ]);
        echo $data;

        // for inserting multiple rows
        DB::table("temp") -> insert([ [], [], [] ]);

    }

    public function query()
    {
        $rec = DB::table('temp') -> where(["id"=>2]) ->get(); // isme we get a collection of arrays
        // if we have used first() then we would get an object
        echo $rec;

        $all = DB::table("temp") -> get();

        $upd = DB::table("temp") -> where([ "id" => 2]) ->update([
            "name"=>"abc",
            "email"=>"updatedmail@gmail.com"
        ]);
    }

    public function insertbymodel()
    {
        // creating the instance of the model
        // 1. way to add value into table
        
        $todo = new Todo();
        $todo->name="first";
        $todo->email = "abc@gmial.com";
        $todo->save(); 
    }
    // 2. Using the constructor but make sure to mark the fillable or guarded colmns
    public function insertbyconst()
    {
        $todo = new Todo([
            "name" = "second",
            "email" = "abc2@gmail.com"
        ]);

        $todo->save();
    }

    // 3. using create keyword
    public function insertusingcreate()
    {
        $todo = Todo::create([
            "name" = "second",
            "email" = "abc2@gmail.com"
        ]);
        // here we dont need any 
        $todo->save();
    }

    public function summit(Request $request) // taking the vlaues summited in form in the variable request
    {
        $this->validate($request,[
            "name"=>"required",
            "email"=>"required|email|min:8|max:20" // we can also add a unique keyword to denote that duplicates r not allowed
        ], [
          // here we can pass the msg that we want to show when error occurred 
        ]);

        print_r($request->all());
    }

    public function ValidateUsingValidator(Request $request)
    {
        $val = Validator:: make($request->all()[
           // write the rules here
        ]);

        if($val->fails())
        {
           // error is present redirect to the main page with errors
           return redirect(" # ");
        }
        else{
            print_r($request->all());
        }
    }
}
