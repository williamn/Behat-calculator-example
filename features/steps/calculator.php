<?php

$steps->Given('/^I have entered (\d+) into the calculator$/', function($world, $arg1) {
    if (!$world->calculator) {
        $world->calculator = new Calculator();
    }
    $world->calculator->push($arg1);
});

$steps->When('/^I press add$/', function($world) {
    $world->calculator->add();
});

$steps->Then('/^the result should be (\d+) on the screen$/', function($world, $arg1) {
    assertEquals($arg1, $world->calculator->result());
});

