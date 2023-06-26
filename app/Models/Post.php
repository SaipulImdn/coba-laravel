<?php

namespace App\Models;


class Post 
{
    private static $blog_posts  = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint placeat totam officia accusamus expedita odio iste. Sed voluptas aliquam illo enim iusto, dignissimos maiores recusandae dolor praesentium officiis quae harum."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint placeat totam officia accusamus expedita odio iste. Sed voluptas aliquam illo enim iusto, dignissimos maiores recusandae dolor praesentium officiis quae harum."
        ]
        ];

        public static function all()
        {
            return self::$blog_posts;
        }

        public static function find($slug)
        {
            $posts = self::$blog_posts;
         $post = [];
     foreach($posts as $p) {
         if($p["slug"] === $slug) {
             $post = $p;
         }
    }
    return $post;
        }
}
