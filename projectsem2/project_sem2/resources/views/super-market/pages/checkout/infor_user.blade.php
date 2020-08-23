@extends('super-market.layouts.master')
@section('title')
   Supermarket | Information User
@endsection
@section('testcart')
    showCart()
@endsection
@section('hero')
    <section style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div style="position: relative;margin-top: 20px" class="col-12">
                    <div style="width: 50%" class="col-6">
                        <h3 class="mb-3">Thông Tin Cá Nhân</h3>
                        <form action="{{ route('updateInformation_user') }}" method="post">
                            @csrf <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><b>Name User</b></label>
                                            <input type="text" value="{{ $name_userlogin->name }}" name="name"
                                                class="form-control " style="height: 35px">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <hr class="my-4" style="border-top: 1px solid #868585;">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Thông tin liên lạc</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label><b>Email User</b></label>
                                            <input type="email" value="{{ $name_userlogin->email }}" name="email"
                                                class="form-control " >
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Address</b></label><b>
                                                <input type="address" value="{{ $name_userlogin->wards }}" name="address"
                                                    class="form-control " >
                                                    @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </b></div><b>
                                        </b>
                                    </div><b>
                                    </b>
                                </div><b>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Phone</b></label>
                                                <input type="text" value="{{ $name_userlogin->phone }}" name="phone"
                                                    class="form-control ">
                                                    @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </b>
                            </div><b>
                                <hr class="my-4" style="border-top: 1px solid #868585;">
                                <!-- Description -->
                                <button
                                    style="width: 100px;margin-left: 40%;padding: 7px;margin-bottom: 20px;font-size: 14px;"
                                    type="submit" class="btn btn-success btn-lg btn-block btn-sm">Gửi
                                </button>

                            </b>
                        </form>
                    </div><b>
                        <div style="position:absolute;right: 0; top: 0px; width: 47%;" class="col-6">
                            <h3 class="mb-3">Order</h3>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID_Order</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Create_at</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($orderList) > 0)
                                        @foreach($orderList as $value)
                                            <tr>
                                                <td>{{ $value->id_order }}</td>

                                                <td>{{ $value->total_money }}</td>
                                                <td>{{ $value->status }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                @if($value->status ==='Pending')
                    <td><button  type="button" onclick="deleted_order({{$value->id_order}})">X</button></td>
                    @endif
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </b>
                </div><b>
                </b>
            </div><b>
            </b>
        </div><b>
        </b>
    </section>
    <script>
    function deleted_order(id_order){

       


        $.post('{{ route('deleted_order') }}', {
			'_token': '{{ csrf_token() }}',
            'id_order': id_order
		}, function(data) {
            alert(data)
            location.reload()
			// window.location.reload();
            //  window.location="{{route('admin_order')}}";
		})
    }
   </script>
@endsection
