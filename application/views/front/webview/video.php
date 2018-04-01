<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<video id="video_js-vid-player-uvpjs725743919" style="width: 100%; visibility: visible;" src="blob:https://www.gamespot.com/01c693be-ea83-410c-bea3-46eecc5804cd"></video>
<script type="text/javascript">
    // var video = document.querySelector('video');
    // var mediaSource = new MediaSource;
    // video.src = URL.createObjectURL(mediaSource);
    // mediaSource.addEventListener('sourceopen', sourceOpen)

    function sourceOpen () {
        var mediaSource = this;
        var sourceBuffer = mediaSource.addSourceBuffer('video/mp4; codecs="avc1.42E01E, mp4a.40.2"');
        sourceBuffer.addEventListener('updateend', function () {
            mediaSource.endOfStream();
            video.play();
        });
        sourceBuffer.appendBuffer(buf); // buf is the arraybuffer to store the video data
    }
    //
    function display(vid){

        var video = document.getElementById("video");
        video.src = window.URL.createObjectURL(vid);

    }
</script>
</body>
</html>