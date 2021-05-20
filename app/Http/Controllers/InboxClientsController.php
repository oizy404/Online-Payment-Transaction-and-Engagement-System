<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class InboxClientsController extends Controller
{
    public function index()
    {
        $inbox_message_associates = MessageAssociate::all(); //declared variable to store all the elements of the db
        return view("pages.home_clients")->with("inbox_message_associates", $inbox_message_associates);
    }

    public function create(){
    
    }

    public function store(Request $request){

    }

    public function show($id){
        $inbox_message_associate  = MessageAssociate::find($id);

        return view('pages.show_receivedmsg_associates')->with("inbox_message_associate", $inbox_message_associate);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $inbox_message_associate = MessageAssociate::find($id);
        $inbox_message_associate->delete(); //delete a column

        return redirect()->route('inbox_message_associates.index');
    }
}
