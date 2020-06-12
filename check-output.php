<?php
  if(($_REQUEST['check'])) {
    echo '商品をお届けします。';
  }else{
    echo 'またの機会をお待ちしています。';
  }
  var_dump($_REQUEST['check']);
