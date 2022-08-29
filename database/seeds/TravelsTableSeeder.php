<?php

use Illuminate\Database\Seeder;

use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $countries = [
            'Parigi', 'Dublino', 'Mosca', 'Londra', 'Mumbai', 'ChiangMai', 'Manila', 'ShangHai', 'Kyoto', 'Malta', 'New Tork', 'Seoul', 'Pechino', 'Sri Lanka', 'Bangkok', 'Delhi', 'Hanoi', 'Sidney', 'Melbourne', 'Doha'
        ];

        $hotels = [
            'Das Park Hotel', 'Dog Bark Park Inn', 'Burj al Arab Hotel', 'Kokopelli Cave', 'One By the Five',
            'Bjorli Snow Hotel',  'Hotel Yunak Evleri', 'De Vrouwe van Stavoren Hotel',  'Jumbo Hostel', 'Hotel Quinta Real Zacatecas', 'Malmaison Oxford Castle', 'Ariau Amazon Towers Hotel', 'Wigwam Motel', 'Palacio de Sal',  'Jules Undersea Lodge', ' Wanderlust Hotel', 'The Whitepod Resort', 'Hotel Marina Bay Sands'
        ];


        for($i = 1; $i <= 5; $i++) {
            // Creare una nuova istanza
            $travel_detail = new Travel();

            $travel_detail->destination = $faker->randomElement($countries);
            $travel_detail->hotel = $faker->randomElement($hotels);
            $travel_detail->services =  $faker->paragraphs(2, true);
            $travel_detail->departure_day = $faker->date();
            $travel_detail->return_day = $faker->date();
            $travel_detail->price = $faker->randomFloat(2, 300, 10000);
            $travel_detail->is_avalaible = rand(0, 1);

            $travel_detail->save();
        }
    }
}
