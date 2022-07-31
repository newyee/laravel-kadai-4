<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(), // 追加
            'title' => $this->faker->sentence(), // 追加
            'content' => $this->faker->realText(130), // 追加
            'like' => $this->faker->numberBetween(1, 20000), // 追加
        ];
    }
}
