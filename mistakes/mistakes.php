<!-- Ñêðèïò îòïðàâêè ñîîáùåíèé îá îøèáêå http://mistakes.ru/script/mistakes_dev -->
<!-- Âåðñèÿ 4.1 îò 27.04.2015-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<TITLE>Исправление ошибки</TITLE>
<style type="text/css">
body {
margin: 23px 28px 0 28px;
font-size:14px;
font-family:Helvetica, Sans-serif, Arial;
line-height:2em;
}
form {margin: 0;}
.text {
font-weight: bold;
font-size:12px;
color:#777;
}
.copyright {
font-size:11px;
color:#777;
}
.mclose a{
font:bold 16px Verdana;
color:#7f7f7f;
position:absolute;
right:12px;
top:9px;
display:block;
text-decoration:none;
}
.mclose a:hover{
color: #000;
}
#m{
border: 1px solid silver;
padding: 3px;
width: 294px;
border-radius:4px;
font-size: 13px;
background-color: #fff;
}
#m strong{
color:red;
}
</style>

<script language="JavaScript"> 
var p=top;
function readtxt()
{ if(p!=null)document.forms.mistake.url.value=p.loc
 if(p!=null)document.forms.mistake.mis.value=p.mis
}
function hide()
{ var win=p.document.getElementById('mistake');
win.parentNode.removeChild(win);
}
</script>

<?php 
if($_POST['submit']) { 
    # Çàãîëîâîê ñîîáùåíèÿ - çàìåíèòå "yousite.ru" íà èìÿ ñâîåãî ñàéòà:
$title = 'bitcoinz.global';
$ip = getenv('REMOTE_ADDR');
$url = (trim($_POST['url']));
$mis =  (trim($_POST['mis']));
$comment =  substr(htmlspecialchars(trim($_POST['comment'])), 0, 100000);
                       
                $mess = '
                <html>
                <head>
                <title>Îøèáêà íà ñàéòå</title>
                </head>
                <body>
                <strong>Àäðåñ ñòðàíèöû:</strong> <a href="'.$url.'">'.$url.'</a>
                <br/>
                <strong>Îøèáêà:</strong> '.$mis.'
                <br/>
                <strong>Êîììåíòàðèé:</strong> '.$comment.'
                <br/>                               
                <strong>IP:</strong> '.$ip.'
                '.$_POST['mess'].'
                </body>
                </html>
                ';
# Email àäðåñ, íà êîòîðûé äîëæíû ïðèõîäèòü ñîîáùåíèÿ:               
$to = 'evgvisl@gmail.com';
# Email àäðåñ, îò êîãî ïðèøëî ñîîáùåíèå:
$mymail='bitcoinz@global.ru';
# Âìåñòî "yousite.ru" óêàçæèòå èìÿ âàøåãî ñàéòà: 
        $from = "From: =?windows-1251?B?". base64_encode("bitcoinz.global"). "?= < $mymail >\n";
        $from .= "X-Sender: < $mymail >\n";
        $from .= "Content-Type: text/html; charset=windows-1251\n";
               
mail($to, $title, $mess, $from);
echo '<div class="mclose"><a href="javascript:void(0)" onclick="hide()" title="Çàêðûòü">&times;</a></div><br><br><br><center>Ñïàñèáî!<br>Âàøå ñîîáùåíèå îòïðàâëåíî.<br><br><br><input onclick="hide()" type="button" value="Çàêðûòü îêíî" id="close" name="close"><br><br><br><a class="copyright" href="http://mistakes.ru/script/mistakes_dev" target="_blank" title="">© Îøèáêè.ru</a><center>'; 
exit();
}  
?>

</head>
<body onload=readtxt()>
<div class="mclose"><a href="javascript:void(0)" onclick="hide()" title="Çàêðûòü">&times;</a></div>
<span class="text">
Àäðåñ ñòðàíèöû :
 </span>
<br /> 
<form name="mistake" action="" method=post>
<input id="m" type="text" name="url" size="35" readonly="readonly">
              <span class="text">
              Îøèáêà :
              </span><br />
              <div id="m" style="line-height:normal;height: 75px;width: 287px;">
<script language="JavaScript">
	document.write(p.mis); 
</script>
              </div>
              <input type="hidden" id="m" rows="5" name="mis" readonly="readonly"></textarea>
              <span class="text">
              Êîììåíòàðèé :
              </span>
              <br /> 
              <textarea id="m" rows="5" name="comment" cols="30"></textarea> 
              <div style="margin-top: 7px"><input type="submit" value="Îòïðàâèòü" name="submit">
              <input onclick="hide()" type="button" value="Îòìåíà" id="close" name="close"> 
              </div>
</form> 

</body></html>
