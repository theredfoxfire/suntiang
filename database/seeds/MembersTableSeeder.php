<?php
use Illuminate\Database\Seeder;
use App\Model\Members;

class MembersTableSeeder extends Seeder
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
                'id' => 1,
                'user_id' => 2,
                'name' => 'Juki Suprime',
                'email' => 'juki@gmail.com',
                'phone' => '6283793839',
                'bank_account_number' => '03928290202',
                'bank_account_name' => 'Juki Suprime',
                'bank_name' => 'Bank BNI',
                'credit_card_number' => '02233433',
                'credit_card_name' => 'Juki Suprime',
                'birthdate' => '1998-02-23',
                'sex' => 1,
                'address' => 'Jala kolang-kolang',
                'district_id' => '122',
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'name' => 'Juki Suprime',
                'email' => 'juki168@gmail.com',
                'phone' => '6283793839',
                'bank_account_number' => '03928290202',
                'bank_account_name' => 'Juki Suprime',
                'bank_name' => 'Bank BNI',
                'credit_card_number' => '02233433',
                'credit_card_name' => 'Juki Suprime',
                'birthdate' => '1998-02-23',
                'sex' => 1,
                'address' => 'Jala kolang-kolang',
                'district_id' => '122',
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Members::create($value);
        }
    }
}
