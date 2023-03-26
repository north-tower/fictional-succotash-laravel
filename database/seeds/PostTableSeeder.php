<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Lorem ipsum dolor sit', 
            'content' => 'amet consectetur adipisicing elit. um nihil placeat quas cum. Laboriosam, perspiciatis. Hic similique neque libero quam fugiat, praesentium rerum.'
            
        ]);
        $post->save();

        $post = new \App\Post([
             'title' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
             
            'content' => ' Dolorum est, quisquam autem sit nostrum unde eaque? Possimus minus temporibus nemo nulla, illo, animi rerum asperiores recusandae voluptatem labore 
            corporis provident.'
            
        ]);
        $post->save();
        
    }
}
