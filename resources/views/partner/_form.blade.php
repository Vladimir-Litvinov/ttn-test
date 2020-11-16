<div class="form-group">

    {!!Form::label('firm', "Назва фірми") !!}
    {!!Form::text('firm', null, ['class' => 'form-control' , 'required']) !!}

    {!!Form::label('code', 'Код ЄДРПОУ') !!}
    {!!Form::text('code', null, ['class' => 'form-control' , 'required']) !!}

    {!!Form::label('responsible_person', 'Відповідальна особа') !!}
    {!!Form::text('responsible_person', null, ['class' => 'form-control' , 'required']) !!}


</div>
