<?php

require 'vendor/autoload.php'; // Ensure you have FakerPHP installed via Composer

use Faker\Factory as Faker;

class Random {
    private $faker;

    public function __construct() {
        $this->faker = Faker::create('en_PH');
    }

    public function generatePerson() {
        return [
            $this->faker->uuid,
            $this->faker->title,
            $this->faker->firstName,
            $this->faker->lastName,
            $this->faker->address,
            $this->faker->citySuffix, // Barangay (can be more specific with custom data)
            $this->faker->city,
            $this->faker->state,
            $this->faker->country,
            $this->faker->phoneNumber,
            $this->faker->phoneNumber,
            $this->faker->company,
            $this->faker->url,
            $this->faker->jobTitle,
            $this->faker->colorName,
            $this->faker->date,
            $this->faker->email,
            $this->faker->password
        ];
    }

    public function generatePeople($count) {
        $people = [];
        for ($i = 0; $i < $count; $i++) {
            $people[] = $this->generatePerson();
        }
        return $people;
    }
}
?>
