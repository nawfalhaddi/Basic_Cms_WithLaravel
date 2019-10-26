@extends('layouts.admin')

@section('content')
    <h1>Update User</h1>

    <div class="row">
        <div class="col-sm-3">

            <img class="img-responsive img-rounded"src="{{$user->photo_id?$user->photo->file:'http://placehold.it/400x400'}}" alt="">
        </div>
        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',$roles ,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <div class="row">
                <div class="col-6">

                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 pull-left">
                    <div class="form-group">
                        {!! Form::submit('Update user',['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
                <div class="col-sm-3 pull-right">

                    {!! Form::model($user,['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::submit('Delete user',['class'=>'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>




        </div>
    </div>





    @include('includes.form_error')

@endsection
