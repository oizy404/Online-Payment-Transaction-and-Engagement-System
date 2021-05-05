<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\ClientCorporation;
use App\Models\ClientIndividual;
use App\Models\MessageClient;
use App\Models\Message;

class SentAssociatesController extends Controller
{
    public function index()
    {   
        $message_associates = MessageAssociate::all(); //declared variable to store all the elements of the db
        return view("pages.sent_msg_associates")->with("message_associates", $message_associates);
    }

    public function create(){
        return view("pages.create_msg_associates");
    }

    public function store(Request $request){

        $message_associate = new MessageAssociate();
        $message_associate->subject = $request->subject;
        $message_associate->message = $request->message;
        $message_associate->save();

        return redirect()->route('message_associates.index');
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
