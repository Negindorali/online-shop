@extends("layouts.app")

@section("content")
    <div class="card mx-auto col-md-8">
        <div class="card-body">
            <form action="{{route("role.update",$role->id)}}" method="post">
                @csrf
                @method("put")
                <div class="form-group">
                    <label for="{{\App\Models\Role::NAME}}">Name</label>
                    <input type="text" name="{{\App\Models\Role::NAME}}" id="{{\App\Models\Role::NAME}}" value="{{$role->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="{{\App\Models\Role::SCOPE}}">Name</label>
                    <textarea type="text" name="{{\App\Models\Role::SCOPE}}" id="{{\App\Models\Role::SCOPE}}" value="{{$role->name}}" class="form-control">{{$role->scope}}</textarea>
                </div>

                <button class="btn btn-success rounded">Save</button>
            </form>
        </div>
    </div>
@endsection