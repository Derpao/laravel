@extends('layouts.app')
@section('css')
    <style>
        table td {
            text-transform: uppercase;
            text-shadow: none;
            font-size: 13px;
            font-family: "Antenna Black", Arial;
            color: #000;
            height: 16px;
            font-weight: 600;
        }

        .table {
            table-layout: fixed;
        }

        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .playing-gif {
            height: 15px;
            width: 10%;
        }

        .panel-primary {
            border-color: #2c3e50;
            padding: 1px;
        }

        .panel-primary > .panel-heading {
            color: #ffffff;
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
@section('content')
    <div class="container">
        <div class="starter-template">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('pic/soccer4.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('pic/soccer5.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('pic/soccer6.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><h1 class="thai-font">ดูบอลได้ที่นี้ Live สด 24ชม.</h1></h3>
                </div>
                <div class="panel-body">

                    <div class="col-xs-12">
                        <table class="table table-hover table-ball-class" id="table-ball">
                            <thead>
                            <tr>
                                <th colspan="4">Saturday, March 4</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Manchester United</td>
                                <td>vs</td>
                                <td>BOURNEMOUTH</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atlanta United</td>
                                <td>vs</td>
                                <td>New York RB</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Las Palmas</td>
                                <td>vs</td>
                                <td>Osasuna</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <table class="table table-hover table-ball-class" id="table-ball">
                            <thead>
                            <tr>
                                <th colspan="4">Saturday, March 4</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Manchester United</td>
                                <td>vs</td>
                                <td>BOURNEMOUTH</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Atlanta United</td>
                                <td>vs</td>
                                <td>New York RB</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Las Palmas</td>
                                <td>vs</td>
                                <td>Osasuna</td>
                                <td>
                                    <a href="#"><img class="playing-gif" src="{{ asset('pic/playing.gif') }}"
                                                     alt=""></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

@endsection
