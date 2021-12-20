<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pseudo Company - Search</title>
    <meta name="description" content="Pseudo Company Page">
    <meta name="keywords" content="">
    <meta name="author" content="Mae Sangaline">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<!-- Body -->
<body>
<?php

function search($search_term,$site)
{
global $dsite;
$bits = explode('/', $site);
if ($bits[0]=='http:' || $bits[0]=='https:')
	{
	$site=$bits[0].'//'.$bits[2].'/';
	} else {
	$site='http://'.$bits[0].'/';
	}
$dsite=$site;
$site=urlencode($site);
$search_term=urlencode($search_term);
$curl_handle=curl_init('http://www.google.com.au/search?hl=en&q=site%3A'.$site.'+'.$search_term.'&meta=');
curl_setopt($curl_handle, CURLOPT_HEADER, false);
curl_setopt($curl_handle, CURLOPT_FAILONERROR, true);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); // request as if Firefox   
curl_setopt($curl_handle, CURLOPT_POST, false);
curl_setopt($curl_handle, CURLOPT_NOBODY, false);
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,4);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);

$bufferb=strip_tags($buffer,'<cite>');
preg_match_all("/<cite>[^ ]+ - [0-9]+k - <\/cite>/",$bufferb,$match['url']);
unset($bufferb);
$match['url'][0]=preg_replace('/<cite>([^ ]+) - [0-9]+k - <\/cite>/','$1',$match['url'][0]);
$bufferb=strip_tags($buffer,'<br><div>');
preg_match_all("/<div[^>]+>[^<]+<br>/",$bufferb,$match['des']);
unset($bufferb);





$bufferb=strip_tags($buffer,'<a>');
preg_match_all("/<a href=\"[^\"]+\"\ class\=l[^>]+>[^<]+<\/a>/",$bufferb,$match['title']);
$id=0;
while (isset($match['title'][0][$id]))
    {
    $match['title'][0][$id]=strip_tags($match['title'][0][$id]);
    $id+=1;
    }

$result['url']=$match['url'][0];
$result['des']=$match['des'][0];
$result['title']=$match['title'][0];
unset($match);
unset($buffer);
unset($bufferb);
unset($id);

return $result;
}

echo "<form method='post' style='margin:0; padding:0;'><table border=0 cellpadding=0 cellspacing=0>
<tr><td align='right'>Website:</td><td><input type='text' size=40 name='site'></td></tr>
<tr><td align='right'>Search Term:</td><td><input type='text' size=40 name='searchval'><input type='submit' value='search'></td></tr></table></form><br>";
if (isset($_POST['searchval']) && strlen($_POST['searchval'])>=1)
    {
    $result=search($_POST['searchval'],$_POST['site']);
    $id=0;
    echo "<table border=0 cellspacing=0 cellpadding=0 width=640><tr><td bgcolor='#66CCFF'><table border=0 cellpadding=3 cellspacing=0><tr><td>".
    '<b>Website searched: '.$dsite.'<br> There were '.count($result['title'])." results found with the term '<i>".$_POST['searchval']."</i>'</b></td></tr></table></td></tr>";
    while (isset($result['url'][$id]) && isset($result['des'][$id]))
        {
        echo '<tr><td><a href="http://'.$result['url'][$id].'"><font color=#0000FF>'.$result['title'][$id].'</font></a></td></tr><tr><td>'.$result['des'][$id].'</td></tr><tr><td height="16px"></td></tr>';
        $id+=1;
        }
    echo "</table>";
    }
?>
</body>
</html>