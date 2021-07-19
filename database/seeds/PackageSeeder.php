<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Package;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 9 ; $i++) { 
            $package = new Package();
            $package->image_url=$faker->imageUrl(640,480,'Cities',true,$package->destination,true);
            $package->destination=$faker->city();
            $package->description=$faker->sentence(10);
            $package->duration=$faker->numberBetween(1, 21) . " days";
            $package->hotel=$faker->randomElement(['Hilton', 'Sheraton', 'Holiday Inn', 'Corinthia', 'Marriott']);
            $package->price=$faker->numberBetween(59,999);
            $package->save();
        }
    }
}
