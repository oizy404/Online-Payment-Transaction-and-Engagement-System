<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
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

        
        $subject = $request->subject;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img_msgassociates'), $imageName);
        
        $message_associate = new MessageAssociate();
        $message_associate->associate_id = 1;
        $message_associate->subject = $subject;
        $message_associate->msg_imagefile = $imageName;

        $message_associate->save();

        return back()->with('msgassoc_added','Student Record has been inserted');
    }

    public function show($id){
        $message_associate  = MessageAssociate::find($id);

        return view('pages.show-msg-assoc')->with("message_associate", $message_associate);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
         
    }
}
