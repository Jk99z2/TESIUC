<?php

namespace Modules\Tema\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Tema;

class TemaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Temas Seed
         * ------------------
         */

        // DB::table('temas')->truncate();
        // echo "Truncate: temas \n";

        Tema::factory()->count(20)->create();
        $rows = Tema::all();
        echo " Insert: temas \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
