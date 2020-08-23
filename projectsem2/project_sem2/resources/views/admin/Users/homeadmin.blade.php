@extends('admin/layout-admin/master')
@section('title')
trang table users
@endsection
@section('contentTable')


<main class="main" style="
    background-color: #ecf0f5;">

        <div style="padding-top: 20px;" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <h1>Database</h1>

                </div>
            </div>
        </div>
            <div class="row" style="margin-left: 5px;border-bottom: 3px solid #3c8dbc;width:100%">

                <div class="col md-3" style="/* background-color: white; */">
                    <div class="info-box" style="
        display: block;
        min-height: 90px;
        background: #fff;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
        border-radius: 2px;
        margin-bottom: 15px;
    ">
                <span class="info-box-icon bg-green" style="
        border-top-left-radius: 2px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 2px;
        display: block;
        float: left;
        height: 90px;
        width: 90px;
        text-align: center;
        font-size: 45px;
        line-height: 90px;
        background: rgba(0,0,0,0.2);
    "><i class="fas fa-cart-plus"></i>
    </span>

                <div class="info-box-content" style="
        padding: 5px 10px;
        margin-left: 90px;
    ">
                  <span class="info-box-text" style="
        text-transform: uppercase;
        display: block;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    ">Order total</span>
                  <span class="info-box-number" style="
        display: block;
        font-weight: bold;
        font-size: 18px;
    ">{{$countOrder}}</span>
                  <a href="{{route('admin_order')}}" class="small-box-footer">
                      More&nbsp;
                      <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
                <!-- /.info-box-content -->
              </div>

                    </div>

                    <!-- test2 -->
                    <div class="col md-3" style="/* background-color: white; */">
                        <div class="info-box" style="
            display: block;
            min-height: 90px;
            background: #fff;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0,0,0,0.1);
            border-radius: 2px;
            margin-bottom: 15px;
        ">
                    <span class="info-box-icon bg-green" style="
            border-top-left-radius: 2px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 2px;
            display: block;
            float: left;
            height: 90px;
            width: 90px;
            text-align: center;
            font-size: 45px;
            line-height: 90px;
            background:#00c0ef !important;
        "><i class="fas fa-tags"></i>
        </span>

                    <div class="info-box-content" style="
            padding: 5px 10px;
            margin-left: 90px;
        ">
                      <span class="info-box-text" style="
            text-transform: uppercase;
            display: block;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        ">PRODUCT TOTAL</span>
                      <span class="info-box-number" style="
            display: block;
            font-weight: bold;
            font-size: 18px;
        ">{{$countProduct}}</span>
                      <a href="{{route('productList')}}" class="small-box-footer">
                          More&nbsp;
                          <i class="fa fa-arrow-circle-right"></i>
                      </a>
                    </div>
                    <!-- /.info-box-content -->
                  </div>

                        </div>
                        <div class="col md-3" style="/* background-color: white; */">
                            <div class="info-box" style="
                display: block;
                min-height: 90px;
                background: #fff;
                width: 100%;
                box-shadow: 0 1px 1px rgba(0,0,0,0.1);
                border-radius: 2px;
                margin-bottom: 15px;
            ">
                        <span class="info-box-icon bg-green" style="
                border-top-left-radius: 2px;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 2px;
                display: block;
                float: left;
                height: 90px;
                width: 90px;
                text-align: center;
                font-size: 45px;
                line-height: 90px;
                background:#f39c12 !important;
            "><i class="fas fa-users"></i>
            </span>
            <!-- test3 -->
                        <div class="info-box-content" style="
                padding: 5px 10px;
                margin-left: 90px;
            ">
                          <span class="info-box-text" style="
                text-transform: uppercase;
                display: block;
                font-size: 14px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            ">CUSTOMER TOTAL</span>
                          <span class="info-box-number" style="
                display: block;
                font-weight: bold;
                font-size: 18px;
            ">{{count($roles_user)}}</span>
                          <a href="" class="small-box-footer">
                              More&nbsp;
                              <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                        <!-- /.info-box-content -->
                      </div>

                            </div>
                                        <!-- test4 -->

                                        <div class="col md-3" style="/* background-color: white; */">
                                            <div class="info-box" style="
                                display: block;
                                min-height: 90px;
                                background: #fff;
                                width: 100%;
                                box-shadow: 0 1px 1px rgba(0,0,0,0.1);
                                border-radius: 2px;
                                margin-bottom: 15px;
                            ">
                                        <span class="info-box-icon bg-green" style="
                                border-top-left-radius: 2px;
                                border-top-right-radius: 0;
                                border-bottom-right-radius: 0;
                                border-bottom-left-radius: 2px;
                                display: block;
                                float: left;
                                height: 90px;
                                width: 90px;
                                text-align: center;
                                font-size: 45px;
                                line-height: 90px;
                                background: #dd4b39 !important;
                            "><i class="fa fa-list-alt" aria-hidden="true"></i>
                            </span>

                                        <div class="info-box-content" style="
                                padding: 5px 10px;
                                margin-left: 90px;
                            ">
                                          <span class="info-box-text" style="
                                text-transform: uppercase;
                                display: block;
                                font-size: 14px;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            ">CATEGORY</span>
                                          <span class="info-box-number" style="
                                display: block;
                                font-weight: bold;
                                font-size: 18px;
                            ">{{$countCategory}}</span>
                                          <a href="{{route('categoryList')}}" class="small-box-footer">
                                              More&nbsp;
                                              <i class="fa fa-arrow-circle-right"></i>
                                          </a>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>

                                            </div>

                </div>

        <!-- content2 -->
        <div class="row">
            <!-- top new order -->
            <div class="col md-6">
                                <div class="box box-info" style="
                        background-color: white;
                        margin-left: 20px;
                    ">
                                <div class="box-header with-border" style="
                        padding-top: 10px;
                        padding-left: 10px;
                    ">
                                <h3 class="box-title" style="
                        font-size: 18px;
                        display: inline-block;
                        line-height: 1;
                    ">New Orders</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($orderList as $order)
                    <tr>
                      <td><a href="">{{$order->id_order}}</a></td>
                        @foreach($userList as $user)
                            @if($user->id == $order->id_customer)
                              <td>{{$user->name}}</td>
                            @endif
                        @endforeach
                      
                      <td><span class="label label-success">{{$order->status}}</span></td>
                      <td>
                      {{$order->created_at}}
                      </td>
                    </tr>

                  @endforeach
                 

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div> -->
            <!-- /.box-footer -->
          </div>
      </div>
    <!-- end new order -->

    <!-- top new customer-->
    <div class="col md-6">
                                <div class="box box-info" style="
                        background-color: white;
                        margin-left: 20px;
                    ">
                                <div class="box-header with-border" style="
                        padding-top: 10px;
                        padding-left: 10px;
                    ">
                                <h3 class="box-title" style="
                        font-size: 18px;
                        display: inline-block;
                        line-height: 1;
                    ">Top New Customer</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>FullName</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($roles_user as $user)

                    <tr>
                      <td><a href="pages/examples/invoice.html">{{$index++}}</a></td>
                      <td>{{$user->email}}</td>
                      <td><span class="label label-success">{{$user->name}}</span></td>
                      <td>
                      {{$user->created_at}}
                      </td>
                    </tr>

                  @endforeach
                  

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
      </div>

<!-- end new customer -->
  </div>
            
            
          


    </main>

@endsection
