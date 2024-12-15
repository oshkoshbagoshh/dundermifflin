<?php
//
//namespace Database\Factories;
//
//use App\Models\User;
//use App\Models\Category;
//use App\Models\Post;
//use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;
//
//class PostFactory extends Factory
//{
//    protected $model = Post::class;
//
//    public function definition(): array
//    {
//        $title = $this->faker->unique()->sentence();
//        $markdown = <<<EOT
//# {$title}
//
//![Featured Image]({$this->faker->imageUrl(1200, 800))
//
//{$this->faker->paragraph()}
//
//## Key Points
//
//{$this->faker->paragraphs(2, true)}
//
//### Technical Details
//
//```php
//<?php
//
//// Example code snippet
//function example() {
//    return 'Hello World';
//}
//```
//
//{$this->faker->paragraphs(3, true)}
//
//## Conclusion
//
//{$this->faker->paragraph()}
//
//> {$this->faker->quote()}
//
//EOT;
//
//        $publishedAt = $this->faker->boolean(80)
//            ? $this->faker->dateTimeBetween('-1 year', 'now')
//            : null;
//
//        return [
//            'title' => $title,
//            'slug' => Str::slug($title),
//            'excerpt' => $this->faker->paragraph(),
//            'content' => $markdown,
//            'featured_image' => $this->faker->imageUrl(1200, 800),
//            'meta_description' => $this->faker->sentence(),
//            'meta_keywords' => $this->faker->words(5),
//            'status' => $this->faker->randomElement(['draft', 'published', 'scheduled']),
//            'published_at' => $publishedAt,
//            'is_featured' => $this->faker->boolean(20),
//            'views_count' => $this->faker->numberBetween(0, 10000),
//            'user_id' => User::factory(),
//            'category_id' => Category::factory(),
//        ];
//    };
//
//    public function published(): static
//    {
//        return $this->state(fn (array $attributes) => [
//            'status' => 'published',
//            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
//        ]);
//    }
//
//    public function draft(): static
//    {
//        return $this->state(fn (array $attributes) => [
//            'status' => 'draft',
//            'published_at' => null,
//        ]);
//    }
//
//    public function scheduled(): static
//    {
//        return $this->state(fn (array $attributes) => [
//            'status' => 'scheduled',
//            'published_at' => $this->faker->dateTimeBetween('now', '+1 month'),
//        ]);
//    }
//
//    public function featured(): static
//    {
//        return $this->state(fn (array $attributes) => [
//            'is_featured' => true,
//        ]);
//    }
//}