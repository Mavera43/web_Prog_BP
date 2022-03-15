<?php
//phpinfo();
date_default_timezone_set('Europe/Istanbul'); //zaman dilimini istanbul olarak ayarla
echo date_default_timezone_get()."<br>"; //seçili zaman dilimini yazdır 

setlocale(LC_TIME,'turkish.UTF-8'); //turkceyi sec (sunucuda yüklü olması gerekir)

echo  strftime(' %A '); //belirtilen zamana ait
 