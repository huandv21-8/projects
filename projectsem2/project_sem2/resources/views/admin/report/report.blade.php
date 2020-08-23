@extends('admin/layout-admin/master')
@section('title')
    Admin | Monthly Report
@endsection

@section('contentTable')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            <div class="card">

                <div class="card-header">
                   <h3>Statistics from before to now </h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Number of orders</th>
                                   <td>{{$count_order}}</td>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Number of customers</th>
                                    <td>{{$count_customer}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Total revenue</th>
                                    <td>$ {{number_format($total)}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Search by month</h3>
                    <form action="{{ route('report') }}" method="get">
                        {{-- {{ csrf_field() }} --}}
                        <div class="row">
                            <div class="col-3 form-group">
                                <label class="control-label" for="y">Year</label>
                                <select name="y" id="y" class="form-control">
                                    @foreach(array_combine(range(date(" Y"),
                                        1900), range(date("Y"), 1900)) as $year)
                                        <option value="{{ $year }}" @if($year===old('y', Request::get('y', date('Y'))))
                                            selected @endif>
                                            {{ $year }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label class="control-label" for="m">Month</label>
                                <select name="m" for="m" class="form-control">
                                    @foreach(cal_info(0)['months'] as $month)
                                        <option value="{{ $month }}" @if($month===old('m', Request::get('m', date('m'))))
                                            selected @endif>
                                            {{ $month }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="control-label">&nbsp;</label><br>
                                <button class="btn btn-primary" type="submit">Report</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Monthly Report 
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Number of orders</th>
                                <td>{{$count_order_monthly}}</td>
                                </tr>
                           
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Number of customers</th>
                                <td>{{$count_customer_monthly}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Total revenue</th>
                                    <td>$ {{number_format($total_monthly)}}</td>
                                </tr>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.jquery-ui-timepicker-addon.min.js">
    </script>
   

@endsection
