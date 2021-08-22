@extends("layouts.dashboard.master")

@section("content")
    <table class="table ">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام</th>
            <th>نقش</th>
        </tr>
        </thead>
        <tbody>
       @foreach($roles as $key=> $role)
           <tr>
               <td>{{$key+1}}</td>
               <td>{{auth()->user()->name}}</td>
               <td>{{$role->name}}</td>
               <td><a href=""><i class="fa fa-edit fa-2x"></i></a></td>
               <td>
                   <form action="" method="post">
                       @csrf
                       @method('delete')
                       <button class="btn"><i class="fa fa-remove fa-2x"></i></button>
                   </form>
               </td>

           </tr>
       @endforeach
        </tbody>
    </table>
@endsection