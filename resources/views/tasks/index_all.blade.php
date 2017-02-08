<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Intermediate</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

</head>
<body id="app-layout">


    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <th>员工号</th>
                                <th>客户号</th>
                                <th>客户电话</th>
                                <th>拨打日期</th>
                                <th>拨打事由</th>
                                <th>拨打成功</th>
                                <th>备注</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td><div>{{ $task->user_name }}</div></td>
                                        <td><div>{{ $task->cus_id }}</div></td>
                                        <td><div>{{ $task->cus_tel }}</div></td>
                                        <td><div>{{ $task->call_date }}</div></td>
                                        <td><div>{{ $task->name }}</div></td>
                                        <td><div>{{ $task->call_ok }}</div></td>
                                        <td><div>{{ $task->call_bak }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

      <script src="js/jquery-1.12.3.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>

      <script>
        $(document).ready(function() {
    $('#example').DataTable();
});
    </script>
</body>
</html>

