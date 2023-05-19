<?php

namespace App\Models;


class Post
{
    private static $about_posts = [
        [
            "nama" => "Muhammad Rizqi Abdilah",
            "slug" => "rizqi",
            "kelas" => "XII-RPL",
            "deskripsi" => "Saya seorang siswa di kelas XII-RPL"
        ]
    ];

    public static function all()
    {
        return collect(self::$about_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
