@section('header')
@parent
<link rel="stylesheet" href="{{ asset('css/add_member.css') }}" type="text/css">
@endsection

@extends('main_layout')
@section('title','Gym')
@section('page_description','Add Gym Member')
@section('dashboard_content')


<div class="container border border-secondary rounded">

    <p style="text-align: center;margin-top: 2%;font-family:Arial, Helvetica, sans-serif;
                font-size: 1.5rem;" class="text-info">
        Enter Member's Information Below</p>
    <br>

    <!----Product Details FORM BEGINS HERE-->
    <form class="form-signin">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputName" type="text" name="member_name" class="form-control" placeholder="Member Name" required autofocus>
                    <label class="text-muted" for="inputName">Member Name</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputContact" type="number" class="form-control" placeholder="Member Contact" required>
                    <label class="text-muted" for="inputContact">Member Contact</label>
                </div>
            </div>
        </div>
       
        
        <div class="form-label-group">
            <textarea  id="inputAddress" class="form-control" placeholder="Address" required> </textarea>
            
            <label class="text-muted" for="inputAddress">Address</label>
        </div>
        <div class="form-label-group">
            <input id="inputJoin" type="date" class="form-control" placeholder="Joining Date" required>
            <label class="text-muted" for="inputJoin">Joining Date</label>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6">

                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="col-sm-6">

                <button class="btn btn-primary" type="submit">Add Member</button>
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