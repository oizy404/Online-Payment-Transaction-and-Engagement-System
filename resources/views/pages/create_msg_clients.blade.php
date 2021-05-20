<div class="create-msg">
    <div class="card">
        <div class="card-header" style="padding:8px">
            <h6>New Message</h6>
            <button id="btn-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="card-body" style="padding: 0px">
            <form action="{{route('message_clients.store')}}" id="msg-formm" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <input type="text" name="subject" id="subject" placeholder="Subject">
                <select name="mode_of_payment" id="mode_payment">
                    <option value=" ">Mode of Payment</option>
                    <option value="MANUAL">PAYING IN PHYSICAL BANK (MANUAL)</option>
                    <option value="EFPS">ELECTRONIC FILLING PAYMENT SYSTEM (EFPS)</option>
                </select>
                <div class="previewImg">
                    <img id="previewImg" alt="message image" style="max-width: 180px; margin-top:5px;">
                </div>
                <div class="msg-btns">
                    <input type="file" id="img" name="file" onchange="previewImg(this)">
                    <button type="Add" class="btn" id="btn-send"><strong>Send</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>