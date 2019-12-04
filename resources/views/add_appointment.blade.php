@section('header')
@parent
<link rel="stylesheet" href="{{ asset('css/add_appointment.css') }}" type="text/css">
@endsection

@extends('main_layout')
@section('title','Parlor')
@section('page_description','Add Appointment')
@section('dashboard_content')


<div class="container border border-secondary rounded">

    <p style="text-align: center;margin-top: 2%;font-family:Arial, Helvetica, sans-serif;
                font-size: 1.5rem;" class="text-info">
        Enter Booking Details Below</p>
    <br>

    <!----Product Details FORM BEGINS HERE-->
    <form class="form-signin">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-label-group">
                    <input id="inputName" type="text" name="cust_name" class="form-control" placeholder="Customer Name" required autofocus>
                    <label class="text-muted" for="inputName">Customer Name</label>
                </div>
            </div>

        </div>
        <div class="form-label-group">
            <input id="inputService" type="text" class="form-control" placeholder="Services" required>

            <label class="text-muted" for="inputService">Services</label>
        </div>
        <div class="row">
            <div class="col-sm-6">

                <div class="form-label-group">
                    <input id="inputContact" type="number" class="form-control" placeholder="Contact Number" required>
                    <label class="text-muted" for="inputContact">Contact Number</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputPaid" type="number" class="form-control" placeholder="Amount Paid" required>
                    <label class="text-muted" for="inputPaid">Amount Paid</label>
                </div>

            </div>
        </div>

        <div class="form-label-group">
            <input id="inputTime" type="time" class="form-control" placeholder="Timing" required>
            <label class="text-muted" for="inputTime">Timings</label>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6">

                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="col-sm-6">

                <button class="btn btn-primary" type="submit">Add Booking</button>
            </div>
        </div>


    </form>
    <!-------------------------END HERE--------------------------------------------->

    <br>
</div>

@endsection

@section('scriptFiles')
@parent

@endsection