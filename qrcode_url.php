<?php

include "phpqrcode/qrlib.php";

$content="https://www.yuewux.com";

qrcode::png($content);
