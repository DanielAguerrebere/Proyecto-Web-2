<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Elements Test</title>
    <link rel="stylesheet" href="SECOND.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<script src="https://js.stripe.com/v3/"></script>

<div class="container">
    <h2 class="my-4 test-center">Payment Test cost [$20]</h2>
    <form action="/charge.php" method="post" id="payment-form">
        <div class="form-row">

            <input type="text" name="first_name" placeholder="First Name" class="form-control mb-3 StripeElement StripeElement--empty">
            <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-3 StripeElement StripeElement--empty">
            <input type="email" name="email" placeholder="Email" class="form-control mb-3 StripeElement StripeElement--empty">

            <div id="card-element" class="form-control">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button class="btn btn-primary btn-block mt-4">Submit Payment</button>


    </form>
</div>
<script src="THIRD.js"></script>
</body>
</html>