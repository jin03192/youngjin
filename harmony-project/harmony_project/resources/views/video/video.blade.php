<!DOCTYPE html>
<!--
Copyright 2017 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html lang="en">
<head>

<style type="text/css">.toggles{
width:200px;
height:200px;
background: red;
text-align: center;
line-height: 200px;
font-size: 70px;


}
</style>

  <title>동영상 녹화</title>

  <link rel="canonical" href="https://simpl.info/mediarecorder" />
  <!-- <link rel="stylesheet" href="css/main.css" /> -->
  <link rel="stylesheet" href="css/main.css" />
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>



</head>

<body>

  <div id="container" class='minho' style="position:absolute">

    <h1>동영상&nbsp;녹화</h1>



    <video id="gum" autoplay muted></video>
    <video id="recorded" autoplay loop></video>


    <div name="count" style="position:relative;left:120px;top:-150px;color:red;" >

    </div>
    <div>

      <button id="record">Start Recording</button>
      <button id="play" disabled>Play</button>
      <button id="download" disabled>Download</button>
      <button id="upload" disabled>Upload</button>
      <button id="SoundPlay" hidden="hidden" disabled>Sound Play</button>

    </div>


  </div>


  <script src="js/video/video.js"></script>
  <script src="js/lib/ga.js"></script>

</body>
</html>
