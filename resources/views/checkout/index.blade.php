@extends('layouts.master')
@section('title','Payement')
@section('extra_script')
<script src="https://js.stripe.com/v3/"> </script>
@endsection
@section('content')
<div class="col-md-12">
    <p class="h1">Page de paiement</p>
    <div class="row">
        <div class="col-md-6">
            <form id="payment-form" class="mt-4">
                <div id="card-element">
                    <!-- Elements will create input elements here -->
                </div>

                <!-- We'll put the error messages in this element -->
                <div id="card-errors" role="alert"></div>

                <button id="submit" class="btn btn-success btn-block mt-3">Pay</button>
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
        stripe.confirmCardPayment({{ $clientSecret }}, {
            payment_method: {
                card: card
            }
        }).then(function (result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    // Show a success message to your customer
                    // There's a risk of the customer closing the window before callback
                    // execution. Set up a webhook or plugin to listen for the
                    // payment_intent.succeeded event that handles any business critical
                    // post-payment actions.
                    console.log(result.paymentIntent);
                }
            }
        });
    });
</script>
@endsection
