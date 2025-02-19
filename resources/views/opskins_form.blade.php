@extends('layouts.app')

@section('content')
    <h1>OPSkins Updater</h1>
    {!! Form::open(['route' => 'opskins-update-form-post', 'method' => 'POST', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('data', 'OPSkins data') !!}
        {!! Form::file('data', null, ['class' => 'form-control']) !!}
    </div>
    <button class="btn btn-success" type="submit">@lang('messages.opskins-update-data')</button>

    {!! Form::close() !!}


@endsection