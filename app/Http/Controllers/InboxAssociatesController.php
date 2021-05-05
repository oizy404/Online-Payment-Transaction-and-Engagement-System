<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\ClientCorporation;
use App\Models\ClientIndividual;
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
        $inbox_message_clients = MessageClient::find($id);
        return view("pages.show_receivedmsg_associates")->with("inbox_message_clients", $inbox_message_clients);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
         
    }
}
