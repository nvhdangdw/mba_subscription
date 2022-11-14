<?php

use Illuminate\Database\Seeder;

class MemberSubscriptionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $statuses = [
            ['id'=>0,'name'=>'EXPIRED'],
            ['id'=>1,'name'=>'AVAILABLE'],
            ['id'=>2,'name'=>'ACTIVATED'],            
            ['id'=>3,'name'=>'PENDING'],
        ];

        DB::table('member_subscription_status')->insert($statuses);

        
    }
}
