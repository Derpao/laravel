@extends('layouts.app')
@section('css')
    <style type="text/css">

        .table-app {
            padding: 10%;
        }

        table {
        }

        table * {
            /*border: 1px solid red;*/
            text-align: center;
        }

        .noBorder td {
            border: none !important;
        }

    </style>
@endsection

@section('js')
    <script type="javascript">
        $(document).ready(function () {
            alert(2);
        });
    </script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>

                    <div class="panel-body">
                        You are logged in as Admin!

                        <div class="row table-app">
                            <table class="table noBorder">
                                <thead>
                                <th colspan="2">Admin console</th>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.table_edit') }}">
                                            <i class="fa fa-table fa-3x" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.table_edit') }}">
                                            <i class="fa fa-user-plus fa-3x" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" class="control-label">test</label>
                                    </td>
                                    <td>
                                        <p>test</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.table_edit') }}">
                                            <i class="fa fa-comments fa-3x" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.table_edit') }}">
                                            <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>test</p>
                                    </td>
                                    <td>
                                        <p>test</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
