<?php
// মূল লিংকের কন্টেন্ট ফেচ করার জন্য
$url = 'https://teamhidden.xyz/zxbomber/?p=';

// মূল লিংকের কন্টেন্টটি পড়ুন
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // রিডাইরেক্ট ফলো করার জন্য
$response = curl_exec($ch);
curl_close($ch);

// মূল লিংকের কন্টেন্ট আউটপুট করুন
echo $response;
?>
