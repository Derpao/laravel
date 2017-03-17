@extends('layouts.app')
@section('css')
    <style>
        .testVid {
            height: 400px;

        }

        .red {
            border: 1px solid red;
        }

        .bb {
            background-color: red;
        }

        #embed-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%
        }

        #embed-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }
    </style>

@endsection
@section('js')
    <script src="{{ asset('jwplayer-7.9.3 (1)/jwplayer-7.9.3/jwplayer.js') }}"></script>
    {{--<script src="https://knd1.ilikehd.com/kaneda/web/jw/jwplayer.js"></script>--}}
    <script>jwplayer.key = "yiMyTbAbd//uIoEwIgQKzj+MmQLzTA9Tg+nFJA==";</script>

    <script>
        $(document).ready(function () {
            $.ajax({
                headers: {'X-Auth-Token': '088e5b0d31e242ab8a5d57a441bdbf1b'},
                url: 'http://api.football-data.org/v1/fixtures?timeFrame=n1',
                dataType: 'json',
                type: 'GET',
            }).done(function (response) {
                // do something with the response, e.g. isolate the id of a linked resource
                var regex = /.*?(\d+)$/; // the ? makes the first part non-greedy
                var res = regex.exec(response.fixtures[0]._links.awayTeam.href);
                var teamId = res[1];
                console.log(teamId);
            });
        });
    </script>

@endsection
@section('content')

    <div class="container">
        <div class="starter-template">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">


                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
