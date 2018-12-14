<?php
$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] HMA License Key Checker [#]    
                                   
Author : Revan AR                  
Team   : IndoSec                   
Github : https//github.com/revan-ar/\n\n\e[0;1m";
                                                                                 
                                                                                                                                                                 
sleep(3);
echo $banner;
sleep(2);
echo "Masukan License : ";
$key = trim(fgets(STDIN));
$list = file_get_contents($key);
$gas = explode("\n", $list);
foreach ($gas as $license) {
	$su = explode("|", $license);
$data = "
$su[0]";
$g = curl_init();
curl_setopt($g, CURLOPT_URL, "https://alpha-lqs.ff.avast.com/license");
curl_setopt($g, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($g, CURLOPT_POST, 1);
curl_setopt($g, CURLOPT_HEADER, 1);
curl_setopt($g, CURLOPT_HTTPHEADER, array("Vaar-Header-User-Agent: HMA_VPN_CONSUMER/4.3.2183 (Android 6.0.1)", "Vaar-Version: 0", "Content-Type: application/octet-stream"));
curl_setopt($g, CURLOPT_POSTFIELDS, $data);
curl_setopt($g, CURLOPT_USERAGENT, "okhttp/3.11.0");
$h = curl_exec($g);

curl_close($g);
preg_match("/Vaar-Header-ETag/ix", $h, $result);
    if ($result[0] == "Vaar-Header-ETag") {
    	echo "\e[32;2mLIVE\e[0;1m => $su[0]\n";
}else{
	echo "\e[31;2mDIE\e[0;1m => $su[0]\n";
	}
	}
?>