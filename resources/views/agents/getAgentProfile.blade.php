@extends('layouts.master3')

@section('content')
    <div class="form-group col-md-6 myTops">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                </div>
                <div class="col-md-6">


                    <h2 style="text-transform: capitalize">Yours Additional Details</h2>
                    <br>

                    <form enctype="multipart/form-data" action="/uploadAgentProfile" method="POST">

                        {{--<br>--}}
                        {{--<br>--}}
                        <div class="form-group">
                            <label>Specialities:</label>
                            <input type="text" name="specialities" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Experience:</label>
                            <input type="text" name="experience" class="form-control" placeholder="in years">
                        </div>

                        <div class="form-group">
                            <label>Website:</label>
                            <input type="text" name="website" class="form-control" placeholder="website link">
                        </div>
                        <div class="form-group">
                            <label>Details:</label>
                            <textarea type="text" name="details" class="form-control"></textarea>
                        </div>

                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-sm btn-primary" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection