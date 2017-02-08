@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">员工号</label>

                            <div class="col-sm-6">
                                <input type="text" name="user_namefork" id="task-usernamefork" class="form-control" value="{{ Auth::user()->name }}" disabled>
								<input type="hidden" name="user_name" id="task-username" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">客户号</label>

                            <div class="col-sm-6">
                                <input type="number" name="cus_id" id="task-cusid" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">客户电话</label>

                            <div class="col-sm-6">
                                <input type="number" name="cus_tel" id="task-custel" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">拨打日期</label>

                            <div class="col-sm-6">
                                <input type="date" name="call_date" id="task-calldate" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">拨打事由</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">拨打成功</label>

                            <div class="col-sm-6">
                                <span>是</span>
                                <input type="radio" name="call_ok" value="是" checked>
                                <span>否</span>
                                <input type="radio" name="call_ok" value="否">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">备注</label>

                            <div class="col-sm-6">
                                <input type="text" name="call_bak" id="task-callbak" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>客户号</th>
                                <th>拨打时间</th>
                                <th>拨打事由</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->cus_id }}</div></td>
                                        <td class="table-text"><div>{{ $task->call_date }}</div></td>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
