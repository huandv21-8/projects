@extends('admin/layout-admin/master')
@section('title')
    Admin | Create User
@endsection

@section('contentTable')

    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Add User
                </div>
                <div class="card-body">

                    <form action="{{ route('insertUser') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group ">
                            <label for="name">Name*</label>
                            <input type="text" id="name" name="name" class="form-control">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="age">Age*</label>
                            <input type="text" id="age" name="age" class="form-control">
                            @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" class="form-control">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="identity_cart">Identity Cart</label>
                            <input type="text" id="identity_cart" name="identity_cart" class="form-control">
                            @error('identity_cart')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>

                        <div class="form-group ">
                            <label for="gender">Gender</label>
                            <!-- <input type="gender" id="gender" name="gender"  class="form-control"> -->
                            <select id="gender" name="gender" class="form-control">
                                <option value="Male" name="gender">Male</option>
                                <option value="Female" name="gender">Female</option>

                            </select>
                            <p class="helper-block">
                            </p>
                        </div>

                        <div class="form-group ">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>

                        <div class="form-group ">
                            <label for="wards">Wards</label>
                            <input type="text" id="wards" name="wards" class="form-control">
                            @error('wards')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="district">District</label>
                            <input type="text" id="district" name="district" class="form-control">
                            @error('district')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" class="form-control">
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="roles">Roles</label>
                            <!-- <input type="gender" id="gender" name="gender"  class="form-control"> -->
                            <select id="roles" name="roles" class="form-control">
                                <!-- <option value="Male" name="gender">Male</option>
                      <option value="Female" name="gender">Female</option> -->
                                @foreach ($rolesList as $value)

                                    <option value="{{ $value->name_roles }}" name="roles">{{ $value->name_roles }}</option>

                                @endforeach

                            </select>
                            <p class="helper-block">
                            </p>
                        </div>
                        <input class="btn btn-danger" type="submit" value="Save" style="margin-top: 10px;">
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>
@endsection
