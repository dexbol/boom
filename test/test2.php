<?php
    header('Content-Type','text/javascript');
		header('Cache-Control','max-age=120');
	sleep(3);
?>
CN6.add('t2-1',function(C){
	C['t2-1']=true;
},{requires:['t1-1']});