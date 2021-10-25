<form action="/users/{{$user->id}}" method="post">
 {{csrf_field()}}
 @method('PUT')
 <input type="hidden" name="id" value="{{$user->id}}"></br>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" required="required" name="nim" value="{{$user->nim}}"></br>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
    </div>
    <div class="form-group">
        <label for="class">Class</label>
        <input type="text" class="form-control" required="required" name="class" value="{{$user->class}}"></br>
    </div>
    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" class="form-control" required="required" name="department" value="{{$user->department}}"></br>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" required="required" name="phone_number" value="{{$user->phone_number}}"></br>
    </div>
    <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
</form>