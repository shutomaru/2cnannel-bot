@extends('layouts.app')

@section('content')

    <h1>New Message here!</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($message,['route'=>'messages.store']) !!}
                <div class="form-group">
                    {!! Form::label('title','Title') !!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'please input a title']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content','Message') !!}
                    {!! Form::text('content',null,['class'=>'form-control','placeholder'=>"please input a message"]) !!}
                </div>
                
                {!! Form::submit('Send',['class'=>'btn btn-secondary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection