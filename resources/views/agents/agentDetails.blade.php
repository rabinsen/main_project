@extends('layouts.master')

@section('content')
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            {{--<div class="col-md-8">--}}
            <div class="col-md-8">
                {{--<div class="well profile">--}}
                <div class="col-sm-12 myLeft" style="margin-top: 30px">
                    <div class="col-xs-12 col-sm-3">
                        {{--<img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">--}}
                        <img src="/uploads/avatars/{{ $user->avatar }}"
                             alt="agent member image" style="height: 200px; width: 198px">
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <figure>
                            {{--<img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">--}}

                            <h2 style="text-transform: capitalize">{{ $user->first_name }} {{ $user->last_name }} </h2>

                            {{--Space for rating--}}
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


                            <p><strong>Phone: </strong> {{ $user->phone1 }} </p>

                            <p><strong>Email: </strong> {{ $user->email }} </p>

                            <p><strong>Specialties: </strong> {{ $user->specialities }} </p>

                        </figure>
                    </div>
                </div>

                <div class="col-sm-12 myTop">
                    <h5 style="text-transform: capitalize"><strong><u> About {{ $user->first_name }}</u></strong></h5>

                    <p> {{$user->details}} </p>
                </div>


                <div class="col-sm-12 myTop">
                    {{--@if(!$user->properties)--}}
                    {{--<h5 style="text-transform: capitalize"><strong><u>{{ $user->first_name }}'s Properties</u></strong></h5>--}}
                    {{--@endif--}}

                    <ul class="aa-properties-nav myLeft">
                        @foreach( $properties as $property)
                            <li>
                                <div class="col-xs-12 col-sm-4">
                                    <article class="aa-properties-item">
                                        <a class="aa-properties-item-img" href="#">
                                            <img src="{{ url('/images/'.$property->images->thumbnail) }}"
                                                 class="img-thumbnail">
                                        </a>

                                        <div class="aa-tag for-rent">
                                            {{ $property->group->name }}
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>{{ $property->bedroom }} beds</span>
                                                <span>{{ $property->bathroom }} baths</span>
                                                <span>{{ $property->kitchen }} kitchen</span>
                                                <span>{{ $property->landArea }} sq.ft</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h5><a href="#">{{ $property->title }}</a></h5>

                                                <p>{{ $property->description }}</p>
                                            </div>
                                            <div class="aa-properties-detial">
                                                    <span class="aa-price">
                                                        {{ $property->price }}
                                                    </span>
                                                <a class="aa-secondary-btn"
                                                   href="{{ route('details', $property->id) }}">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>

            </div>

            <div class="col-md-4" style="margin-top: 30px;">

                <div class="well">
                    <form action="{{ route('postContact', $user->id) }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" class="form-control" name="email"/>
                        </div>

                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input id="subject" class="form-control" name="subject"/>
                        </div>
                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea id="message" class="form-control" name="message" rows="7" cols="30"></textarea>
                        </div>
                        <input id="submit_button" type="submit" value="Send email"/>
                    </form>
                </div>
            </div>



            <div class="col-md-4 myTop">
                <div class="well">
                    <h4>Professional Information</h4>
                    <hr>

                    <h6><strong>Address:</strong>{{ $user->address }}, {{ $user->city }}, {{ $user->country }}</h6>
                    <h6><strong>Phone:</strong> {{ $user->phone1 }}, {{ $user->phone2 }}</h6>
                    <h6><strong>Email:</strong> {{ $user->email }}</h6>
                    <h6><strong>Website:</strong>{{ $user->website }}</h6>
                    <h6><strong>Experience:</strong>{{ $user->experience }}</h6>
                    <h6><strong>Member Since:</strong>{{ $user->created_at->format('F d, Y h:ia') }}</h6>
                </div>
            </div>



                <div class="col-md-12 col-md-offset-0">
                    {{--@if(!$user->agentReviews)--}}
                    {{--<header><h3>Reviews</h3></header>--}}
                    {{--@endif--}}
                    @foreach( $reviews as $review )
                        <div>
                            <div class="rating">
                                @if( $review->rating === 0 )
                                    <img style="width: 105px; height: 20px;" src="{{ url('/stars/no_star.png') }}">
                                @endif
                                @if( $review->rating === 1 )
                                        <img style="width: 105px; height: 20px;" src="{{ url('/stars/one_star.png') }}">
                                @endif
                                @if( $review->rating === 2 )
                                        <img style="width: 105px; height: 20px;" src="{{ url('/stars/two_star.png') }}">
                                @endif
                                @if( $review->rating === 3 )
                                        <img style="width: 105px; height: 20px;" src="{{ url('/stars/three_star.png') }}">
                                @endif
                                @if( $review->rating === 4 )
                                        <img style="width: 105px; height: 20px;" src="{{ url('/stars/four_star.png') }}">
                                @endif
                                @if( $review->rating === 5 )
                                        <img style="width: 105px; height: 20px;" src="{{ url('/stars/five_star.png') }}">
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

                            <p class="text-right">Reviewed By {{ $review->user->name }}</p>
                        </div>
                        <hr style="  border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc">
                    @endforeach
                </div>
            </div>


            <div>
                @if( \Illuminate\Support\Facades\Auth::user() )
                    @if($user->id != Auth::id())
                        <section class="row new-post">
                            <div class="col-md-12 col-md-offset-0">
                                <header><h4><strong>Write a review</strong></h4></header>
                                <form action="{{ route('agentReview') }}" method="post">
                                    <div>
                                        <fieldset class="rating">
                                            <input type="radio" id="star5" name="rating" value="5"/><label
                                                    class="full" for="star5" title="Awesome - 5 stars"></label>
                                            {{--<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>--}}
                                            <input type="radio" id="star4" name="rating" value="4"/><label
                                                    class="full" for="star4" title="Pretty good - 4 stars"></label>
                                            {{--<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>--}}
                                            <input type="radio" id="star3" name="rating" value="3"/><label
                                                    class="full" for="star3" title="Meh - 3 stars"></label>
                                            {{--<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>--}}
                                            <input type="radio" id="star2" name="rating" value="2"/><label
                                                    class="full" for="star2" title="Kinda bad - 2 stars"></label>
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
                                    <input type="hidden" name="a_id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-primary">Review</button>
                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </form>
                            </div>
                        </section>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection