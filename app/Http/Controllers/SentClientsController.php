<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\ClientCorporation;
use App\Models\ClientIndividual;
use App\Models\MessageClient;
use App\Models\Message;

class SentClientsController extends Controller
{
    public function index()
    {
        $message_clients = MessageClient::all(); //declared variable to store all the elements of the db
        return view("pages.sent_msg_clients")->with("message_clients", $message_clients);
        return view("show_receivedmsg_associates", compact('message_clients'));
    }

    public function create(){
        return view("pages.create_msg_clients");
    }

    public function store(Request $request){

        $message_client = new MessageClient();
        $message_client->subject = $request->subject;
        $message_client->mode_of_payment = $request->mode_of_payment;
        // $message_client->message = $request->message;

        $message_client->save();

        return redirect()->route('message_clients.index');

        
        $size = $request->file('message')->getSize();
        $name = $request->file('message')->getClientOrganizationalName();

        $request->file('message')->storeAs('public/img_clients/', $name);
        $photo = new MessageClient();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();
        return redirect()->route('message_client.index');

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
