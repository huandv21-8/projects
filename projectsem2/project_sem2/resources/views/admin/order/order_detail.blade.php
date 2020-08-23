@extends('admin/layout-admin/master')
@section('title') 
Admin | Order Detail
@endsection
@section('contentTable')

    <main class="main">
        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <h5 style="color:#0390c1">Status :
                        <select id="status"
                            style="border:none;margin-left: 10px;background-color: #f0f3f5;color: #23282c;font-size: 15px;">
                            @if ($status->status == 'Pending')
                                <option value="Pending" selected="">Pending</option>
                                <option value="Success">Success</option>
                            @else
                                <option value="Success">Success</option>
                            @endif
                        </select>
                    </h5>

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
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Order_Day</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderList as $value)
                                    <tr>
                                        <td></td>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $value->name_product }}</td>
                                        <td>{{ $value->amount }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td>{{ $value->total_money }}</td>
                                        <td>{{ $value->created_at }}</td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>
                        <button style="margin-top: 20px;" class="btn btn-danger" onclick="SendStatus({{ $id_order }})">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function SendStatus(id_order) {
            var status = $('#status').val();

            $.post('{{ route('update_orderDetail') }}'
                , {
                    '_token': '{{ csrf_token() }}',
                    'status': status,
                    'id_order': id_order
                },
                function(data) {
                    alert(data)

                    window.location = "{{ route('admin_order') }}";
                })
        }

    </script>
@endsection
