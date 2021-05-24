<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class SentClientsController extends Controller
{
    public function index()
    {
        $message_clients = MessageClient::all(); //declared variable to store all the elements of the db
        return view("pages.sent_msg_clients")->with("message_clients", $message_clients);
    }

    public function create(){
        return view("pages.create_msg_clients");
    }

    public function store(Request $request){

        $subject = $request->subject;
        $mode_of_payment = $request->mode_of_payment;
        
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img_msgclients'), $imageName);
        
        $message_client = new MessageClient();
        $message_client->client_id = 1;
        $message_client->subject = $subject;
        $message_client->mode_of_payment = $mode_of_payment;
        $message_client->msg_imagefile = $imageName;

        $message_client->save();

        return back()->with('msgclient_added','Student Record has been inserted');

    }

    public function show($id){
        $message_client  = MessageClient::find($id);

        return view('pages.show-sentmsg-clients')->with("message_client", $message_client);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $message_client = MessageClient::find($id);
        $message_client->delete(); //delete a column

        return redirect()->route('message_clients.index');
    }
}
