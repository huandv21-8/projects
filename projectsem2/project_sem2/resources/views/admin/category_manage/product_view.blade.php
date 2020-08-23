@extends('admin/layout-admin/master')
@section('title')
    Admin | view product
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">

            <div class="card">
                <div class="card-header">
                    Show Expenses
                </div>

                <div class="card-body">
                    <div class="mb-2">
                        <table class="table table-bordered table-striped">
                            @php
                            $index=1;
                            @endphp
                            @foreach($view as $item)
                                <tbody>
                                    <tr>
                                        <th>ID_product</th>
                                        <td>{{ $index++ }}</td>
                                    </tr>
                                    <tr>
                                        <th>People add</th>
                                        <td>{{ $item->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name category</th>
                                        <td>{{ $item->name_category }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name Product</th>
                                        <td>{{ $item->name_product }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>${{number_format( $item->price )}}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity sold</th>
                                        <td>{{ $item->Inventory_sold }}</td>
                                    </tr>
                                    <tr>
                                        <th>Inventory number</th>
                                        <td>{{ $item->Inventory_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date add</th>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ route('productList') }}">
                            Back to list
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
