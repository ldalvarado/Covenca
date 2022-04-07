<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RenewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('renews')->delete();
        
        
        
    }
}