@section('header')
@parent
<link rel="stylesheet" href="{{ asset('css/add_product.css') }}" type="text/css">
@endsection

@extends('main_layout')
@section('title','Boutique')
@section('page_description','Add Products')
@section('dashboard_content')


<div class="container border border-secondary rounded">

    <p style="text-align: center;margin-top: 2%;font-family:Arial, Helvetica, sans-serif;
                font-size: 1.5rem;" class="text-info">
        Enter Product Details Below</p>
    <br>

    <!----Product Details FORM BEGINS HERE-->
    <form class="form-signin">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputProd" type="text" name="prod_name" class="form-control" placeholder="Product Name" required autofocus>
                    <label class="text-muted" for="inputProd">Product Name</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputCode" type="text" class="form-control" placeholder="Product Code" required>
                    <label class="text-muted" for="inputCode">Product Code</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">

                <div class="form-label-group">
                    <input id="inputSize" type="text" class="form-control" placeholder="Product Size" required>
                    <label class="text-muted" for="inputSize">Product Size</label>
                </div>
            </div>
            <div class="col-sm-6">

                <div class="form-label-group">
                    <input id="inputQuantity" type="number" class="form-control" placeholder="Quantity" required>
                    <label class="text-muted" for="inputQuantity">Quantity</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputPurchase" type="number" class="form-control" placeholder="Purchase Price" required>
                    <label class="text-muted" for="inputPurchase">Purchase Price</label>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-label-group">
                    <input id="inputSale" type="number" class="form-control" placeholder="Sale Price" required>
                    <label class="text-muted" for="inputSale">Sale Price</label>
                </div>
            </div>
        </div>

        <div class="form-label-group">
            <input list="products" id="inputCat" type="text" class="form-control" placeholder="Product Category" required>
            <datalist id="products">
                <option value="Lipstick">
                <option value="Lip Color">
                <option value="Bag">
                <option value="Dress">
            </datalist>
            <label class="text-muted" for="inputCat">Product Category</label>
        </div>
        <div class="form-label-group">
            <input id="inputSup" type="text" class="form-control" placeholder="Supplier Name" required>
            <label class="text-muted" for="inputSup">Supplier Name</label>
        </div>
        <div class="form-label-group">
            <input id="inputSupNum" type="number" class="form-control" placeholder="Supplier Contact" required>
            <label class="text-muted" for="inputSupNum">Supplier Contact</label>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6">

                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="col-sm-6">

                <button class="btn btn-primary" type="submit">Add Product</button>
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