<?php
header("Content-Type: application/json; charset=UTF-8");
$ar = array("a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l",'L','m','M','n',"N",'o','O','p','P','q','Q','r','R','S','s','t','T');
$rand1 = array_rand($ar, 1);
$rand2 = array_rand($ar, 1);
$rand3 = array_rand($ar, 1);
$rand4 = array_rand($ar, 1);
$rand5 = array_rand($ar, 1);
$rand6 = array_rand($ar, 1);
$rand7 = array_rand($ar, 1);
$rand8 = array_rand($ar, 1);
$rand9 = array_rand($ar, 1);
$rand10 = array_rand($ar, 1);
$rand11 = array_rand($ar, 1);
$a1 = $ar[$rand1];
$a2 = $ar[$rand2];
$a3 = $ar[$rand3];
$a4 = $ar[$rand4];
$a5 = $ar[$rand5];
$a6 = $ar[$rand6];
$a7 = $ar[$rand7];
$a8 = $ar[$rand8];
$username = $a1.$a2.$a3.$a4.$a5.$a6.$a7.$a8;
$password = $a1.$a2.$a3.$a4.$a5.$a6.$a7.$a8;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://dashboard.pantheon.io/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Accept-Language' => 'ar-AE,ar;q=0.9,en-GB;q=0.8,en;q=0.7,en-US;q=0.6',
    'Cache-Control' => 'max-age=0',
    'Connection' => 'keep-alive',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Origin' => 'https://dashboard.pantheon.io',
    'Referer' => 'https://dashboard.pantheon.io/register',
    'Sec-Fetch-Dest' => 'document',
    'Sec-Fetch-Mode' => 'navigate',
    'Sec-Fetch-Site' => 'same-origin',
    'Sec-Fetch-User' => '?1',
    'Upgrade-Insecure-Requests' => '1',
    'User-Agent' => 'Mozilla/5.0 (Linux; Android 12; SM-A225F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36',
    'sec-ch-ua' => '"Chromium";v="105", "Not)A;Brand";v="8"',
    'sec-ch-ua-mobile' => '?1',
    'sec-ch-ua-platform' => '"Android"',
    'Accept-Encoding' => 'gzip',
]);
curl_setopt($ch, CURLOPT_COOKIE, '_ga=GA1.2.585340958.1665173697; _gid=GA1.2.542212099.1665173697; utma=97458314.585340958.1665173697.1665173698.1665173698.1; utmc=97458314; utmz=97458314.1665173698.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); utmt=1; pantheon_tracking=%7B%22utm_source%22%3A%22No%20UTM%22%2C%22utm_medium%22%3A%22No%20UTM%22%2C%22utm_device%22%3A%22No%20UTM%22%2C%22utm_content%22%3A%22No%20UTM%22%2C%22utm_campaign%22%3A%22No%20UTM%22%2C%22utm_term%22%3A%22No%20UTM%22%2C%22utm_ad_group_name%22%3A%22No%20UTM%22%2C%22dtl%22%3A%22%22%2C%22referrer_url%22%3A%22%22%7D; pantheon_tracking=%7B%22utm_source%22%3A%22No%20UTM%22%2C%22utm_medium%22%3A%22No%20UTM%22%2C%22utm_device%22%3A%22No%20UTM%22%2C%22utm_content%22%3A%22No%20UTM%22%2C%22utm_campaign%22%3A%22No%20UTM%22%2C%22utm_term%22%3A%22No%20UTM%22%2C%22utm_ad_group_name%22%3A%22No%20UTM%22%2C%22dtl%22%3A%22%22%2C%22referrer_url%22%3A%22%22%7D; _gat=1; _csrf=5Sbwr8-buYnJjttVajTT6wxv; destination=%2Fwelcome; __utmb=97458314.3.10.1665173698');
curl_setopt($ch, CURLOPT_POSTFIELDS, "company=&organization=&job_function=&registration_context=&_csrf=p158iIZE-8Mm3khAyPLiF9Oo6cpZNXlySyk4&firstname=mhmd&lastname=medo&email=".$username."@gmail.com&password=".$password."@&country=Egypt&tos=tos");
$response = curl_exec($ch);
curl_close($ch);
$info[] = [
'email'=>"$username@gmail.com",
'password'=>"$password@",
'response'=>$response,
'login'=>"dashboard.pantheon.io/login",
'By'=>"VIRUS - @VR_LA",
];
echo json_encode($info, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);