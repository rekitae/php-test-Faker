<?php
/**
 * @link https://github.com/fzaninotto/Faker
 */
require_once('../vendor/autoload.php');

use Faker\Provider\Base;
use Faker\Provider\Lorem;

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

$data = new stdClass;

$data->name = $faker->name;
$data->addr = $faker->address;
$data->text = $faker->text;
$data->randomDigit = [Base::randomDigit(), Base::randomDigit(), Base::randomDigit(), Base::randomDigit(), Base::randomDigit()];
$data->randomNumber = [Base::randomNumber(), Base::randomNumber(), Base::randomNumber(), Base::randomNumber(), Base::randomNumber()];
$data->numberBetween = [Base::numberBetween($min = 1000, $max = 9000), Base::numberBetween($min = 1000, $max = 9000), Base::numberBetween($min = 1000, $max = 9000)];
$data->randomElements = [Base::randomElements($array = array ('a','b','c'), $count = 2)];
/*
shuffle('hello, world') // 'rlo,h eoldlw'
shuffle(array(1, 2, 3)) // array(2, 1, 3)
numerify('Hello ###') // 'Hello 609'
lexify('Hello ???') // 'Hello wgt'
bothify('Hello ##??') // 'Hello 42jz'
asciify('Hello ***') // 'Hello R6+'
regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'); // sm0@y8k96a.ej
 */

$data->word = $faker->word;
$data->words = Lorem::words();
$data->sentence = Lorem::sentence();

print_r($data);
