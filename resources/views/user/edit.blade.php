@extends('layouts.app')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('content')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <center>
                <div class="centered-child col-md-9 col-sm-7 col-xs-6"><b>id: {{$user->id}}</b></div>
            </center>

        </div>
    </div>

    <div class="panel-body">
        {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}

        @include('user._form')
        <div class="form-group">

            {!! Form::button('Редагувати', ['type' => 'submit','class' => 'btn btn-success']) !!}
            <a class="btn btn-info btn-xs" href="{{route('user.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Повернутися до загального списку
            </a>
        </div>

        {!! Form::close() !!}

    </div>
