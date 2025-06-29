<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Stripe Payment Gateway Integration Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        #card-element{
            height: 50px;
            padding-top: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <h3 class="card-header p-3">Laravel 11 Stripe Payment Gateway Integration Example - ItSolutionStuff.com</h3>
                <div class="card-body">

                    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e($value); ?>

                        </div>
                    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

                    <form id='checkout-form' method='post' action="<?php echo e(route('stripe.post')); ?>">
                        <?php echo csrf_field(); ?>

                        <strong>Name:</strong>
                        <input type="input" class="form-control" name="name" placeholder="Enter Name">

                        <input type='hidden' name='stripeToken' id='stripe-token-id'>
                        <br>
                        <div id="card-element" class="form-control" ></div>
                        <button
                            id='pay-btn'
                            class="btn btn-success mt-3"
                            type="button"
                            style="margin-top: 20px; width: 100%;padding: 7px;"
                            onclick="createToken()">PAY $10
                        </button>
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">

    var stripe = Stripe('<?php echo e(env('pk_test_51PgBehRtaeFELu9CvUSiWSPKIWhjLzRSujggvfkLsXpkHE0bTVNoaYusZVAa9QdTbDB2BDDLaqibcL9jheYyaHji00xtI4rOWR')); ?>')
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    /*------------------------------------------
    --------------------------------------------
    Create Token Code
    --------------------------------------------
    --------------------------------------------*/
    function createToken() {
        document.getElementById("pay-btn").disabled = true;
        stripe.createToken(cardElement).then(function(result) {

            if(typeof result.error != 'undefined') {
                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message);
            }

            /* creating token success */
            if(typeof result.token != 'undefined') {
                document.getElementById("stripe-token-id").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }
</script>

</html>
<?php /**PATH C:\xampp\htdocs\church\resources\views/admin/stripe.blade.php ENDPATH**/ ?>