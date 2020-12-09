@extends('layouts.app') @section('content')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>Створення Водія</b></div>
        </div>
    </div>
    <div class="panel-body">
        {!! Form::open(['route' => 'driver.store']) !!}
        @include('driver._form')
        <div class="form-group">
            {!! Form::button('Створити', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!} </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
