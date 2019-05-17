<?php

use Illuminate\Database\Seeder;

class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_reports')->truncate();
        DB::table('daily_reports')->insert([
            [    
                'user_id'        => 1,
                'title'          => 'テスト',
                'contents'       => 'テスト',
                'reporting_time' => '2019-03-06',
            ],
            [    
                'user_id'        => 2,
                'title'          => '長文テスト',
                'contents'       => '今日もとっても頑張りました。',
                'reporting_time' => '2019-02-09',
            ],
            [    
                'user_id'        => 3,
                'title'          => 'Carbonのテスト',
                'contents'       => 'テストテスト',
                'reporting_time' => '2019-01-29',
            ],
            [    
                'user_id'        => 4,
                'title'          => '日報テスト',
                'contents'       => '日報のテストです',
                'reporting_time' => '2019-01-28',
            ]
        ]);
    }
}
