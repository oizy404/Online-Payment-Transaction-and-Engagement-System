<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\MessageAssociate;
use App\Models\Client;
use App\Models\MessageClient;
use App\Models\Message;

class AllMessagesController extends Controller
{
    public function index()
    {   
        $messages = Message::all(); //declared variable to store all the elements of the db
    }

    public function create(){
        
    }

    public function store(Request $request){
        
        $subject = $request->subject;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img_msgassociates'), $imageName);
        
        $message = new Message();
        $message->user_id = 1;
        $message->subject = $subject;
        $message->msg_imagefile = $imageName;

        $message->save();
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
