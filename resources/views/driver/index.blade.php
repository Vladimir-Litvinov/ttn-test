@extends('layouts.app') @section('content')



    <div class="panel panel-default" style="text-align: center; margin: auto; width: 90% ">

        <div class="panel-heading">Водії</div>
        <p></p>
        {{ link_to_route('driver.create', 'Додати водія', null, ['class' => 'btn btn-info btn-xs']) }}
        <p></p>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr>
                    <th width="1%">Номер п/п</th>
                    <th width="1%">П.I.Б</th>
                    <th width="1%">Номер посвідчення водія</th>
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
                @foreach($drivers as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->name}}</td>
                        <td>{{$model->driver_license}}</td>

{{--                        <td style="text-align:left">--}}
{{--                            {{Form::open(['style' => 'display:flex;float:left', 'route' => ['driver.destroy', $model->id], 'method' => 'DELETE'])}}--}}
{{--                            {{ link_to_route('driver.edit', 'Редагувати', [$model->id], ['class' => 'btn btn-success btn-xs']) }}<br/>--}}
{{--                            {{Form::button('Видалити', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}} {{Form::close()}}--}}
{{--                            {{Form::close()}}--}}
{{--                        </td>--}}
                    </tr>
                @endforeach

            </table>
            {{$drivers->links()}}
        </div>
    </div>
@endsection
{{----}}
