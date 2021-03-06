<?php

/**
 * @var rex_addon $this
 */

rex_extension::register('OUTPUT_FILTER', function () {
    rex_dir::copy($this->getPath('data'),$this->getDataPath());
});

if ($this->getPlugin('manager')->isInstalled()) {
    // use path relative to __DIR__ to get correct path in update temp dir
    $this->getPlugin('manager')->includeFile(__DIR__.'/plugins/manager/install.php');
}

rex_autoload::removeCache();
