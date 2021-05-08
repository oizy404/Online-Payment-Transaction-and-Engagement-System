<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;

class AssociateController extends Controller
{
    public function index()
    {   
        $associates = Associate::all(); //declared variable to store all the elements of the db
        return view("pages.admin-home")->with("associates", $associates);
    }

    public function create(){
        return view("pages.create-associate-account");
    }

    public function store(Request $request){
        $associates = new Associate();
        $associates->fullname = $request->fullname;
        $associates->birthday = $request->birthday;
        $associates->address = $request->address;
        $associates->contact_number = $request->contact_number;
        $associates->email = $request->email;
        $associates->password = $request->password;

        $associates->save();

        return redirect()->route('associates.index');
    }

    public function show($id){
        
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
         
    }
}
