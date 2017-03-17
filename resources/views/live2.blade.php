@extends('layouts.app')
@section('css')
    <style type="text/css">
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

        #video {
            /*position: absolute;*/

        }

        .ads {
            z-index: 1000000;
            background-color: #843534;
            opacity: 0.5;
            position: absolute;
            width: 92%;
            height: 45%;
            cursor: pointer;
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('jwplayer-7.9.3 (1)/jwplayer-7.9.3/jwplayer.js') }}"></script>
    <script>jwplayer.key = "yiMyTbAbd//uIoEwIgQKzj+MmQLzTA9Tg+nFJA==";</script>
    <script>
        $(document).ready(function () {
            $(".ads").click(function () {
//                alert(2);

            });
        });
    </script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Live21</div>
                    <div class="panel-body">

                        <object type="application/x-shockwave-flash"
                                data="https://knd1.ilikehd.com/kaneda/web/jw/jwplayer.flash.swf" width="100%"
                                height="100%" bgcolor="#000000" id="tvplayer" name="tvplayer"
                                class="jwswf swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" tabindex="0">
                            <param name="allowfullscreen" value="true">
                            <param name="allowscriptaccess" value="always">
                            <param name="seamlesstabbing" value="true">
                            <param name="wmode" value="opaque">
                        </object>

                        <div class="ads"> test ets tes tes teest ets tes tes teest ets tes tes teest ets tes tes
                            testest ets tes tes teest ets tes tes teest ets tes tes teest ets tes tes te
                        </div>
                        <div id="video">
                            <script type="text/javascript">
                                var playerInstance = jwplayer("video");
                                playerInstance.setup({
                                    file: "https://www.dropbox.com/s/xxmbyf573e1iauj/%E0%B9%81%E0%B8%9F%E0%B8%99%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%AB%E0%B8%B8%E0%B9%88%E0%B8%99%E0%B8%94%E0%B8%B5.mp4?_download_id=89277950683611665820235586992133260786956944273566814743258817078&_notify_domain=www.dropbox.com&dl=1",
                                    aspectratio: "16:9",
                                    width: "100%",
                                    skin: {
                                        name: "bekle",
                                        active: "#ff9900"
                                    },
                                    title: 'น้องยุ้ยสาวมอทางอีสาน',
                                    type: "mp4",
                                    description: ''
                                });
                            </script>

                        </div>
                        <div id="embed-responsive">
                            <iframe src="//www.dailymotion.com/embed/video/x5ej2t4?api=postMessage&id=player&syndication=lr:194620&autoplay=1&info=0&logo=0&related=0&social=0"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
