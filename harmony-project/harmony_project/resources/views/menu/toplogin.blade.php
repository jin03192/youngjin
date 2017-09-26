<div class="container back">
  <div class="row">
    <div class="col-md-3 topmenu">
          <?php
          $user_id = session()->get('user_id','');
          
          if(!empty($user_id[0])){
          ?>
            <a href="{{ url('/logoutAction') }}">ログアウト</a>
            <!--<a href="{{ url('/logoutAction') }}">Logout</a>-->
            {{csrf_field()}}
            <a href="{{ url('/myfriends') }}">マイページ</a>
            <!--<a href="{{ url('/myfriends') }}">Mypage</a>-->
          <?php
          }
          else{
          ?>
            <a href="{{ url('/login') }}">ログイン</a>
            {{csrf_field()}}
            <a href="{{ url('/store') }}">レジスター</a>
          <?php
          }
          ?>
    </div>
  </div>
</div>