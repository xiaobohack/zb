<!-- <?php 
$id=$_GET['id'];
if (!$id){exit();}$url='http://m.zy40.cn/zb/hya.php?id='.$id;
$uri=file_get_contents($url);preg_match('|"sStreamName":"(.*?)"|',$uri,$sS);preg_match('|"sHlsUrl":"(.*?)"|',$uri,$sH);
$m3u8=str_replace('.hls.','.rtmp.',str_replace('\/','/',$sH[1].''.$sS[1].''));echo $m3u8;exit();
?> -->
