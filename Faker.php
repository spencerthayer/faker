<?php
/**
 * Faker.php
 * 2014-01-16
 *
 * Developed by yewei <yewei@playcrab.com>
 * Copyright (c) 2014 Playcrab Corp.
 *
 * Desc:
 */

/**
 * static class
 */
class Faker {
    // return a number > 0
    public static function num($max = 100) {
        return rand(1, $max);
    }

    // return a random timestamp
    public static function timestamp($start = "2000-1-1", $end = "2020-1-1") {
        return rand(strtotime($start), strtotime($end));
    }

    public static function name() {
        require_once __DIR__."/FakeName.php";
        return FakeName::firstName() . ' ' . FakeName::lastName();
    }
}
