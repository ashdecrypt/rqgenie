@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the roles show page!!

<!--                                         {!! Form::model($user, ['method' => 'GET','route' => ['user_show', $user->id]]) !!}
 -->
                                        <div class="row">


                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Name:</strong>

<!--                                                     {!! Form::text('name',null, ['class' => 'form-control', 'readonly' => 'true']) !!}
 -->
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Display Name:</strong>

<!--                                                     {!! Form::email('email',null, ['class' => 'form-control', 'readonly' => 'true']) !!}
 -->
                                                </div>

                                            </div>  
                @foreach ($roles as $role)                                          
                @if (!$user->hasrole($role->id))
                <div class="pull-left">
                                        {!! Form::model($user, ['method' => 'GET','route' => ['role_assign']]) !!}

                    {!! Form::hidden('user_id', $user->id) !!}
                                        {!! Form::hidden('role_id', $role->id) !!}


<!--                     <a class="btn btn-primary" > {{$role->name}} </a>
                    <br>
 -->                    

{!! Form::button('<i class="fa fa-star"></i> '.$role->name, array(
            'type' => 'submit'
    )); !!}

                                         {!! Form::close() !!}

                </div>
                @endif

                @endforeach
                                        </div>

                 <!--                        {!! Form::close() !!}
 -->

                </div>
                <!-- <div class="pull-left">

                    <a class="btn btn-primary" href="{{ route('role_edit',$user->id) }}"> Edit </a>

                </div>
                --> </div>
        </div>
    </div>
</div>
@endsection
