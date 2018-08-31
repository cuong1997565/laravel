@extends('admin.layout.admin')
@section('content')
    <h3>Edit Roles</h3>
     <form action="{{route('role.update',$role->id)}}" method="post" role="form">
        {{method_field('PATCH')}}
        {{csrf_field()}}
          <div class="form-group">
              <label for="name">name</label>
               <input type="text" class="form-control" value="{{ $role->name }}" name="name" id="" placeholder="Name of role">
          </div>



          <div class="form-group">
              <label for="display_name">display name</label>
               <input type="text" class="form-control" value=" {{$role->display_name}} " name="display_name" id="" placeholder="display name of role">
          </div>

          <div class="form-group">
              <label for="description">description</label>
               <input type="text" class="form-control" value="{{ $role->description }}" name="description" id="" placeholder="description of role">
          </div>

          <div class="form-group text-left">
              <h3>Permissions</h3>
              @foreach ($permissions as $permission)
                    <div>
                        <input   type="checkbox" {{ in_array($permission->id, $role_permissions) ? "checked" :"" }}   name="permission[]" value="{{$permission->id}}"> {{$permission->name}}

                    </div>
              @endforeach
          </div>

           <button type="submit" class="btn btn-default">Submit</button>

    </form>
@endsection