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
            {!! Form::model($user, ['route' => ['updateAgentProfile', $user->id], 'method' => 'POST']) !!}
            <div class="col-md-8">
                {{--<div class="well profile">--}}
                <div class="col-sm-12 myTop myLeft">
                    <div class="col-xs-12 col-sm-3">
                        {{--<img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">--}}
                        <img src="/uploads/avatars/{{ $user->avatar }}"
                             alt="agent member image" style="height: 200px; width: 198px">
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <figure>

                            {{--<img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">--}}

                            {!! Form::label('first_name', 'First Name:') !!}
                            {{ Form::text('first_name', null, ['class' => 'form-control input-lg']) }}

                            {!! Form::label('last_name', 'Last Name:') !!}
                            {{ Form::text('last_name', null, ['class' => 'form-control input-lg']) }}

                            {{--Space for rating--}}





                            {!! Form::label('specialities', 'Specialities:') !!}
                            {{ Form::text('specialities', null, ['class' => 'form-control input-lg']) }}

                            {!! Form::label('details', 'Details:') !!}
                            {{ Form::text('details', null, ['class' => 'form-control input-lg']) }}
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('showProfile', $user->id) }}" methods="get">
                                        <button class="btn btn-danger btn-block" value="Cancel">Cancel</button>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

                                </div>
                            </div>

                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-md-4 myTop">
                <div class="well">
                    <h4>Professional Information</h4>
                    <hr>

                    {!! Form::label('address', 'Address:') !!}
                    {{ Form::text('address', null, ['class' => 'form-control input-lg']) }}

                    {!! Form::label('city', 'City:') !!}
                    {{ Form::text('city', null, ['class' => 'form-control input-lg']) }}

                    {!! Form::label('country', 'Country:') !!}
                    {{ Form::text('country', null, ['class' => 'form-control input-lg']) }}

                    {!! Form::label('phone1', 'Phone 1:') !!}
                    {{ Form::text('phone1', null, ['class' => 'form-control input-lg']) }}

                    {!! Form::label('phone2', 'Phone 2:') !!}
                    {{ Form::text('phone2', null, ['class' => 'form-control input-lg']) }}


                    {!! Form::label('website', 'Website:') !!}
                    {{ Form::text('website', null, ['class' => 'form-control input-lg']) }}

                    {!! Form::label('experience', 'Experience:') !!}
                    {{ Form::text('experience', null, ['class' => 'form-control input-lg']) }}


                    {{--<h6><strong>Member Since:</strong>{{ $user->created_at->format('F d, Y h:ia') }}</h6>--}}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">

                </div>
            </div>
            {!! Form::close() !!}
    </div>
    </div>

@endsection