@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the roles show page!!

                                @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                @endif


                                        {!! Form::model($role, ['method' => 'PATCH','route' => ['role_update', $role->id]]) !!}

                                        <div class="row">


                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Name:</strong>

                                                    {!! Form::text('name',null, ['class' => 'form-control','readonly' => 'true']) !!}

                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Display Name:</strong>

                                                    {!! Form::text('display_name',null, ['class' => 'form-control']) !!}

                                                </div>

                                            </div>                                            


                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Description:</strong>

                                                    {!! Form::textarea('description', null, array('class' => 'form-control','style'=>'height:100px')) !!}

                                                </div>

                                            </div>

                                        </div>

                                        <div class="pull-left">

                                          {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}

                                        </div>

                                        {!! Form::close() !!}


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
