<?php
$url='http://www.jobsnepal.com';

$Content= file_get_contents($url);

$pattern='/<a class="job-item"(.*?)href="(.?*)">\n(.*?)<\/a>/';

//preg_match_all($pattern,$content,$matches);

print_r($content);




?>