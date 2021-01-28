<?php

if($_SERVER['HTTP_REFERER'] == "https://elastic-babbage-fbe20d.netlif.app/") {
  $res = array('token' => 'xoxb-1652175914689-1652276326993-n9cGyTtmZWnOly6h78XDQh9H', 'remote' => $_SERVER['HTTP_REFERER']);

  echo(json_encode($res));
} else {
  http_response_code(401);
}

