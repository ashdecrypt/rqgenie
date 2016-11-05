@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the roles list page!!
                </div>
                <div class="panel-body">
                    Following are the current added roles...

                    @foreach ($roles as $role)
                        <p><a href="/roles/show/{{$role->id}}" > Role: {{ $role->name }}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
