@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the admin panel index page!!
                </div>
                <div class="panel-body">
                    Following are the current users...

                    @foreach ($users as $user)
                        <p><a href="/adminpanel/assign/{{$user->id}}" > User: {{ $user->name }}</a></p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
