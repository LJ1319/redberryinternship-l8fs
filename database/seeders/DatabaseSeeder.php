<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab animi culpa, cumque, dicta distinctio eum facere fugit ipsam labore laboriosam nesciunt nostrum perferendis, quaerat quas quisquam reprehenderit sequi vitae. Est facere iure rem sit! Ab ad amet commodi corporis debitis dolore doloremque earum esse exercitationem facilis, maxime modi necessitatibus neque non obcaecati officia pariatur reprehenderit sint vitae voluptate voluptatem voluptatibus voluptatum? Aliquid aperiam aspernatur blanditiis distinctio eaque esse, ipsum iste labore laboriosam molestias nam natus nesciunt officia officiis possimus praesentium quibusdam, quis recusandae reprehenderit voluptatibus! Dolor, enim labore molestias nobis, quia quos repudiandae rerum soluta temporibus totam unde vitae.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab animi culpa, cumque, dicta distinctio eum facere fugit ipsam labore laboriosam nesciunt nostrum perferendis, quaerat quas quisquam reprehenderit sequi vitae. Est facere iure rem sit! Ab ad amet commodi corporis debitis dolore doloremque earum esse exercitationem facilis, maxime modi necessitatibus neque non obcaecati officia pariatur reprehenderit sint vitae voluptate voluptatem voluptatibus voluptatum? Aliquid aperiam aspernatur blanditiis distinctio eaque esse, ipsum iste labore laboriosam molestias nam natus nesciunt officia officiis possimus praesentium quibusdam, quis recusandae reprehenderit voluptatibus! Dolor, enim labore molestias nobis, quia quos repudiandae rerum soluta temporibus totam unde vitae.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab animi culpa, cumque, dicta distinctio eum facere fugit ipsam labore laboriosam nesciunt nostrum perferendis, quaerat quas quisquam reprehenderit sequi vitae. Est facere iure rem sit! Ab ad amet commodi corporis debitis dolore doloremque earum esse exercitationem facilis, maxime modi necessitatibus neque non obcaecati officia pariatur reprehenderit sint vitae voluptate voluptatem voluptatibus voluptatum? Aliquid aperiam aspernatur blanditiis distinctio eaque esse, ipsum iste labore laboriosam molestias nam natus nesciunt officia officiis possimus praesentium quibusdam, quis recusandae reprehenderit voluptatibus! Dolor, enim labore molestias nobis, quia quos repudiandae rerum soluta temporibus totam unde vitae.</p>'
        ]);
    }
}
