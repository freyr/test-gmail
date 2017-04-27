<?php
$log = var_export($_SERVER, true);
error_log($log);
echo 'test';
