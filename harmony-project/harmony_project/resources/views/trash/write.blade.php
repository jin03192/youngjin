
@extends('layouts.layout')
@section('content')

<style>
    .hiddenform{
        position: relative;
    }
    .viewform{
        position: relative;
        top:100px;
        border-radius: 5px;
        background-color: #f2f2f2;
        width:100%;
        height:700px;
    }
    .viewform>p{
        font-size:30px;
        position:relative;
        margin-left:250px;
        top:60px;
        margin-top:80px;
    }
    #subject, textarea {
        position:relative;
        top:60px;
        width: 60%;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-left:250px;
        resize: vertical;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 20px 30%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position:absolute;
        top:90%;
        left:20%;
    }
    
    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

 <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>

<div class="hiddenform">
    <form action="/BandChallenge/recordingInsert" method="post">
        <input name = file_name type = hidden value="{{$file['file_name']}}"/>
        <input name = selected_insts type = hidden value="{{$file['selected_insts']}}"/>
        <input name = selected_particis type = hidden value="{{$file['selected_particis']}}"/>
        <input name = midi_id type = hidden value="{{$file['midi_id']}}"/>
        <input name = band_board_id type = hidden value="{{$file['band_board_id']}}"/>
        {{ csrf_field() }}

        <div class="viewform">
            <p>subject</p>
            <input id="subject" name = subject type = text required/>
            <p>contents</p>
            <textarea name = contents rows = 10 cols = 90 required>
            </textarea>
            <div class="upload">
                <input type="submit" value="등록" />
            </div>
        </div>
    </form>
</div>
@endsection