<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert([
        [
          'username' => 'テストユーザー',
          'mail' => 'tumura14@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー2',
          'mail' => 'test2@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー3',
          'mail' => 'test3@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー4',
          'mail' => 'test4@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー5',
          'mail' => 'test5@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー6',
          'mail' => 'test6@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー7',
          'mail' => 'test7@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー8',
          'mail' => 'test8@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー9',
          'mail' => 'test9@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー10',
          'mail' => 'test10@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],

        [
          'username' => 'テストユーザー11',
          'mail' => 'test11@yahoo.co.jp',
          'password' => Hash::make('secret'),
          'bio' => 'テストのユーザーデです。',
          'images' => 'dawn.png',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ]);
     }
}
