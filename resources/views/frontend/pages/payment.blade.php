@include('frontend.includes.links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@include('frontend.includes.header')


<div class="container pt-3">


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <h3 class="panel-title">User Details</h3>
                </div>
                <div class="panel-body">


                    <form id="#makePaymentForm" method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name</label> <input class='form-control' name="customer[name]" id="name" type='text' readonly required value="{{Auth::user()->fname}} {{Auth::user()->lname}}">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Email</label> <input class='form-control' name="customer[email]" id="email" type='text' readonly required value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Phone</label> <input class='form-control' name="customer[phone_number]" id="phone" type='tel' readonly required value="{{Auth::user()->phone}}">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Address</label> <input class='form-control' name="address" id="address" type='text' readonly required value="{{Auth::user()->address}}">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <input class='form-control' name="amount" id="amount" type='hidden' readonly required value="{{Auth::user()->amount}}">
                            </div>
                        </div>

                        <input type="hidden" name="public_key" value="FLWPUBK_TEST-510b97574e4d7120d8bc5348b3cddba5-X" />

                        <input type="hidden" name="tx_ref" value="HSMP_{{ substr(rand(0,time()),0,7) }}" />

                        <input type="hidden" name="redirect_url" value="https://f9aa-185-80-221-234.ngrok-free.app/verifyPayment/{{Auth::user()->id}}" />

                        <input type="hidden" name="currency" value="NGN" />

                        <input type="hidden" name="customizations[title]" value="So Fine Skin" />

                        <input type="hidden" name="customizations[description]" value="So Fine Skin Stores" />

                        <input type="hidden" name="customizations[logo]" value="https://html.kodesolution.com/2023/transpress-html/images/logo.png" />

                        <?php
$currentUrl = $_SERVER['REQUEST_URI'];
// echo $currentUrl;

// Parse the URL into components
$parsedUrl = parse_url($currentUrl);

// Extract the query string
$query = $parsedUrl['query'];

// Explode the query string by the '?' character
$queryParts = explode('?', $query);

// The number will be the second element of the exploded array
$number = $queryParts[0];

// echo $number; // Output: 62000
// print_r($queryParts);
?>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (&#x20A6;<?php echo $number?>)</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>



<br>

<script src="https://checkout.flutterwave.com/v3.js"></script>

<script>
    $(function() {
        $("#makePaymentForm").submit(function(e) {
            e.preventDefault();
            makePayment()
        });
    });


    function makePayment() {
        FlutterwaveCheckout({
            callback: function (data){
                console.log(data)
            }
        });
    }
</script>
@include('frontend.includes.footer')