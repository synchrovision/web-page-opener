<?php
if(php_sapi_name()!=='cli'){echo "This program is for execute with CLI";return;}
chdir(__DIR__);
$urls=explode("\n",trim(file_get_contents('urls.txt')));
$browsers=explode("\n",trim(file_get_contents('browsers.txt')));

foreach($urls as $url){
	foreach($browsers as $browser){
		if($browser === "Simurator"){
			passthru(sprintf('xcrun simctl openurl booted %s',$url));
			continue;
		}
		if($browser === 'Android'){
			passthru(sprintf('~/Library/Android/sdk/platform-tools/adb shell am start %s',$url));
			continue;
		}
		passthru(sprintf('open -a "%s" "%s"',$browser,$url));
	}
}