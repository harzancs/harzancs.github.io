<html lang="en" dir="ltr">

<head>
    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }

        .vjs-fluid {
            padding-top: 56.25%
        }
    </style>
    <style class="vjs-styles-dimensions">
        .my_video_1-dimensions {
            width: 640px;
            height: 268px;
        }

        .my_video_1-dimensions.vjs-fluid {
            padding-top: 56.25%;
        }
    </style>
    <meta charset="utf-8">
    <title>My Video</title>
    <link href="https://vjs.zencdn.net/7.7.6/video-js.css" rel="stylesheet">
    <!-- For IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
   
</head>

<body>
    <h1>Live Stream from 94FMClub</h1>
    <video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="268" data-setup='{}'>
        <source src="http://ns13.revoproject.com/live/94fmclub.m3u8" type='application/x-mpegURL'>
    </video>
    <!--This is for Video.js by itself -->
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <!--This is for HLS compatibility with all major browsers-->
    <script src="https://unpkg.com/browse/@videojs/http-streaming@1.13.3/dist/videojs-http-streaming.min.js"></script>
    <script>
        var overrideNative = true;
        var player = videojs('my_video_1', {
            html5: {
                hls: {
                    overrideNative: overrideNative,
                    debug: true,
                },
                nativeVideoTracks: overrideNative,
                nativeAudioTracks: overrideNative,
                nativeTextTracks: overrideNative
            }
        });
        player.play();
    </script>


</body>

</html>