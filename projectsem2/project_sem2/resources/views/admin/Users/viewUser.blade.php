@extends('admin/layout-admin/master') 
@section('title')
 Admin | User Detail
@endsection @section('contentTable')

<main class="main">
    <div style="padding-top: 20px;" class="container-fluid">
        <div class="card">
            <div class="card-header">
                Show Users
            </div>

            <div class="card-body">
                <div class="mb-2">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>STT</th>
                                <td>{{$index}}</td>
                            </tr>
                            <tr>
                                <th>Name></th>

                                <td>{{$userlist->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>

                                <td>{{$userlist->email}}</td>
                            </tr>
                            <tr>
                                <th>Email verified at</th>

                                <td></td>
                            </tr>
                            <tr>
                                <th>Roles</th>

                                <td>
                                    <span class="label label-info label-many"
                                        >{{$userlist->name_roles}}</span
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a
                        style="margin-top: 20px;"
                        class="btn btn-default"
                        href="{{route('show_user')}}"
                    >
                        Back to list
                    </a>
                </div>

                <nav class="mb-3">
                    <div class="nav nav-tabs"></div>
                </nav>
                <div class="tab-content"></div>
            </div>
        </div>
    </div>
</main>
@endsection
