<?php
use Illuminate\Database\Seeder;
use App\Model\Sessions;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
                'id' => 'ury7373899rruejejfifmrj',
                'user_id' => 1,
                'ip_address' => '192.168.1.12',
                'user_agent' => 'web-kit',
                'payload' => 'ury7373899rruejejfifmrj',
                'last_activity' => '2017-03-12 14:20:11',
            ],
        	[
                'id' => 'ury7373899rruewe334ifmrj',
                'user_id' => 1,
                'ip_address' => '192.168.1.12',
                'user_agent' => 'web-kit',
                'payload' => 'ury7373899rruejejfifmrj',
                'last_activity' => '2017-03-12 14:20:11',
            ],
        ];

        foreach ($permission as $key => $value) {
        	Sessions::create($value);
        }
    }
}
