@extends('layouts.app') @section('content')



    <div class="panel panel-default" style="text-align: center; margin: auto; width: 90% ">

        <div class="panel-heading">Контрагенти</div>
        <p></p>
        {{ link_to_route('partner.create', 'Додати контрагента', null, ['class' => 'btn btn-info btn-xs']) }}
        <p></p>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr>
                    <th width="1%">Номер п/п</th>
                    <th width="1%">Назва фірми</th>
                    <th width="1%">Код ЄДРПОУ</th>
                    <th width="1%">Відповідальна особа</th>
                    <th width="1%">Дії</th>



                </tr>
                <tr>
                    <td colspan="13" class="light-green-background no-padding">
                        <div class="row centered-child">
                            <div class="col-md-20">
                            </div>
                        </div>
                    </td>
                </tr>
                @foreach($partners as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->firm}}</td>
                        <td>{{$model->code}}</td>
                        <td>{{$model->responsible_person}}</td>

                        <td style="text-align:left">
{{--                            {{Form::open(['class' => 'confirm-delete', 'route' => ['partner.destroy', $model->id], 'method' => 'DELETE'])}}--}}
                            {{ link_to_route('partner.edit', 'Редагувати', [$model->id], ['class' => 'btn btn-success btn-xs']) }}<br/>
{{--                            {{ link_to_route('partner.show', 'Список адрес', [$model->id], ['class' => 'btn btn-info btn-xs']) }}<br/>--}}
{{--                            {{Form::button('Видалити', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}} {{Form::close()}}--}}
{{--                            {{Form::close()}}--}}
                        </td>
                    </tr>
                @endforeach

            </table>
            {{$partners->links()}}
        </div>
    </div>
@endsection
