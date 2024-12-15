<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true);
        return [
            'name' => ucwords($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'parent_id' => null,
            'order' => $this->faker->numberBetween(0, 10),
            'is_active' => true,
        ];
    }

    public function child(): static
    {
        return $this->state(fn (array $attributes) => [
            'parent_id' => Category::factory(),
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }
}