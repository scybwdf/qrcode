<?php

include "phpqrcode/qrlib.php";

//在浏览器中显示
//qrcode::png('abc');

//在服务器中生成文件
qrcode::png('abc','abc.jpg');