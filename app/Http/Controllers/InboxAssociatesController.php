<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class InboxAssociatesController extends Controller
{
    public function index()
    {   
        $inbox_message_clients = MessageClient::all(); //declared variable to store all the elements of the db
        return view("pages.home_associates")->with("inbox_message_clients", $inbox_message_clients);
    }

    public function create(){

    }

    public function store(Request $request){
        
    }

    public function show($id){
        $inbox_message_client  = MessageClient::find($id);

        return view('pages.show-receivedmsg-clients')->with("inbox_message_client", $inbox_message_client);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $inbox_message_client = MessageClient::find($id);
        $inbox_message_client->delete(); //delete a column

        return redirect()->route('inbox_message_clients.index');
    }
}
