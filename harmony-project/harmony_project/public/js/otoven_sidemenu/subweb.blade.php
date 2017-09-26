<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/login.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=550, initial-scale=1">
    <style>
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
        html, body {
            background-color: #D9D9D9;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            margin: 0;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 25px;
        }
        .ranking{
          position: absolute;

        }

        .content {
            text-align: center;
            padding-top: 100px;
        }

        .title {
            font-size: 84px;
        }
        button.btn{
          background-color: #D9D9D9;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
          border: 0;
          outline: 0;
          color: #636b6f;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        button > a {
          color: #636b6f;
          text-decoration: none;
        }
        button > a:hover, a:focus {
          color: #636b6f;
          opacity: 0.8;
          text-decoration: none;
        }
    </style>
  </head>
  <body>
      <div class="imglogo">
        <a href="{{ url('/') }}"><img src="/img/sempleicon.png" alt="" width="100" height="100"></a>
      </div>
      <div class="login">
              <div class="top-right links">
                <table>
                  <tr>
                    <td><button class="btn" ><a href="{{ url('/') }}">Home</a></button></td>
                    <td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn">Login</button>
                    @include('login/login')</td>
                    <td><button class="btn"><a href="{{ url('/store') }}">Register</a></button></td>
                  </tr>
                </table>
              </div>
        </div>
        @include('menu.topmenu')
        <div class="content">

        </div>
    </body>
</html>
