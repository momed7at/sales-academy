<?php

use App\User_category;
use Illuminate\Database\Seeder;

class Ac_user_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1;$i<5;$i++)
        {
            for ($j=1;$j<4;$j++){
            $user_category = new User_category();
            $user_category->user_id=$i;

            $user_category->ac_category_id=$j;
            $user_category->save();
            }


        }
    }
}
