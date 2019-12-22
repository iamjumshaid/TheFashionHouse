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
            <div class="card" >

                <div class="card-block" style="background: rgba(76, 175, 80, 0.3)">
                    
                    <br>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Botique</small>

                    </h5>
                    
                    <hr style="border:0.5px dotted;width:80%">
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                        Today's Sales</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;">
                        <small style="font-family: Poppins, sans-serif;">Rs. 2500</small>
                        <hr style="border:0.5px dotted;width:80%">
                        <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                            Today's Profit</p>
                        <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                            <small style="font-family: Poppins, sans-serif;">Rs. 10000</small>
                            <hr style="border:0.5px dotted;width:80%">
                            <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                                Today's Customer Visited</p>
                            <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                                <small style="font-family: Poppins, sans-serif;">250</small>
                                <hr >


                                <hr class="bg-success rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
        
            <div class="card">
                <div class="card-block" style="background: rgba(0,0,255,0.2)">
    
                    <br>
                   
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Gym</small>

                    </h5>
                    <hr style="border:0.5px dotted;width:80%">
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                        Monthly Collection</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;">Rs. 50000</small>
                        <hr style="border:0.5px dotted;width:80%">
                        <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                            Total members</p>
                        <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                            <small style="font-family: Poppins, sans-serif;">150</small>
                            <hr style="border:0.5px dotted;width:80%">
                            <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                                Today's New Members</p>
                            <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                                <small style="font-family: Poppins, sans-serif;">250</small>
                                <hr>
                                <hr class="bg-primary rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            
            <div class="card">
                <div class="card-block"style="background: rgba(255,255,0,0.3)">
                    <br>

                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;font-weight: bold;">Parlour</small>

                    </h5>
                    <hr style="border:0.5px dotted;width:80%">
                    <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                        Today's Appointment</p>
                    <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                        <small style="font-family: Poppins, sans-serif;">105</small>
                        <hr style="border:0.5px dotted;width:80%">
                        <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                            Today's Earning </p>
                        <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                            <small style="font-family: Poppins, sans-serif;">Rs. 25000</small>
                            <hr style="border:0.5px dotted;width:80%">
                            <p class="text-muted text-center" style="font-size:15px;font-family: Poppins, sans-serif;font-weight: bold;">
                                Monthly Earning</p>
                            <h5 class="text-center" style="font-family: Poppins, sans-serif;font-weight: bold;">
                                <small style="font-family: Poppins, sans-serif;">Rs. 80000</small>
                                <hr>
                                <hr class="bg-warning rounded" style="width:90%;height:4px;border:none;color:#333;background-color:#333;" size="30">

                </div>
            </div>
        </div>
    </div>

    @endsection