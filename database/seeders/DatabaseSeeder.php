<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
        Post::create([
            'title' => 'Naruto',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'naruto',
            'author' => 'Masashi Kishimoto',
            'publisher' => 'Shonen Jump',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>'
        ]);

        Post::create([
            'title' => 'One Piece',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'one-piece',
            'author' => 'Eichiro Oda',
            'publisher' => 'Shonen Jump',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',            
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>'
        ]);

        Post::create([
            'title' => 'Investasi Saham Ala Fundamentalis Dunia',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'investasi-saham-ala-fundamentalis-dunia',
            'author' => 'Ryan Filbert',
            'publisher' => 'PT Elex Komputindo',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',            
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>'
        ]);

        Post::create([
            'title' => 'Technical Analysis for Mega Profit',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'techinical-analysis-for-mega-profit',
            'author' => 'Edianto Ong',
            'publisher' => 'PT Gramedia Pustaka Utama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',            
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi sunt dolores reiciendis excepturi magni voluptas eius harum? Impedit, nemo? Facere necessitatibus at dignissimos cumque error earum ad ipsam ea!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptate nam aliquam ad minima eveniet dolores facilis ratione corrupti enim ea deserunt, dolorem error fugiat magni rem fuga facere excepturi provident incidunt. Amet quaerat adipisci, facilis doloremque, ipsam modi labore rerum saepe dolorum cupiditate laborum placeat quia consequatur voluptatibus necessitatibus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab tempore laudantium, nihil optio doloremque? Minus ducimus quos corporis vero doloribus architecto vel odio officiis. Reprehenderit officia totam molestiae dolor architecto repudiandae aut laboriosam nesciunt quae! Fuga enim ab accusamus quae laudantium sint minima! Nam, tempora! Quae amet quidem vel?</p>'
        ]);

        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);

        Category::create([
            'name' => 'NonFiksi',
            'slug' => 'non-fiksi'
        ]);

        User::create([
            'name' => 'Megumin-Chan',
            'username' =>'KonosubaMegumin',
            'email' => 'megumin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sri-Chan',
            'username' => 'SriChan',
            'email' => 'sri@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
