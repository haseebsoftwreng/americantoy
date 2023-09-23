@extends('layout.front')
@section('styles')
<head>
    <title>Payment</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .display-table {
            display: table;
        }

        .display-tr {
            display: table-row;
        }

        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 50%;
            height: : 50%;
        }
    </style>
</head>
@endsection

@section('content')

<body>

    <div class="container">

        <br><br><br><br>

        <div class="row mt-5">
            <div class="col-md-8 col-md-offset-2 col-sm-offset-2 col-offset-0">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <div class="row display-tr">
                            <div class="col-8 mt-5">
                                <h3 class="panel-title display-td">Payment Details</h3>
                            <p class="pt-1 text-success">
                                <i class="fa fa-lock"></i>
                                3D Scure Payments
                            </p>
                            </div>
                            
                            <div class="display-td">
                                <img class="img-responsive pull-right" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYVa8qRkKzzKz4kl3KxPO4Bc808inIYn--kg&usqp=CAU">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif

                    <form role="form" action="{{route('front.stripePay')}}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ "pk_test_51IVZcBDoZl8DJ0XNnsZHxtUC0zcsnd57Nq28B4FEWnsRgyqlXZ0dlRyFB3spciC3SE9BpKc0kx5DO036uJYy0Kwd00redBLzU2" }}"
                            id="payment-form">
                            @csrf

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div>

                            <input type="text" name="amount" value="{{$amount}}" hidden>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button style="background-color: #8c63c0 ; color: whitesmoke" class="btn btn-lg btn-block" type="submit">
                                         Pay Now ({{Session::get('cart')['amount']}} $ ) 
                                    </button>
                                </div>
                            </div>

                        </form>
                       
                            <img class="mt-5" src="{{asset('front/images/checkout.png')}}" width="100%" alt="">
                        
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

</body>
@endsection
@section('scripts')
    

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.append("<input type='hidden' name='order_id' value='{{$order->id}}'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>
@endsection
