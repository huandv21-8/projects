@extends('admin/layout-admin/master')
@section('title')
    Admin | Add Product
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Create Expense
                </div>
                <div class="card-body">
                    <form action="{{ route('edit_product2') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="id_product" style="display: none" value="{{$edit[0]->id_product}}">

                        <div class="form-group ">
                            <label for="expense_category">People add</label>
                            <input type="text" id="description" name="people_add" class="form-control"
                                value="{{ $name_people_add }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="expense_category">Category</label>
                            <select name="id_category" id="expense_category" class="form-control select2">
                                @foreach($category as $item)
                                    <option value="{{ $item->id_category }}">{{ $item->name_category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="entry_date">Name product *</label>
                        <input type="text" id="description" name="name_product" class="form-control" value="{{$edit[0]->name_product}}" required>
                        @error('name_product')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group ">
                            <label for="entry_date">Price *</label>
                            <input type="number" id="number" name="price" class="form-control" value="{{$edit[0]->price}}" required>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="entry_date">Describe *</label>
                            <input type="text" id="description" name="describe" class="form-control" value="{{$edit[0]->describe}}" required>
                            @error('describe')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="entry_date">Image *</label>
                            <input type="text" id="description" name="image" class="form-control" value="{{$edit[0]->image}}" required>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
