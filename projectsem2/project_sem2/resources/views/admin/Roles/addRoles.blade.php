@extends('admin/layout-admin/master')
@section('title')
Admin | Add New Roles
@endsection

@section('contentTable')

<main class="main">
            <div style="padding-top: 20px" class="container-fluid">
    <div class="card">
    <div class="card-header">
        Add User
    </div>
    <div class="card-body">
    
        <form action="{{route('insertRoles')}}" method="POST" >
        {{ csrf_field()}}
            <!-- <input type="hidden" name="_token" value="ofVKHICoG9OLcLU6qle83Gmm9DttT3sjPYIOTSNb"> <input type="hidden" name="_method" value="PUT"> -->
                                  <div class="form-group ">
                <label for="name_roles">Name*</label>
                <input type="text" id="name_roles" name="name_roles" class="form-control"  required="">
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