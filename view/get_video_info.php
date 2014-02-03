<?php
header('Content-Type: application/json');
header('Location: http://localhost/fp/data/video1.json');
?>


<div class="container">
    <video id="video" width="770" height="882" onclick="play();">
        <source src="video/Motion.mp4" type="video/mp4" />
    </video>
    <div class="overlay">
        <p>Content above your video</p>
        <form>
            <p>Content Below Your Video</p>
            <label for="input">Form Input Label</label>
            <input id="input" name="input" value="" />
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
If you want to put the content on top of the video, you would use some kind of positioning:

.container { position:relative; }
.container video {
    position:relative;
    z-index:0;
}
.overlay {
    position:absolute;
    top:0;
    left:0;
    z-index:1;
}