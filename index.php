<?php
$log = var_export($_SERVER, true);
fwrite(STDERR, $log);
echo 'test';
