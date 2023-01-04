<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'Josua Sirait',
            'username'  => 'siraitjosua',
            'email'     => 'josuasirait25@gmail.com',
            'password'  => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Jurgen Klopp',
        //     'email' => 'jklopp@gmail.com',
        //     'password' => bcrypt('jklopp')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis magnam sapiente eius qui, aliquid error ea dicta saepe ipsa. Cupiditate, quia. Inventore reiciendis rerum autem incidunt odio ea libero omnis saepe debitis perspiciatis iure tempore est possimus obcaecati iste soluta fuga quasi, similique hic quia aliquam quod reprehenderit. Magni rem ipsam inventore quasi veritatis provident quaerat impedit culpa ratione quis expedita in, quisquam ut deleniti labore nisi aspernatur explicabo quo quos recusandae molestias repellendus unde praesentium. Laboriosam ut qui inventore facere ducimus, similique asperiores obcaecati atque totam distinctio porro nulla magni provident ipsum blanditiis accusantium molestiae optio non nemo.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis magnam sapiente eius qui, aliquid error ea dicta saepe ipsa. Cupiditate, quia. Inventore reiciendis rerum autem incidunt odio ea libero omnis saepe debitis perspiciatis iure tempore est possimus obcaecati iste soluta fuga quasi, similique hic quia aliquam quod reprehenderit. Magni rem ipsam inventore quasi veritatis provident quaerat impedit culpa ratione quis expedita in, quisquam ut deleniti labore nisi aspernatur explicabo quo quos recusandae molestias repellendus unde praesentium. Laboriosam ut qui inventore facere ducimus, similique asperiores obcaecati atque totam distinctio porro nulla magni provident ipsum blanditiis accusantium molestiae optio non nemo.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis magnam sapiente eius qui, aliquid error ea dicta saepe ipsa. Cupiditate, quia. Inventore reiciendis rerum autem incidunt odio ea libero omnis saepe debitis perspiciatis iure tempore est possimus obcaecati iste soluta fuga quasi, similique hic quia aliquam quod reprehenderit. Magni rem ipsam inventore quasi veritatis provident quaerat impedit culpa ratione quis expedita in, quisquam ut deleniti labore nisi aspernatur explicabo quo quos recusandae molestias repellendus unde praesentium. Laboriosam ut qui inventore facere ducimus, similique asperiores obcaecati atque totam distinctio porro nulla magni provident ipsum blanditiis accusantium molestiae optio non nemo.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis magnam sapiente eius qui, aliquid error ea dicta saepe ipsa. Cupiditate, quia. Inventore reiciendis rerum autem incidunt odio ea libero omnis saepe debitis perspiciatis iure tempore est possimus obcaecati iste soluta fuga quasi, similique hic quia aliquam quod reprehenderit. Magni rem ipsam inventore quasi veritatis provident quaerat impedit culpa ratione quis expedita in, quisquam ut deleniti labore nisi aspernatur explicabo quo quos recusandae molestias repellendus unde praesentium. Laboriosam ut qui inventore facere ducimus, similique asperiores obcaecati atque totam distinctio porro nulla magni provident ipsum blanditiis accusantium molestiae optio non nemo.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

    }
}
