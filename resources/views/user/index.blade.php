@extends('layouts.app') @section('content')



    <div class="panel panel-default" style="text-align: center; margin: auto; width: 90% ">

        <div class="panel-heading">Користувачі</div>
        <p></p>
        {{ link_to_route('user.create', 'Додати користувача', null, ['class' => 'btn btn-info btn-xs']) }}
        <p></p>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr>
                    <th width="1%">Номер п/п</th>
                    <th width="1%">П.І.Б</th>
                    <th width="1%">Електронна пошта</th>
                    <th width="1%">Пароль</th>
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
                @foreach($user as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->name}}</td>
                        <td>{{$model->email}}</td>
                        <td>{{$model->code}}</td>

                        <td style="text-align:left">
                            {{Form::open(['style' => 'display:flex;float:left', 'route' => ['user.destroy', $model->id], 'method' => 'DELETE'])}}
                            {{ link_to_route('user.edit', 'Редагувати', [$model->id], ['class' => 'btn btn-success btn-xs']) }}<br/>
                            {{Form::button('Видалити', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}} {{Form::close()}}
                            {{Form::close()}}
                        </td>
                    </tr>
                @endforeach

            </table>
{{--            {{$user->links()}}--}}
        </div>
    </div>
@endsection
