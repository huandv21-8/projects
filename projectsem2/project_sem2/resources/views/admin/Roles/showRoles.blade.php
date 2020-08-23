@extends('admin/layout-admin/master')
@section('title')
 Admin | Table Roles
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('addRoles') }}">
                        Add New Roles
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Table User
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable datatable-ExpenseCategory">
                            <thead>
                                <tr>
                                    <th width="10"></th>
                                    <th>STT</th>
                                    <th>Name Roles</th>
                                    <th>Created_At</th>
                                    <th>Updated_At</th>

                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rolesList as $value)
                                    <tr>
                                        <td></td>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $value->name_roles }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>{{ $value->updated_at }}</td>

                                        <td>

                                            <a class="btn btn-xs btn-info"
                                                href="{{ route('update_Roles') }}?id={{ $value->id_roles }}">Update</a>
                                            <button id="deletedRoles" onclick="deleted_Roles({{ $value->id_roles }})"
                                                type="submit" class="btn btn-xs btn-danger" value="Delete">Deleted
                                            </button>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>
                        {!! $rolesList->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function deleted_Roles(id) {

            $.post('{{ route('deletedRoles') }}', {
                    '_token': '{{ csrf_token() }}',
                    id: id
                },
                function(data) {
                    location.reload()

                })

        }

    </script>
@endsection
