@extends('layouts.app')

@section('content')

    <h1>Message of id={{ $message->id }}</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>title</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('messages.edit','edit this massage',['id'=>$message->id],['class'=>'btn btn-info']) !!}
    {!! Form::model($message,['route'=>['messages.destroy',$message->id],'method'=>'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection