<div class="create-associate">
    <div class="col-md-6 offset-md-3 mt-5 rounded" id="create-assoc" style="background-color: white;">
    <a href="#" id="btn-cancel" style="float:right; color: red;"><i class="fas fa-times-circle"></i></a>
    <h3 class="mb-5">CREATE YOUR ACCOUNT</h3>
        <form action="{{route('associates.store')}}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="fullname" class="form-label"><b>Fullname</b></label>
                <input type="text" class="form-control" name="fullname">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label"><b>Username</b></label>
                <input type="text" class="form-control" name="username">
            </div>
            <!-- <div class="mb-3">
                <label for="birthday"><b>Birthday</b></label>
                <input type="date" class="form-control mt-2" id="birthday" name="birthday">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label"><b>Address</b></label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <label for="contact_number" class="form-label"><b>Contact Number</b></label>
                <input type="number" class="form-control" name="contact_number">
            </div><br>
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control" name="email">
            </div><br> -->
            <div class="mb-3">
                <label for="password" class="form-label"><b>Set Your Password</b></label>
                <input type="password" class="form-control" name="password">
            </div><br>
            <button type="Add" class="btn" id="btn-create">Create</button>
        </form>
    </div>
</div>