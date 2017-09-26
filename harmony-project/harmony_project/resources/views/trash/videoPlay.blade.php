<!DOCTYPE html>
<!--
Copyright 2017 Google Inc.

Licensed under the Apache License, Version 2.0 (the 'License');
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an 'AS IS' BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html lang='en'>
<head>

  <meta name='description' content='Simplest possible examples of HTML, CSS and JavaScript.' />
  <meta name='author' content='//samdutton.com'>  <meta name='viewport' content='width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes'>
  <meta itemprop='name' content='simpl.info: simplest possible examples of HTML, CSS and JavaScript'>
  <meta itemprop='image' content='icon_192x192.png'>
  <meta name='mobile-web-app-capable' content='yes'>
  <meta id='theme-color' name='theme-color' content='#fff'>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <base target='_blank'>

  <title>The video element:multiple videos</title>

  <link rel='stylesheet' href='css/main.css' />
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

  <style>
    video {
      margin: 0 0 20px 0;
    }
  </style>

</head>

<body>


  <div id='container'>

    <h1>multiple videos</h1>

    <!-- <video id='video01' width='160' height='120' src='http://localhost/upload/ua.mp4'></video> -->
    <video id='video02' width='120' height='90' src='http://localhost/upload/20170603234235asd.mp4' ></video>
    <input type="checkbox" id="test1" name="video[]" checked="" value="http://localhost/upload/20170603234235asd.mp4" >민호
    <video id='video03' width='120' height='90' src='http://localhost/upload/20170603234223asd.mp4' ></video>
    <input type="checkbox" id="test2" name="video[]" checked="" value="http://localhost/upload/20170603234223asd.mp4" >나훔
    <video id='video04' width='120' height='90' src='http://localhost/upload/20170603234214asd.mp4' ></video>
    <input type="checkbox" id="test3" name="video[]" checked="" value="http://localhost/upload/20170603234214asd.mp4" >현경




    </div>
    <button id="soundPlay">Sound Play</button>
    <button id="ensemble">합주하기</button>



      <video id="gum" hidden="hidden" autoplay muted></video>





    <script src="js/video/video.js"></script>
    <script src='js/lib/ga.js'></script>

  </body>
</html>
