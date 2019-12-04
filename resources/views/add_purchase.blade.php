@section('header')
@parent
<link rel="stylesheet" href="{{ asset('css/add_purchase.css') }}" type="text/css">
@endsection
@extends('main_layout')
@section('title','Boutique')
@section('page_description','Add Purchases')

@section('dashboard_content')


<div class="container">

    <div class="card">
        <h3 class="text-info card-header text-center font-weight-bold text-uppercase py-4">Customer Receipt</h3>
        <div class="card-body">

            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus-circle fa-1.5x" aria-hidden="true"> Add New Item</i></a></span>

            <div id="table" class="table-editable">
                <form>
                    <!-- Table Starts here -->
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pt-3-half">
                                    <input list="products" name="browser" placeholder="Product Name">
                                    <datalist id="products">
                                        <option value="Lipstick">
                                        <option value="Lip Color">
                                        <option value="Bag">
                                        <option value="Dress">
                                    </datalist>
                                </td>
                                <td class="pt-3-half">
                                    <input type="text" placeholder="Product Code" name="prod_code">
                                </td>
                                <td class="pt-3-half">
                                    <input type="number" placeholder="Product Quantity" name="prod_quantity">
                                </td>
                                <td class="pt-3-half">
                                    <input type="text" placeholder="Product Size" name="prod_size">
                                </td>
                                <td>
                                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="bg-info rounded" style="width:100%;height:2px;border:none;color:#333;" size="30">
                    <br>

            </div>
            <div class="card-footer">
                <!-------Receipt Details and Print!--------->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group input-group-sm mb-3 half">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Paid Amount</span>
                            </div>
                            <input name="amount_paid" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Paid Amount">

                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="input-group input-group-sm mb-3 half">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Total Amount</span>
                            </div>
                            <input name="amount_total" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Total Amount">

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="input-group input-group-sm mb-3 half">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Return Amount</span>
                            </div>
                            <input name="amount_total" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Return Amount">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary btn-rounded btn-sm float-right">Print Receipt</button>
                    </div>

                </div>

                <!-------Receipt Details and Print!--------->
            </div>
        </div>
        <!--Card Ends Here-->
    </div>

    </form>
    <!-------TABLE ENDS HERE-------------->

</div>

@endsection

@section('scriptFiles')
@parent

<script type="text/javascript" src="{{ asset('js/add_purchase.js') }}"></script>
@endsection