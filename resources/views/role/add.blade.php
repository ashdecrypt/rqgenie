@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is the role add page!!
                </div>
                <div class="panel-body">

                                @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                @endif


                                {!! Form::open(array('route' => 'roles_store','method'=>'POST')) !!}
                                <div class="row">


                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>Role Name:</strong>

                                            {!! Form::text('name', null, array('placeholder' => 'Role Name','class' => 'form-control')) !!}

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>Display Name:</strong>

                                            {!! Form::text('display_name', null, array('placeholder' => 'Roles Display Name','class' => 'form-control')) !!}

                                        </div>

                                    </div>





                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>Description:</strong>

                                            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}

                                        </div>

                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>


                                </div>

                                {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
