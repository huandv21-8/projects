@extends('admin/layout-admin/master')
@section('title')
Admin | Order
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
                        Show All Order
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
                                    <th>Name Customer</th>
                                    <th>Name Employee</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Order_Day</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orderList as $value)
                                        <tr>
                                        <td></td>
                                        <td>{{$index++}}</td>
                                        @foreach($userList as $user)
                                            @if($user->id == $value->id_customer)
                                            <td>{{$user->name}}</td>
                                            @endif
                                        @endforeach
                                        
                                    
                                        @if(isset($value->id_employee))
                                            @foreach($userList as $user)
                                                @if($user->id == $value->id_employee)
                                                    <td>{{$user->name}}</td>
                                                @endif
                                            @endforeach
                                        @else
                                            <td></td>
                                        @endif    
                                        <td>{{$value->total_money}}</td>
                                        <td>{{$value->status}}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td> <a class="btn btn-xs btn-info"  href="{{route('orderDetail')}}?id_order={{$value->id_order}}">Chi Tiet</a></td>
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