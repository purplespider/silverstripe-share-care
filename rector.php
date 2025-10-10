<?php

use Rector\Config\RectorConfig;
use Netwerkstatt\SilverstripeRector\Set\SilverstripeLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withSets([
        SilverstripeLevelSetList::UP_TO_SS_6_0,
    ]);
