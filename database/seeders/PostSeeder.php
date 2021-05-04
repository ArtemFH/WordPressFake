<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Bushwa',
                'description' => 'Ut enim ad minima veniam, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat? Ut enim ad minima veniam, consectetur adipiscing elit, facere possimus,...',
                'image' => 'ArtemFH.png',
                'created_at' => '2021-02-03 17:11:59'
            ],
            [
                'title' => 'Gigot',
                'description' => 'Et harum quidem rerum facilis est et expedita distinctio, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum,...',
                'image' => 'ArtemFH.png',
                'created_at' => '2021-02-05 12:13:59'
            ],
            [
                'title' => 'Isophene',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate, qui...',
                'image' => 'ArtemFH.png',
                'created_at' => '2020-07-03 17:11:59'
            ],
            [
                'title' => 'Drysalter',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem! Sed...',
                'image' => 'ArtemFH.png',
                'created_at' => '2021-09-03 17:04:59'
            ],
            [
                'title' => 'Xenolalia',
                'description' => 'Nemo enim ipsam voluptatem, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem! Sed ut perspiciatis, consectetur adipiscing elit, sunt in...',
                'image' => 'ArtemFH.png',
                'created_at' => '2021-01-09 13:03:59'
            ]
        ];
        DB::table('posts')->insert($posts);
    }
}
