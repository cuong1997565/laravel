@extends('admin.layout.admin')
@section('content')
    <h3>Create Roles</h3>
    <form action=" {{ route('role.store') }}" method="post">
          {{ csrf_field() }}

          <div class="form-group">
              <label for="name">name</label>
               <input type="text" class="form-control" name="name" id="" placeholder="Name of role">
          </div>



          <div class="form-group">
              <label for="display_name">display name</label>
               <input type="text" class="form-control" name="display_name" id="" placeholder="display name of role">
          </div>

          <div class="form-group">
              <label for="description">description</label>
               <input type="text" class="form-control" name="description" id="" placeholder="description of role">
          </div>

          <div class="form-group text-left">
              <h3>Permissions</h3>
              @foreach ($permissions as $permission)
                    <div>
                        <input   type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}

                    </div>
              @endforeach
          </div>

           <button type="submit" class="btn btn-default">Submit</button>

    </form>
@endsection