@extends('admin/layout-admin/master')
@section('title')
Admin | Show User
@endsection

@section('contentTable')


    <main class="main">
        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a
                        class="btn btn-success"
                        href="{{route('add_user')}}"
                    >
                        Add New User
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                Table User
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            class="table table-bordered table-striped table-hover datatable datatable-ExpenseCategory"
                        >
                            <thead>
                                <tr>
                                    <th width="10"></th>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Roles</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userlist as $value)
                                        <tr>
                                        <td></td>
                                        <td>{{$index++}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->age}}</td>
                                        <td>{{$value->name_roles}}</td>
                                        <td>
                                            <a class="btn btn-xs btn-primary" href="{{route('view_user')}}?id={{$value->id}}">View</a>
                                            <a class="btn btn-xs btn-info"  href="{{route('admin.edituser')}}?id={{$value->id}}">Edit</a>
                                            @if($value->name_roles != 'customer')
                                            <input
                                                    type="submit"
                                                    class="btn btn-xs btn-danger"
                                                    value="Delete" onclick="deleted_user({{$value->id}})"
                                                />
                                                @else
                                                <input
                                                    type="submit"
                                                    class="btn btn-xs btn-danger"
                                                    value="Delete""
                                                />
                                                @endif
                                            </td>
                                    </tr>

                                @endforeach

                            </tbody>
                            
                        </table>
                        {!! $userlist->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>

    function deleted_user(id){
       
        if (confirm('Are you sure ?')) {
        
        $.post('{{ route('deletedUser') }}', {
			'_token': '{{ csrf_token() }}',
			'id': id,
			
		}, function() {
			alert('Deleted success')
            location.reload()
		})
    }
    }
</script>
@endsection