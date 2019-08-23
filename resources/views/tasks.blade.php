@extends('layouts.app');

@section('content');
    <!-- Create task form-->
    <!-- bootstrap boilerplate -->
    <div class="panel-body">
        <!-- display validation errors -->
        @include('common.errors');

        <!-- new task form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- task name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- add task button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <image class="fa fa-plus"></image>Add Task
                    </button>
                </div>
            </div>

        </form>

    </div>

    <!-- Current Tasks
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                    <!-- TODO delete button -->
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    -->
@endsection
