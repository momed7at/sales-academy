<?php

use App\Ac_category;
use Illuminate\Database\Seeder;
class Ac_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<10;$i++)
        {
            $category = new Ac_category;
            $category->cat_ar_name="تسويق";
            $category->cat_en_name="Marketing".$i;
            $category->cat_thumb="https://image.freepik.com/free-vector/marketing_23-2148021283.jpg";
            $category->cat_active= 1;
            $category->save();
        }
    }
}
