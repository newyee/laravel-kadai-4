<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    protected $model = Like::class;

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
            'post_id' => Post::factory(), // 追加
        ];
    }
}
