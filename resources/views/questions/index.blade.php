@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @foreach($questions as $question)
            <div class="panel panel-default">

                    <div class="panel-heading">
                        <strong>{{ $question->serial }}. </strong> {{ $question->title }}
                    </div>

                    <div class="panel-body">
                        <p class="lead">
                            {{ $question->body }}
                        </p>
                    </div>
                    <br>
            </div>
         @endforeach
    </div>
</div>
@stop
