<?php
use Illuminate\Database\Seeder;
use App\Model\Pages;

class AboutTableSeeder extends Seeder
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
                'title' => 'THE FIRST WEST SUMATRAN AND JAPANESE FUSION RESTAURANT',
                'content' => "West Sumatra's dining scene is well-known for its spiciness and the richness of its ingredients. It is served from simple 'kaki lima' food stalls to some famous franchised restaurants across the country.
                    West Sumatran food has becoming the Nation's favorite. Yet, the country has been lacking in innovative cuisine that is based on these authentic traditional recipes. Until now.
                    Suntiang Restaurant is the first to combine authentic West Sumatran recipes in a Japanese style. It is reflected in our extensive menus, from Ayam Pop Roll to Otak Tempura Balado.
                    Suntiang Restaurant brings West Sumatran cuisine to a new level, serving more than 50 different types of fusion menu. Our favorites are; Edamame Balado, Beef Rinds Miso Soup, Rendang Roll, Gulai Ramen, Rendang Tamago Bowl, Sizzling Beef Tongue with Green Chilli and Asam Pade Sauce. For the dessert, we bring an old recipe from our grandmothers, Laman Katan Sarikayo.
                    Our dedicated chef with years of experience in Japanese restaurants. He combines his skill in Japanese food with hundred years recipes from our grandmothers, creating a feast to your taste buds.",
                'opening_hour' => 'Monday-Sunday: 10:00 - 22:00 WIB',
                'reservation_info' => 'Suntiang Grand Indonesia, 021-2358044
                    Suntiang Setiabudi One, 021-5257393
                    Suntiang Catering, 021-5260 777 / 082311999426',
                'promo' => 'For interviews/photos, contact',
                'contact_person' => 'info@suntiang.com / Mobile: (62)812 9326 0002 (Mr.Dono)',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
        	],
        ];

        foreach ($permission as $key => $value) {
        	Pages::insertAbout($value);
        }
    }
}
