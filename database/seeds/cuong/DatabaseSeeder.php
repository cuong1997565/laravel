<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(NotebooksTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
    }
}

class CategoryDatabaseSeeder extends Seeder{
        public function run(){
            DB::table('categories')->insert([
            // [
            // 'name' => 'about',
            // 'color' => 'blue'
            // ]
              [
                'name' => 'cooperation',
                'color' => 'pink'
              ],
              [
                 'name' => 'contact',
                  'color'=> 'red'
              ]
             ]);
        }
}

class SlideDatabaseSeeder extends Seeder{
          public function run(){
               DB::table('slides')->insert([
                    [
                        'image' => 'slide.jpg',
                        'status' => 1
                    ],
                    [
                        'image' => 'slide1-1.jpg',
                        'status' => 0
                    ],
               ]);
          }
}

 class UserDatabaseSeeder extends Seeder{
         public function run(){
            DB::table('users')->insert([
                [
                    'name'     => 'nguyen van a',
                    'email'    => 'nguyenvana@gmail.com',
                    'password' => bcrypt('123456')
                ],
                 [
                    'name'     => 'supperadmin',
                    'email'    => 'supperadmin@gmail.com',
                    'password' => bcrypt('123456')
                ]

                ]);

           }
 }

 class PostDatabaseSeeder extends Seeder{
      public function run(){
         DB::table('posts')->insert([
            // [
            //     'title' => 'Donec elementum dui semper, pretium dui quis, pre-tium.Nunc quis ornare odio',
            //     'content' => 'The summer before my junior year in high school, my family and I took a trip to.',
            //     'image'  => 'slide1-1.jpg',
            //     'category_id' => 2,
            //     'status' => 1,
            //     'hot'    => 1,
            //     'author_id' => 2
            // ],

            // [
            //     'title' => ' Maecenas quis lobortis nunc.Nullam sit amet augue vel odio congue vulputate a ut nisi',
            //     'content' => 'The summer before my junior year in high school, my family and I took a trip.',
            //     'image'  => 'slide1-2.jpg',
            //     'category_id' => 2,
            //     'status' => 1,
            //     'hot'    => 1,
            //     'author_id' => 2
            // ]
            [
                'title' => 'Proin congue elit fringilla',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'slide2-1.jpg',
                'category_id' => 3,
                'status' => 0,
                'hot'    => 1,
                'author_id' => 1
            ],

              [
                'title' => 'bai viet so 5',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'anh-album1.jpg',
                'category_id' => 1,
                'status' => 0,
                'hot'    => 1,
                'author_id' => 1
            ],

            [
                'title' => 'bai viet so 6',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'anh-album2.jpg',
                'category_id' => 1,
                'status' => 1,
                'hot'    => 1,
                'author_id' => 1
            ],

            [
                'title' => 'bai viet so 7',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'anh-album3.jpg',
                'category_id' => 1,
                'status' => 1,
                'hot'    => 1,
                'author_id' => 1
            ],

            [
                'title' => 'bai viet so 8',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'anh-album7.jpg',
                'category_id' => 1,
                'status' => 1,
                'hot'    => 1,
                'author_id' => 1
            ],

             [
                'title' => 'bai viet so 9',
                'content' => 'sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna',
                'image'  => 'anh-album6.jpg',
                'category_id' => 1,
                'status' => 1,
                'hot'    => 1,
                'author_id' => 1
            ],



            ]);
      }
 }
