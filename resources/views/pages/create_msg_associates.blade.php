<div class="create-msg">
    <div class="card">
        <div class="card-header" style="padding:8px">
            <h6>New Message</h6>
            <button id="btn-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="card-body" style="padding: 0px">
            @if(Session::has('msgassoc_added'))
                <div class="alert alert-primary" role="alert">
                    {{Session::get('msgassoc_added')}}
                </div>
            @endif
            <form action="{{route('message_associates.store')}}" id="msg-form" method="post">
                @csrf
                @method('post')
                <input type="text" name="subject" id="subject" placeholder="Subject">
                <!-- <textarea name="message" id="msg-body" cols="30" rows="10"></textarea> -->
                <img id="previewImg" alt="message image" style="max-width: 200px; margin-top:5px;">
                <div class="msg-btns">
                    <input type="file" class="form-control" id="img" name="file" onchange="previewFile(this)">
                    <button type="Add" class="btn" id="btn-send"><strong>Send</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>