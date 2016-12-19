@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading text-center">Unos novog pitanja</div>

    <div class="panel-body">
        {{ Form::open(['route' => 'questions.store', 'class' => 'form-horizontal']) }}
            <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                <label class="col-md-3 control-label">Pitanje</label>

                <div class="col-md-6">
                    {{ Form::text('title', null, ['class' => 'form-control']) }}

                    @if ($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('body') ? 'has-error' : null }}">
                <label class="col-md-3 control-label">Ogovor</label>

                <div class="col-md-6">
                    {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                    @if ($errors->has('body'))
                        <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">Sačuvaj</button>
                        </div>

                        <div class="col-xs-6">
                            <a href="{{ route('questions.index') }}" class="btn btn-default btn-block">Odustani</a>
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>

@stop
