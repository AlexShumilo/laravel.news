<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_name'=> 'Alex',
            'user_email'=>'ef@fd.df',
            'comment_theme'=>'первая тема',
            'comment_text' => 'первый текст',
            'news_id' => '12',
        ]);
        Comment::create([
            'user_name'=> 'Alex2',
            'user_email'=>'fsdfef@fd.df',
            'comment_theme'=>'вторая тема',
            'comment_text' => 'второй текст',
            'news_id' => '10',
        ]);
        Comment::create([
            'user_name'=> 'Alex3',
            'user_email'=>'mail@mail.mail',
            'comment_theme'=>'третья тема',
            'comment_text' => 'третий текст',
            'news_id' => '1',
        ]);
        Comment::create([
            'user_name'=> 'Alex4',
            'user_email'=>'dfsfsdf@sffd.sfdsf',
            'comment_theme'=>'четвёртая тема',
            'comment_text' => 'четвёртый текст',
            'news_id' => '3',
        ]);
        Comment::create([
            'user_name'=> 'Alex5',
            'user_email'=>'fgfdgd@fddgf.dffffff',
            'comment_theme'=>'пятая тема',
            'comment_text' => 'пятый текст',
            'news_id' => '6',
        ]);
        Comment::create([
            'user_name'=> 'Alex6',
            'user_email'=>'efxxxxx@fdxxx.dfxxx',
            'comment_theme'=>'шестая тема',
            'comment_text' => 'шестой текст',
            'news_id' => '15',
        ]);
    }
}
