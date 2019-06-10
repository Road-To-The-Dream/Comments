<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_name' => 'Sergey',
                'email' => 'your@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'First comment',
                'parent_id' => 0,
                'parent_path' => '/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 12:13:13'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'you@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Third comment',
                'parent_id' => 1,
                'parent_path' => '1/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 12:14:13'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'email@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Second comment',
                'parent_id' => 0,
                'parent_path' => '/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 12:16:1'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'yo@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Third comment',
                'parent_id' => 1,
                'parent_path' => '1/2/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 13:13:13'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'y@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Third comment',
                'parent_id' => 0,
                'parent_path' => '/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 14:13:13'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'u@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Third comment',
                'parent_id' => 1,
                'parent_path' => '1/2/3/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 14:14:13'
            ],
            [
                'user_name' => 'Sergey',
                'email' => 'ou@gmail.com',
                'home_page' => '',
                'file' => 'qdqwdqw',
                'text' => 'Third comment',
                'parent_id' => 0,
                'parent_path' => '/',
                'ip' => '127.0.0.1',
                'browser' => 'Google',
                'created_at' => '2019-06-10 14:20:13'
            ],
        ];

        DB::table('comments')->insert($data);
    }
}
