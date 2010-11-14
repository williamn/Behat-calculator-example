<?php

$steps->Given('/^I have entered (\d+) into the calculator$/', function($world, $arg1) {
    if (!$world->calculator) {
        $world->calculator = new Calculator();
    }
    $world->calculator->push($arg1);
});

