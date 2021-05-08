<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {   
        $clients = Client::all(); //declared variable to store all the elements of the db
        return view("pages.admin-home")->with("clients", $clients);
    }

    public function create(){
        return view("pages.create-client-account");
    }

    public function store(Request $request){
        $clients = new Client();
        $clients->fullname = $request->fullname;
        $clients->birthday_corpcreated = $request->birthday_corpcreated;
        $clients->address = $request->address;
        $clients->contact_number = $request->contact_number;
        $clients->email = $request->email;
        $clients->password = $request->password;

        $clients->save();

        return redirect()->route('clients.index');
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
