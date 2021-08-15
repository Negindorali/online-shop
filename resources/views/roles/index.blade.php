@extends("layouts.app")

@section("content")
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>manage</th>
        </tr>
        </thead>
        <tbody>
       @foreach($roles as $key=> $role)
           <tr>
               <td>{{$key+1}}</td>
               <td>{{$role->name}}</td>
               <td>
                   <a href="{{route("role.edit",$role->id)}}" class="btn btn-warning rounded-circle">E</a>
               </td>
           </tr>
       @endforeach
        </tbody>
    </table>
@endsection