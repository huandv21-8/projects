@extends('admin/layout-admin/master')
@section('title')
    Admin | category list
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('add_category') }}">
                        Add Category
                    </a>
                </div>
            </div>
            {{-- @if(count($mess)!=0)
                <div>
                    <p style="color: red">You cannot delete a category while products in that category exist</p>
                </div>
            @endif --}}
            <div class="card">
                <div class="card-header">
                    Table category
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable datatable-ExpenseCategory">
                            <thead>
                                <tr>
                                    <th width="10"></th>
                                    <th>ID</th>
                                    <th>Name category</th>
                                    <th>Date added</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $index =1 ;
                                @endphp
                                @foreach($categoryList as $value)
                                    <tr>
                                        <td></td>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $value->name_category }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            <a class="btn btn-xs btn-primary"
                                                href="{{ route('view_category') }}?id_category={{ $value->id_category }}&id_user={{ $value->id_user }}">View</a>
                                            <a class="btn btn-xs btn-info"
                                                href="{{ route('edit_category', $value->id_category) }}">Edit</a>
                                            <a class="btn btn-xs btn-danger"
                                                href="{{ route('delete_category', $value->id_category) }}">Delete</a>
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
