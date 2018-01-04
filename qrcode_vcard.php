<?php

include "phpqrcode/qrlib.php";

$content="BEGIN:VCARD\n";
$content.="VERSION:3.2.3.8\n";
$content.="N:吴\n";//姓
$content.="FN:飞\n";//名
$content.="ORG:大好科技\n";
$content.="QQ:1054478332;\n";
$content.="TEL;WORK;VOICE:18698524659\n";
$content.="TEL;HOME;VOICE:18698524659\n";
$content.="TEL;CELL;VOICE:18698524659\n";
$content.="ADR;WORK:;;南湖区;嘉兴市;中国\n";
$content.="ADR;HOME:;;南湖区;嘉兴市;中国\n";
$content.="EMAIL:scybwf@qq.com\n";
$content.="URL:www.yuewux.com\n";
$content.="PHOTO;VALUE=uri:http://www.abc.com/pub/photos/jqpublic.gif\n";

$content.="END:VCARD";

qrcode::png($content);
