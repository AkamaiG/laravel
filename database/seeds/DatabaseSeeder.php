<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(PostsSeeder::class);
    }
}

class PostsSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();
		Post::create([
			'name' => 'Test Name',
			'desc' => 'Test Desc',
			'image' => 'Test image',
		]);
			
		Post::create([
			'name' => 'Test Name2',
			'desc' => 'Test Desc2',
			'image' => 'Test image2',
		]);
	}
}
