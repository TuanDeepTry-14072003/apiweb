<?php
$url = array(
"https://i.postimg.cc/KvnnK7rc/12334wrwd534wrdf-2.gif",
"https://i.postimg.cc/P5T11L2W/12334wrwd534wrdf-3.gif",
"https://i.postimg.cc/P5yYytRB/12334wrwd534wrdf-4.gif",
"https://i.postimg.cc/nLL7wy8M/12334wrwd534wrdf-5.gif",
"https://i.postimg.cc/xCwz8qXb/12334wrwd534wrdf-8.gif",
"https://i.postimg.cc/x1fbcw1g/3Ii6.gif",
"https://i.postimg.cc/QdfK5fBD/6a60d1eaf8c7317f7dfb0a892789c490.gif",
"https://i.postimg.cc/Zq0BL63d/akari-slap.gif",
"https://i.postimg.cc/zDhhMwQw/anime-slap.gif",
"https://i.postimg.cc/HLKJvj4P/anime-slap.gif",
"https://i.postimg.cc/26Z1sm0j/anime-slap-1.gif",
"https://i.postimg.cc/bN8ZB7k8/d6wv007-5fbf8755-5fca-4e12-b04a-ab43156ac7d4.gif",
"https://i.postimg.cc/GhQ4wXxD/giphy.gif",
"https://i.postimg.cc/L88nHjxb/giphy-1.gif",
"https://i.postimg.cc/wTdNdyKC/slap-anime.gif",
"https://i.postimg.cc/SKXR9kFL/tumblr-dfb46fdafbc9622e2de3d57fdac1770d-5b4ecb8c-500.gif",
"https://i.postimg.cc/sX72nm2v/VF8X.gif",
"https://i.postimg.cc/bNHtYyps/VW0cOyL.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$slap = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($slap);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
