<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fadil Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quam quo optio placeat pariatur magnam tempora. Dolorum, atque rerum. Beatae molestiae, inventore sit eaque, alias sequi, voluptates optio illum assumenda quos dolor odio laudantium. Incidunt ullam odio libero, reiciendis doloremque veritatis alias recusandae praesentium hic sint labore illo quo illum, neque expedita dicta cum ipsa obcaecati laboriosam quam nisi! Harum ex mollitia quia soluta ullam accusamus culpa laudantium. Ea nisi repudiandae error deleniti dignissimos consequuntur molestiae odio minima quidem quibusdam."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus facere vitae officia explicabo at, deleniti sunt autem nisi ex labore sit ea pariatur rem enim voluptas nemo modi ut consequatur facilis dignissimos reprehenderit voluptate. Vitae doloribus eius quas temporibus dolores, ex inventore sint earum dicta asperiores, a fugiat quibusdam expedita veniam illum quae sed ad, suscipit quisquam debitis aut deserunt maxime. Dicta itaque commodi rerum incidunt, sit illum, obcaecati vitae doloribus similique officiis porro nihil repudiandae dolor delectus? Non quo esse, ex corrupti sed quod labore quaerat provident temporibus laborum? Numquam harum molestias, nobis impedit eos aliquid perferendis vitae sed."
        ],
    ];


    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
