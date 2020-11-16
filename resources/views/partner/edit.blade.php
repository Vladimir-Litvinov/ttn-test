@extends('layouts.app')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('content')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <center>
                <div class="centered-child col-md-9 col-sm-7 col-xs-6"><b>id: {{$partner->id}}</b></div>
            </center>

        </div>
    </div>

    <div class="panel-body">
        {!! Form::model($partner, ['route' => ['partner.update', $partner->id], 'method' => 'PUT']) !!}

        @include('partner._form')
        <div class="form-group">

            {!! Form::button('Редагувати', ['type' => 'submit','class' => 'btn btn-success']) !!}
            <a class="btn btn-info btn-xs" href="{{route('partner.index')}}">
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


    {{--@include('layouts.errors')--}}

@endsection
