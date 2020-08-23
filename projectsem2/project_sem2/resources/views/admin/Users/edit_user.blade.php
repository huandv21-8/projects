
  
@extends('admin/layout-admin/master')
@section('title')
Admin | Edit User
@endsection

@section('contentTable')

<main class="main">
            <div style="padding-top: 20px" class="container-fluid">
    <div class="card">
    <div class="card-header">
        Edit User
    </div>
    <div class="card-body">
        <form action="{{route('update_user')}}?id={{$userlist->id}}" method="POST" >
        {{ csrf_field()}}
            <!-- <input type="hidden" name="_token" value="ofVKHICoG9OLcLU6qle83Gmm9DttT3sjPYIOTSNb"> <input type="hidden" name="_method" value="PUT"> -->
                                  <div class="form-group ">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$userlist->name}}" required="">
                                <p class="helper-block">
                </p>
            </div>
            <div class="form-group ">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{$userlist->email}}" required="">
                                <p class="helper-block">
                </p>
            </div>
            <div class="form-group ">
                <label for="identity_cart">Identity Cart</label>
                <input type="text" id="identity_cart" name="identity_cart" value="{{$userlist->identity_cart}}" class="form-control" required>
                                <p class="helper-block">
                </p>
            </div>

            <div class="form-group ">
                <label for="gender">Gender</label>
                <input type="gender" id="gender" name="gender" value="{{$userlist->gender}}" class="form-control" required>
                                <p class="helper-block">
                </p>
            </div>

            <div class="form-group ">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="{{$userlist->password}}" class="form-control" required>
                                <p class="helper-block">
                </p>
            </div>
            <div class="form-group ">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{$userlist->phone}}" class="form-control" required>
                                <p class="helper-block">
                </p>
            </div>
            <div class="form-group ">
                <label for="roles">Roles*
                    <span class="btn btn-info btn-xs select-all">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                 <select name="roles[]" id="roles" class="form-control select2 select2-hidden-accessible" multiple="" required="" tabindex="-1" aria-hidden="true">
               
              

                    @if(isset($userlist->name_roles))
                            @foreach($rolesList as $value)
                                    @if($userlist->name_roles == $value->name_roles)
                                        <option value="{{$value->name_roles}}" name="roles" selected >{{$value->name_roles}}</option>
                                    @else
                                        <option value="{{$value->name_roles}}" name="roles">{{$value->name_roles}}</option>
                                    @endif
                                 
                            @endforeach
                     @else
                            @foreach($rolesList as $value)
                                  
                                        <option value="{{$value->name_roles}}" name="roles">{{$value->name_roles}}</option>
                                    
                                 
                            @endforeach
                    @endif
                
        </select>
                                    
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

