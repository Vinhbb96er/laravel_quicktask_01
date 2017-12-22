@extends('layouts.app')

@section('content')
    <!-- Create Task -->
    <div class="panel-body">
        @include('common.errors')
        {{ Form::open(array('url' => 'task', 'class' => 'form-horizontal')) }}
            <div class="form-group">
                {{ Form::label('taskLabel', trans('lang.task'), array('for' => 'task', 'class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-6">
                    {{ Form::text('name', '', array('id' => 'task-name', 'class' => 'form-control')) }}
                </div>
            </div>
            <!-- Add Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {{ Form::button('<i class="glyphicon glyphicon-plus"></i> ' . trans('lang.add'), array('type' => 'submit', 'class' => 'btn btn-default')) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
    <!-- Current tasks -->
    @if (count($tasks))
        <div class="panel panel-default col-sm-offset-3 col-sm-6" >   
            <!-- heading -->
            <div class="papnel-heading ">
                @lang('lang.currentTask')
            </div>
            <!-- body -->
            <div class="panel-body">
                <table class="table table-striped task-table" >
                    <!-- Table header -->
                    <thead>
                        <th>@lang('lang.task')</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text" >
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'task/' . $task->id)) }}
                                        {{ method_field('DELETE') }}
                                        {{ Form::button('<i class=" glyphicon glyphicon-trash"></i> ' . trans('lang.delete'), array('type' => 'submit', 'class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
