@extends('admin/layout-admin/master')
@section('title')
    Admin | view category
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
                            @foreach($view as $item)
                                <tbody>
                                    <tr>
                                        <th>ID_category</th>
                                        <td>{{ $item->id_category }}</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name Category
                                        </th>
                                        <td>
                                            {{ $item->name_category }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            People enter
                                        </th>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <th>
                                            Date Added
                                        </th>
                                        <td>
                                            {{$item->created_at}}

                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach

                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ route('categoryList') }}">
                            Back to list
                        </a>
                    </div>


                </div>
            </div>

        </div>


    </main>
@endsection
