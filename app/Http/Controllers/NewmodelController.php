<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newmodel;

class NewmodelController extends Controller
{
    //
    public function index(){
        $data = newmodel::all();
         return view('student.index',compact('data'));
     }

    public function create(){
       // return "hi";
        return view('student.create');
    }

    public function store(Request $request){

        $this->validate(request(),[
            'first_name'        =>'required|max:200',
            'last_name'         =>'required|max:200',
            'email'             =>'required|email|max:100',
            'address_line_1'    =>'required',
            'mobile'            =>'required|max:11|min:10',

        ]);
    
        $data = new newmodel();

        $data->first_name     = $request->first_name;
        $data->last_name      = $request->last_name;
        $data->address_line_1 = $request->address_line_1;
        $data->address_line_2 = $request->address_line_2;
        $data->mobile         = $request->mobile;
        $data->email          = $request->email;
        $data->save();

        return redirect('student/index');

    }
    public function store_2(Request $request){

        $this->validate(request(),[
            'first_name'        =>'required|max:200',
            'last_name'         =>'required|max:200',
            'email'             =>'required|email|max:100',
            'address_line_1'    =>'required',
            'mobile'            =>'required|max:11|min:10',

        ]);
    
        $data = new newmodel();

        $data->first_name     = $request->first_name;
        $data->last_name      = $request->last_name;
        $data->address_line_1 = $request->address_line_1;
        $data->address_line_2 = $request->address_line_2;
        $data->mobile         = $request->mobile;
        $data->email          = $request->email;
        $data->save();

        return redirect('student/index');

    }

    public function edit($id){
        // return "hi";
         return view('student.edit');
     }

     
     public function view($id){
        $data = newmodel::find($id);
         return view('student.view',compact('data'));
     }
}
