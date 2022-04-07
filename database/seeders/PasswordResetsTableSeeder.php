<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'amarqu2012@gmail.com',
                'token' => '$2y$10$eKMqMKi1nAWLV90ajOGMQeOt8mWGWmk4ioGOX7UpNFZoRk7sj8NwS',
                'created_at' => '2021-11-08 15:11:13',
            ),
        ));
        
        
    }
}