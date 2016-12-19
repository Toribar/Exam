@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3>{{ $question->title }}</h3>
    </div>

    <div class="panel-body">
        <p class="lead">
            {{ $question->body }}
        </p>
    </div>
</div>

@stop
