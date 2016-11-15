@extends('layouts.master4')

@section('content')

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Properties Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">APPARTMENT TITLE</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="w3-content w3-display-container">

                                <img class="mySlides" src="{{ url('/images/'.$details->images->thumbnail) }}"
                                     style="width:100%">
                                <img class="mySlides" src="{{ url('/images/'.$details->images->slide1) }}"
                                     style="width:100%">
                                <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
                                <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                            </div>

                            <div class="aa-properties-info well">
                                <h2>Title: {{ $details->title }}</h2>

                                <div class="rating myTopsss">
                                    @if( $avgReview == 0 )
                                        <img style="width: 150px; height: 30px;" src="{{ url('/stars/no_star.png') }}">
                                    @endif
                                    @if( $avgReview == 1 )
                                        <img style="width: 150px; height: 30px;" src="{{ url('/stars/one_star.png') }}">
                                    @endif
                                    @if( $avgReview == 2 )
                                        <img style="width: 150px; height: 30px;" src="{{ url('/stars/two_star.png') }}">
                                    @endif
                                    @if( $avgReview == 3 )
                                        <img style="width: 150px; height: 30px;"
                                             src="{{ url('/stars/three_star.png') }}">
                                    @endif
                                    @if( $avgReview == 4 )
                                        <img style="width: 150px; height: 30px;"
                                             src="{{ url('/stars/four_star.png') }}">
                                    @endif
                                    @if( $avgReview == 5 )
                                        <img style="width: 150px; height: 30px;"
                                             src="{{ url('/stars/five_star.png') }}">
                                    @endif
                                </div>
                                <br>
                                <br>

                                <h3><strong>Description: </strong>{{ $details->description }}</h3>

                                <h2><i class="fa fa-inr"
                                       style="font-size:28px;color:dodgerblue"></i> {{ $details->price }}</h2>
                                <h5 class="text-right">Uploaded by: {{ $details->user->name }}</h5>

                                <hr style=" height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

                                <h2><u>Address</u></h2>

                                <h3 style="text-transform: capitalize">{{$details->address}}, {{ $details->city }}
                                    , {{$details->country}}</h3>

                                <hr style=" height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

                                <h4>Propery Features</h4>
                                <ul>
                                    <li>{{ $details->bedroom }} Bedroom</li>
                                    <li>{{ $details->bathroom }} Baths</li>
                                    <li>{{ $details->kitchen }} Kitchen</li>
                                    <li>{{ $details->landArea }} sq. feet Land Area</li>
                                    <li>{{ $details->houseArea }} sq. feet House Area</li>
                                    <li>{{ $details->plotted }} plotted</li>
                                    <li>{{ $details->storey }} storey</li>
                                    <li>{{ $details->roadDistance }} meter from Road</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row new-post">
                        <div class="col-md-12 col-md-offset-0">

                            {{--<header><h3>Reviews</h3></header>--}}

                            @foreach( $details->reviews as $review )
                                <div>
                                    <div class="rating">
                                        @if( $review->rating === 0 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/no_star.png') }}">
                                        @endif
                                        @if( $review->rating === 1 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/one_star.png') }}">
                                        @endif
                                        @if( $review->rating === 2 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/two_star.png') }}">
                                        @endif
                                        @if( $review->rating === 3 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/three_star.png') }}">
                                        @endif
                                        @if( $review->rating === 4 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/four_star.png') }}">
                                        @endif
                                        @if( $review->rating === 5 )
                                            <img style="width: 105px; height: 20px;"
                                                 src="{{ url('/stars/five_star.png') }}">
                                        @endif
                                    </div>
                                    <br>
                                    <br>

                                    <div><p>{{ $review->comments }}</p></div>

                                    <ul>
                                        <li>
                                            <span><i class="glyphical glyphicon-calender"></i> {{ $review->created_at->format('F d, Y h:ia') }}</span>
                                        </li>
                                    </ul>

                                    <p class="text-right" style="color: blue">Reviewed By {{ $review->user->name }}</p>
                                </div>
                                <hr style="  border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc">
                            @endforeach
                            {{--<hr style=" height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">--}}
                        </div>
                    </div>


                    <div>
                        @if( \Illuminate\Support\Facades\Auth::user() )
                            @if($details->user_id != Auth::id())
                                <section class="row new-post">
                                    <div class="col-md-12 col-md-offset-0">
                                        <header><h3>Write Review</h3></header>
                                        <form action="{{ route('review') }}" method="post">
                                            <div>
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5"/><label
                                                            class="full" for="star5" title="Awesome - 5 stars"></label>
                                                    {{--<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>--}}
                                                    <input type="radio" id="star4" name="rating" value="4"/><label
                                                            class="full" for="star4"
                                                            title="Pretty good - 4 stars"></label>
                                                    {{--<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>--}}
                                                    <input type="radio" id="star3" name="rating" value="3"/><label
                                                            class="full" for="star3" title="Meh - 3 stars"></label>
                                                    {{--<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>--}}
                                                    <input type="radio" id="star2" name="rating" value="2"/><label
                                                            class="full" for="star2"
                                                            title="Kinda bad - 2 stars"></label>
                                                    {{--<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>--}}
                                                    <input type="radio" id="star1" name="rating" value="1"/><label
                                                            class="full" for="star1"
                                                            title="Sucks big time - 1 star"></label>
                                                    {{--<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>--}}
                                                </fieldset>
                                            </div>

                                            <div class="form-group">
                                            <textarea class="form-control" name="body" id="new-post" rows="5"
                                                      placeholder="Comment"></textarea>

                                            </div>
                                            <input type="hidden" name="p_id" value="{{ $details->id }}">
                                            <button type="submit" class="btn btn-primary">Review</button>
                                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                                        </form>
                                    </div>
                                </section>
                            @endif
                        @endif
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="well">
                        {{--<h1>{{$maps->address}}</h1>--}}
                        <div id="map-canvas"></div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt>Advertised at:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($details->created_at)) }}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Last Updated at:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($details->updated_at)) }}</dd>
                        </dl>


                    </div>
                </div>

                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <h3 class="text-center">Advertised By</h3>
                            <dd><img src="/uploads/avatars/{{ $details->user->avatar }}"
                                     style="width:150px; height:150px; float:left; border-radius:50%; margin-left: -90px">
                            </dd>
                            <h5 class="text-center" style="text-transform: capitalize">
                                Name: {{ $details->user->first_name }} {{ $details->user->last_name }}</h5>
                            <h5 class="text-center" style="text-transform: capitalize">
                                Address: {{ $details->user->address }}, {{ $details->user->city }}
                                , {{ $details->user->country }}</h5>
                            <h5 class="text-center">Phone 1: {{ $details->user->phone1 }}</h5>
                            <h5 class="text-center">Phone 2: {{ $details->user->phone2 }}</h5>
                        </dl>
                    </div>
                </div>

                {{--<div class="col-md-4" style="color: red"><h4 class="text-center">Agents around this place</h4></div>--}}
                @foreach($agents as $user)
                    <div class="col-md-4">
                        <div class="well">
                            <dl class="dl-horizontal">
                                {{--<li>--}}
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/uploads/avatars/{{ $user->avatar }}"
                                                 alt="agent member image">
                                        </div>
                                        <div class="aa-agents-info">
                                            <h4><a href="#" style="margin: 90px;">{{ $user->first_name }} {{ $user->last_name }}</a></h4>
                                            <a href="{{ route('agentDetails', $user->id) }}">
                                                <button class="btn btn-danger" style="margin-left: 120px;">Details</button>
                                            </a>

                                            {{--<div class="aa-agent-social">--}}
                                                {{--<a href="https://www.facebook.com/rivansen"><i--}}
                                                            {{--class="fa fa-facebook"></i></a>--}}
                                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                {{--</li>--}}
                            </dl>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <a href="{{ route('report', $details->id) }}"><button class="btn btn-danger">Report</button></a>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- / Properties  -->
    <script>

        var lat = {{$maps->lat}};
        var lng = {{$maps->lng}};

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: lat,
                lng: lng
            },
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map
        });

    </script>

@endsection