<?php
use Illuminate\Database\Seeder;
use App\Model\Promo;

class PromoTableSeeder extends Seeder
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
                'image' => 'promo.jpg',
                'description' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
            [
                'image' => 'promo.jpg',
                'description' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
            [
                'image' => 'promo.jpg',
                'description' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
            [
                'image' => 'promo.jpg',
                'description' => "Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.
                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.",
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Promo::create($value);
        }
    }
}
