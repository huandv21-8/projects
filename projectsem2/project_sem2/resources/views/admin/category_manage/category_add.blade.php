@extends('admin/layout-admin/master')
@section('title')
    Admin | Add category
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Create Expense
                </div>
                <div class="card-body">
                    <form action="{{ route('add_category2') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group ">
                            <label for="expense_category">People add</label>
                            <input type="text" id="description" name="people_add" class="form-control"
                                value="{{ $name_people_add }}" readonly>
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="description">Name category*</label>
                            <input type="text" id="description" name="name_category" class="form-control" value="">
                            @error('name_category')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="entry_date"> Date added*</label>
                            <input type="text" id="entry_date" name="date_add" class="form-control date" value="" required>
                            @error('date_add')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
