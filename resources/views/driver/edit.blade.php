@extends('layouts.app') @section('content')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>Створення Водія</b></div>
        </div>
    </div>
    <div class="panel-body">
        {!! Form::model($driver, ['route' => ['driver.update', $driver->id], 'files' => true, 'method' => 'PUT']) !!}

        @include('driver._form')
        <div class="form-group">
            {!! Form::button('Редагувати', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
            <a class="btn btn-info" href="{{route('driver.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Повернутися до загального списку
            </a>
        </div>

        {!! Form::close() !!}
    </div>


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
