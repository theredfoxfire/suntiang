<?php
use Illuminate\Database\Seeder;
use App\Model\ContactInfo;

class ContactInfoTableSeeder extends Seeder
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
                'phone' => '0867676666',
                'address' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
            [
                'phone' => '08778888666',
                'address' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
            [
                'phone' => '0889899886',
                'address' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	ContactInfo::create($value);
        }
    }
}
