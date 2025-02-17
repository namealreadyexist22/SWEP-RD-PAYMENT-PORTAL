@extends('layouts.admin-master')


@section('content')

    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pay</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card-title">
                                <h4> Payment</h4>
                                <form id="order_of_payment_form">
                                    <br>
                                    @csrf
                                    <div class="form-group">
                                        <label>Transaction type:</label>
                                        <select class="form-control form-control-lg" name="transaction_code" id="transaction_type">
                                            <option disabled="" selected>Select</option>
                                            @if(count($transaction_types)> 0)
                                                @foreach($transaction_types as $key => $group)
                                                    <optgroup label="{{$key}}">
                                                        @foreach($group as $key2 => $trasaction_type)
                                                            <option value="{{$key2}}" type="{{$trasaction_type['type']}}" amount="{{$trasaction_type['amount']}}">{{$trasaction_type['transaction_type']}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label>Volume (Lkg/tc)</label>--}}
{{--                                        <input type="number" class="form-control form-control-lg" placeholder="Lkg/tc" name="volume"> x multiplier--}}
{{--                                    </div>--}}
                                    <div id="amount_container" style="display: none" class="dynamics">
                                        <div class="form-group">
                                            <label>Amount: </label>
                                            <input type="text" id="amount" name="amount" class="form-control form-control-lg" placeholder="00.00" autocomplete="off">
                                        </div>
                                    </div>

                                    <div id="volume_container" style="display: none" class="dynamics">
                                        <div class="form-group">
                                            <label>Volume (Lkg/tc)</label>
                                            <input type="number" class="form-control form-control-lg" placeholder="Lkg/tc" name="volume">
                                        </div>

                                        <div class="form-group">
                                            <label>Amount: </label>
                                            <input type="text" id="volume_amount" class="form-control form-control-lg" value="0.00" readonly>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-caret-right"></i> Proceed</button>
                                </form>

                                <div class="text-center">
                                    <br><br>
                                    <img src="{{asset('images/payment_methods/i_access.png')}}" width="200">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Instructions:</h4>

                        @include('dashboard.includes.instructions')

                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')

@endsection

@section('scripts')
    <script type="text/javascript">
        autonum_settings = {
            currencySymbol : ' ₱',
            decimalCharacter : '.',
            digitGroupSeparator : ',',
        };


        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                    callback.apply(context, args);
                },500);
            };
        }

        $('input[name="volume"]').keyup(delay(function (e) {
            lgktc = $(this).val();
            $.ajax({
                url: '{{route('dashboard.get_settings')}}?lkgtc_multiplier='+lgktc,
                type: 'GET',
                success: function(res){
                    $("#amount").val(res.amount);
                },
                error:function (res) {
                    console.log(res);
                }

            })
        }, 500));

        new AutoNumeric("#amount",autonum_settings);

        $("#transaction_type").change(function(){
            var t = $(this);
            var option = $("#transaction_type option[value='"+t.val()+"']");
            var type = option.attr('type');
            var amount = option.attr('amount');
            $(".dynamics input").each(function () {
                $(this).val('');
            })
            $(".dynamics").each(function(){
                $(this).slideUp();
            })


            if(type == 'volume'){
                $("#volume_container").slideDown();
            }if(type == 'user'){
                $("#amount_container").slideDown();
            }
        })

        $("#volume_container input[name='volume']").keyup(function () {
            var t = $("#transaction_type");
            var option = $("#transaction_type option[value='"+t.val()+"']");
            $("#volume_amount").val($(this).val()*option.attr('amount'));
            new AutoNumeric("#volume_amount",autonum_settings);
        })

        $("#order_of_payment_form").submit(function(e){
            e.preventDefault();
            form = $(this);
            formData = form.serialize();
            loading_btn(form);


            $.ajax({
                url : "{{route('dashboard.payments.validate_form')}}",
                data: formData,
                type: 'POST',
                success: function (res) {

                    $('.content-wrapper').html(res);

                },
                error: function (res) {
                    console.log(res);
                    errored(form,res);
                }
            })
        })



    </script>
@endsection