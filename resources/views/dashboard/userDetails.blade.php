@extends('layouts.master3')

@section('content')





        <div class="col-md-12 myTop">
            <aside class="aa-properties-sidebar">
                <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Users Table</h4>
                <hr>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Member Since</th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        @if( $user->type == 0)
                        <tr>
                            <td>
                                {{$user->id}} </td>
                            <td>
                                {{$user->name}} </td>
                            <td>
                                {{$user->email}} </td>

                            <td>
                                @if ($user->stripe_id != null)
                                    Agent
                                    @else
                                    User
                                @endif
                                 </td>

                            <td>
                                {{$user->created_at->format('F d, Y h:ia')}} </td>
                            <td>
                                {!! Form::open(['route' => ['deleteUser', $user->id], 'method' => 'DELETE' ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                        @endif

                    </tbody>
                    @endforeach
                </table>
                </h4>
                    </div>

            </aside>

        </div>






@endsection