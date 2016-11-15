@extends('layouts.master5')
{{--@if(Session::has('properties'))--}}
@section('content')
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">PROPERTIES</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@if(Session::has('compare'))
    <div class="row myTop">
        <div class="col-sm-12 col-md-12">

                <div class="well" style="margin-top: 30px">
                    <h2 class="text-center">Compare results</h2>


                {{--@foreach($property as $properti)--}}
                    {{--<table class ="col-lg-3">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>--}}
                                {{--Attribute--}}
                            {{--</th>--}}

                            {{--<th>--}}
                                {{--Value--}}
                            {{--</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                    {{--<tr>--}}
                        {{--<td>Title</td>--}}
                        {{--<td>--}}
                           {{--{{$properti['item']['title']}}--}}
                        {{--</td>--}}

                    {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>Price</td>--}}
                            {{--<td>--}}
                                {{--{{$properti['item']['price']}}--}}
                            {{--</td>--}}

                        {{--</tr>--}}


                {{--@endforeach--}}
                {{--</table>--}}

                <table class="table table-reflow" style="margin-top: 40px;">
                    <thead style=" border: 1px solid black;">
                    <tr style=" border: 1px solid black;">

                        <th style=" height: 50px; width: 150px;">Title</th>
                        <th style=" height: 50px; width: 150px;">Price</th>
                        <th style=" height: 50px; width: 150px;">Type</th>
                        <th style=" height: 50px; width: 150px;">Status</th>
                        <th style=" height: 50px; width: 150px;">Ready to move</th>
                        <th style=" height: 50px; width: 150px;">Land Area</th>
                        <th style=" height: 50px; width: 150px;">House Area</th>
                        <th style=" height: 50px; width: 150px;">Plotted</th>
                        <th style=" height: 50px; width: 150px;">Storey</th>
                        <th style=" height: 50px; width: 150px;">Bedroom</th>

                        <th style=" height: 50px; width: 150px;">Bathroom</th>
                        <th style=" height: 50px; width: 150px;">Kitchen</th>
                        <th style=" height: 50px; width: 150px;">Road Distance</th>


                    </tr>
                    </thead>
                    <tbody class="table table-bordered">
                    @foreach($property as $properti)
                    <tr style=" border: 1px solid black;">

                        <td style=" height: 50px; width: 150px;"> {{$properti['item']['title']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['price']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['type']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['status']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['readyToMove']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['landArea']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['houseArea']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['plotted']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['storey']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['bedroom']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['bathroom']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['kitchen']}}</td>
                        <td style=" height: 50px; width: 150px;">{{$properti['item']['roadDistance']}}</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                    <a href="{{ route('removeSession') }}"><button class="btn btn-danger text">Done</button></a>
            {{--</ul>--}}
                 </div>

        </div>
    </div>
@endif

    @endsection