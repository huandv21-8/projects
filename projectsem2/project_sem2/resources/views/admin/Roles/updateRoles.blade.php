@extends('admin/layout-admin/master')
@section('title')
Admin | Update Roles
@endsection

@section('contentTable')
<main class="main">
            <div style="padding-top: 20px" class="container-fluid">
    <div class="card">
    <div class="card-header">
       Update Roles
    </div>
    <div class="card-body">
        <form action="{{route('receive_update')}}?id={{$rolesList->id_roles}}" method="POST" >
        {{ csrf_field()}}
            <!-- <input type="hidden" name="_token" value="ofVKHICoG9OLcLU6qle83Gmm9DttT3sjPYIOTSNb"> <input type="hidden" name="_method" value="PUT"> -->
                                  <div class="form-group ">
                <label for="nameRoles">Name Roles</label>
                <input type="text" id="nameRoles" name="nameRoles" class="form-control" value="{{$rolesList->name_roles}}" required="">
                                <p class="helper-block">
                </p>
            </div>
           

            <div class="form-group ">
                <label for="createdAt">Created_at</label>
                <input type="text" id="createdAt" name="createdAt" value="{{$rolesList->created_at}}" class="form-control">
                                <p class="helper-block">
                </p>
            </div>

           
            
            <div>
            <input class="btn btn-danger" type="submit" value="Save" style="margin-top: 10px;">
            </div>
        </form>
    </div>
</div>
            </div>
        </main>

@endsection