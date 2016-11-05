@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the roles show page!!

                                        {!! Form::model($role, ['method' => 'GET','route' => ['role_show', $role->id]]) !!}

                                        <div class="row">


                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Name:</strong>

                                                    {!! Form::text('name',null, ['class' => 'form-control', 'readonly' => 'true']) !!}

                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Display Name:</strong>

                                                    {!! Form::text('display_name',null, ['class' => 'form-control', 'readonly' => 'true']) !!}

                                                </div>

                                            </div>                                            


                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <div class="form-group">

                                                    <strong>Description:</strong>

                                                    {!! Form::textarea('description', null, array('readonly' => 'true','class' => 'form-control','style'=>'height:100px')) !!}

                                                </div>

                                            </div>

                                        </div>

                                        {!! Form::close() !!}


                </div>
                <div class="pull-left">

                    <a class="btn btn-primary" href="{{ route('role_edit',$role->id) }}"> Edit </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
