@extends('main_layout')
@section('title','Dashboard')
@section('page_description','Administrator Dashboard')

@section('dashboard_content')
<br>
<div class="container">

    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-family: Poppins, sans-serif;font-size:15px">
        <strong>Daily Sales and Customer Visit!</strong> Below data will change accordingly.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                    <br>
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">Today
                        Sales</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Rs</small>
                        2500
                    </h5>

                    <hr class="bg-success rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                    <br>
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">Today
                        Profit</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Rs</small>
                        1250
                    </h5>

                    <hr class="bg-primary rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-block">
                    <br>
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">Today
                        Customers</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Visited</small>
                        24
                    </h5>

                    <hr class="bg-warning rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
    </div>

    @endsection