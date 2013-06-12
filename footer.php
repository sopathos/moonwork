<div data-role="footer" data-position="fixed" data-theme="a">        
  <div data-role="navbar">
    <ul>
      <li><a href="#shop" data-icon="search"  data-transition="slide">식당 검색</a></li>
      <li><a href="#theme" data-icon="search"  data-transition="slide">테마 검색</a></li>
      <li><a href="#quick" data-icon="star"  data-transition="slide">빠른 주문</a></li>
      <?
        if(!$_SESSION[user_id]){
      ?>
      <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
      <?
        }else{
      ?>
      <li><a href="#member" data-icon="check" data-rel="dialog">회원정보</a></li>
      <?
        }
      ?>
    </ul>
  </div>
</div>