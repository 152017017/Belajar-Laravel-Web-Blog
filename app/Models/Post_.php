<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Josua Sirait",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni architecto deleniti, blanditiis ut nemo quidem tempore officiis cumque nulla 
            eveniet placeat obcaecati est quis consequatur corporis, ratione error provident optio laborum voluptatum dignissimos! Exercitationem tenetur harum, consectetur magnam quisquam, vitae sit voluptatibus omnis ipsam nesciunt dolor praesentium labore excepturi ad incidunt culpa eos voluptatum maiores dolorum maxime. Quas expedita, sapiente 
            dolorem iste cupiditate dolor at autem earum provident quo sed doloremque nisi fuga illo officiis quis deserunt excepturi, ex reiciendis?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Santiago",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni architecto deleniti, blanditiis ut nemo quidem tempore officiis cumque nulla 
            eveniet placeat obcaecati est quis consequatur corporis, ratione error provident optio laborum voluptatum dignissimos! Exercitationem tenetur harum, consectetur magnam quisquam, vitae sit voluptatibus omnis ipsam nesciunt dolor praesentium labore excepturi ad incidunt culpa eos voluptatum maiores dolorum maxime. Quas expedita, sapiente 
            dolorem iste cupiditate dolor at autem earum provident quo sed doloremque nisi fuga illo officiis quis deserunt excepturi, ex reiciendis?."
        ],
    ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        //     $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

    return $posts->firstWhere('slug', $slug);

    }

}
