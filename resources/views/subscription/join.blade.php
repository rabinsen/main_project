@extends('layouts.master3')

@section('content')
    <form action="{{ route('subscription-join1') }}" method="post" id="subscription-form">
        <div class="container">
            <div class="well-fluid">
                <div class="col-lg-6 myTops myLeft">
                    <div class="form-group">
                        <label><h2>Choose Plan:</h2>

                            <select name="plan" class="form-control">
                                <option value="Small">Small (Rs.1000/month)</option>
                                <option value="large">Large (Rs.2000/month)</option>
                            </select>

                        </label>
                    </div>
                </div>
                {{--<hr style="  border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc)">--}}
                <div class="col-lg-6 myTop myLeft form-group">

                    @include('subscription.partials.card')
                    <button class="btn btn-success">Make Payment</button>

                </div>
            </div>
        </div>

        {!! Form::token() !!}
    </form>
@endsection

@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script>
@endsection