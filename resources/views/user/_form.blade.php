<div class="form-group">

    {!!Form::label('name', 'П.І.Б') !!}
    {!!Form::text('name', null, ['class' => 'form-control' , 'required','placeholder' => 'П.І.Б']) !!}

    {!!Form::label('email', 'E-mail') !!}
    {!!Form::email('email', null, ['class' => 'form-control' , 'required']) !!}

    {!!Form::label('code', 'Пароль') !!}
    {!!Form::text('code', null, ['class' => 'form-control' , 'required']) !!}



</div>
