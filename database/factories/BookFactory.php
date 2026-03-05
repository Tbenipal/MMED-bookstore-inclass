<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author = Author::inRandomeOrder()->first();
        return [
            //Newer laravel version use fake() instead of $this->faker
            'title' => $this->faker->name,
            'author_id' => $author->id,
            'publisher_id'=> null
        ];
    }
}
