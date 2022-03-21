<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fakerto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, assumenda. Cupiditate quam maiores ipsum nihil officiis debitis ipsa ad cum aut velit esse fugiat, vel animi quas eius, sit optio tempore aspernatur hic quaerat assumenda corporis porro deserunt? Delectus aliquam pariatur reiciendis culpa voluptate. Molestias accusamus veniam autem quasi, tempora hic exercitationem consequatur sapiente ducimus aliquam qui praesentium culpa consectetur at accusantium cumque nesciunt. Earum necessitatibus tenetur delectus itaque amet provident ea nihil veritatis, rerum odit eveniet velit minima et!" 
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fakertolol",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, officiis vero doloremque velit facere enim optio maiores quo, numquam praesentium nostrum laboriosam et iure, veniam qui porro quasi repellat eveniet!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}