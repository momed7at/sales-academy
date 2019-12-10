<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10;$i++)
        {
            $user = new User;
            $user->name="Mohamed";
            $user->email="mo".$i."@mo.com";
            $user->gender="male ".$i;
            $user->birth_date=Carbon::create('2000', '01', '01');
            $user->phone="0112345678".$i;
            $user->address="hello world".$i;
            $user->job_title ="senior".$i;
            $user->password="123456789";
            $user->save();
        }
    }
}
