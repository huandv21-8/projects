@extends('admin/layout-admin/master')
@section('title')
    Admin | Product list
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('add_product') }}">
                        Add product
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Table product
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable datatable-ExpenseCategory">
                            <thead>
                                <tr>
                                    <th width="10"></th>
                                    <th>ID</th>
                                    <th>Image product</th>
                                    <th>Name product</th>
                                    <th>Price product</th>
                                    <th>Date added</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $index = 1;
                                @endphp
                                @foreach($productList as $value)
                                    <tr>
                                        <td></td>
                                        <td>{{ $index++ }}</td>
                                        <td> <img style="width:40px" src="{{ $value->image }}" alt="">
                                        </td>
                                        <td>{{ $value->name_product }}</td>
                                        <td>${{number_format( $value->price )}}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            <a class="btn btn-xs btn-primary"
                                            href="{{ route('view_product') }}?id_product={{$value->id_product}}&id_category={{ $value->id_category }}&id_user={{$value->id_user}}"
                                            >View</a>
                                        <a class="btn btn-xs btn-info"
                                        href="{{ route('edit_product') }}?id_category={{ $value->id_category }}&id_product={{ $value->id_product }}" >
                                                Edit</a>
                                            <a  class="btn btn-xs btn-danger" href="{{ route('delete_product') }}?id_product={{$value->id_product}}">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
