<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class AssociatesMessageController extends Controller
{

    //Functions for Associate's Sent Messages
    public function index()
    {   
        $message_associates = MessageAssociate::all(); //declared variable to store all the elements of the db
        return view("pages.sent_msg_associates")->with("message_associates", $message_associates);
    }

    public function insert(Request $request){
        
        $subject = $request->subject;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img_msgassociates'), $imageName);
        
        $message_associate = new MessageAssociate();
        $message_associate->associate_id = 1;
        $message_associate->subject = $subject;
        $message_associate->msg_imagefile = $imageName;

        $message_associate->save();

        return redirect()->route('associates-message');
    }

    public function show($id){
        $message_associate  = MessageAssociate::find($id);

        return view('pages.show-sentmsg-assoc')->with("message_associate", $message_associate);
    }

    public function delete($id){
        $message_associate = MessageAssociate::find($id);
        $message_associate->delete(); //delete a column

        return redirect()->route('associates-message');
    }

    //Functions for Associate's Received Messages
    public function inbox(){
        $assoc_inbox_msgs = MessageClient::all(); //declared variable to store all the elements of the db
        return view("pages.home_associates")->with("assoc_inbox_msgs", $assoc_inbox_msgs);
    }

    public function show_inbox($id){
        $assoc_inbox_msg  = MessageClient::find($id);

        return view('pages.show-receivedmsg-clients')->with("assoc_inbox_msg", $assoc_inbox_msg);
    }
}
