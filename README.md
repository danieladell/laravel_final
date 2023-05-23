## Aplicación de registros de matricula para Moodle
Alex, Ricardo y Dani

##pre-commit git hooks
#!/usr/bin/env php
<?php

echo "Running tests.. " . PHP_EOL;

exec('vendor/bin/phpunit tests/ --testdox', $output, $returnCode);

if ($returnCode !== 0) {
    foreach ($output as $s) {
        echo $s . PHP_EOL;
    }
    echo PHP_EOL . "Aborting commit.." . PHP_EOL;
    exit(1);
}

foreach ($output as $s) {
    echo $s . PHP_EOL;
}
exit(0);
