@extends('layouts.master')
@section('title','Payement')
@section('extra_meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('extra_script')
<script src="https://js.stripe.com/v3/"> </script>
@endsection
@section('content')
<div class="col-md-12">
    <p class="h1">Page de paiement</p>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('checkout.store') }}" method="POST" id="payment-form" class="mt-4">
                @csrf
                <div id="card-element">
                    <!-- Elements will create input elements here -->
                </div>

                <!-- We'll put the error messages in this element -->
                <div id="card-errors" role="alert"></div>

                <button id="submit" class="btn btn-success btn-block mt-3">Valider votre commande (
                    {{ getPrice(Cart::total()) }} )</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('extra_js')
<script>
    var stripe = Stripe(
        'pk_test_51GznZcIKVI2pPzJ0I6NRV9n8ohoc9IIvDVtz5rFKBKm2feQC1hZCaX6t5umGJR4io1IbsY0WRMKx2EYCbxE5B1zK00hRe');
    var elements = stripe.elements();
    // Set up Stripe.js and Elements to use in checkout form
    var style = {
        base: {
            color: "#32325d",
        }
    };

    var card = elements.create("card", {
        style: style
    });
    card.mount("#card-element");
    cardElement.on('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.classList.add('alert', 'alert-warning');
            displayError.textContent = event.error.message;
        } else {
            displayError.classList.remove('alert', 'alert-warning');
            displayError.textContent = '';
        }
    });
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function (ev) {
        ev.preventDefault();
        submitButton.disabled = true;
        stripe.confirmCardPayment({{ $clientSecret }}, {
            payment_method: {
                card: card
            }
        }).then(function (result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                submitButton.disabled = false;
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    var paymentIntent = result.paymentIntent;
                    var form = document.getElementById('payment-form');
                    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var url = form.action;
                    var redirect = '/thanks';

                    fetch(
                        url,{
                            headers:{
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN":token
                            }
                        },
                        method: 'post',
                        body: JSON.stringify({
                            paymentIntent:paymentIntent
                        }),
                    ).then((data) => {
                        console.log(data)
                        window.location.href=redirect;
                    }).catch((error)=> {
                        console.log(error)
                    })
                }
            }
        });
    });
</script>
@endsection
