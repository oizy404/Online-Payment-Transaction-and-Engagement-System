<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class ClientsMessageController extends Controller
{

    //Functions for Clients Sent Messages
    public function index()
    {
        $message_clients = MessageClient::all(); //declared variable to store all the elements of the db
        return view("pages.sent_msg_clients")->with("message_clients", $message_clients);
    }

    public function insert(Request $request){

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

        return redirect()->route('clients-message');

    }

    public function show($id){
        $message_client  = MessageClient::find($id);

        return view('pages.show-sentmsg-clients')->with("message_client", $message_client);
    }

    public function delete($id){
        $message_client = MessageClient::find($id);
        $message_client->delete(); //delete a column

        return redirect()->route('clients-message');
    }

    //Functions for Client's Received Messages
    public function inbox(){
        $clients_inbox_msgs = MessageAssociate::all(); //declared variable to store all the elements of the db
        return view("pages.home_clients")->with("clients_inbox_msgs", $clients_inbox_msgs);
    }

    public function show_inbox($id){
        $clients_inbox_msg  = MessageAssociate::find($id);

        return view('pages.show_receivedmsg_associates')->with("clients_inbox_msg", $clients_inbox_msg);
    }
}
