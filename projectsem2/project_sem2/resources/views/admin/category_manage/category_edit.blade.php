@extends('admin/layout-admin/master')
@section('title')
    Admin | Edit category
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Create Expense
                </div>
                <div class="card-body">
                    <form action="{{ route('edit_category2') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <input  style="display: none" name="id_category" type="text" value="{{$edit[0]->id_category}}">
                        <div class="form-group ">
                            <label for="expense_category">People edit</label>
                            <input type="text" id="description" name="people_add" class="form-control"
                                value="{{ $name_people_add }}" readonly>
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="description">Name category <a style="color: red">*</a></label>
                            <input type="text" id="description" name="name_category" class="form-control"
                                value="{{ $edit[0]->name_category }}" >
                                @error('name_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <p class="helper-block">
                            </p>
                        </div>
                        <div class="form-group ">
                            <label for="entry_date"> Date added</label>
                            <input type="text" id="entry_date" name="date_add" class="form-control date">
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
