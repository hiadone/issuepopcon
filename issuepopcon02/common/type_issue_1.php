<?php
if($MD=='newstown'){
$sCode = "071j"; //pv 체크
$pageid1 = "06zX" ; // 실시간 정보
$pageid2 = "06zp" ; // 관심기사
$pageid3 = "0707" ; // 중단배너
$pageid4 = "070P" ; // 이슈포토
$pageid5 = "070h" ; // 베스트 생활정보
$pageid6 = "070z" ; // 금주의 핫클릭
$pageid7 = "071H" ; // 하단배너
$post_id='82';
$popstate='disable';
$press_url='http://issuepopcon.com/?MD=newstown';
$view_type='random';
}
if($MD=='moodeung'){
$sCode = "071k"; //pv 체크
$pageid1 = "06zY" ; // 실시간 정보
$pageid2 = "06zq" ; // 관심기사
$pageid3 = "0708" ; // 중단배너
$pageid4 = "070Q" ; // 이슈포토
$pageid5 = "070i" ; // 베스트 생활정보
$pageid6 = "0710" ; // 금주의 핫클릭
$pageid7 = "071I" ; // 하단배너
$post_id='81';
$popstate='disable';
$press_url='http://issuepopcon.com/?MD=moodeung';
$view_type='random';
}
if($MD=='default'){
$sCode = "0676"; //pv 체크
$post_id='77';
$popstate='enable';
$press_url='http://issuepopcon.com/?MD=default';
$view_type='random';
$post_link[0]['pln_start']=0;
$post_link[0]['pln_end']=0;
$post_link[0]['pln_url']='http://naver.com';
$post_link[0]['pln_id']='54';
}
?>
