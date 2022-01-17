<?php

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $packages = [
            [
                'destination' => 'Rome',
                'means_of_transport' => 'train',
                'price' => '300.00',
                'stay_length' => '5',
                'image' => 'https://www.thetrainline.com/cms/media/1473/italy-rome-sunset.jpg?mode=crop&width=660&height=440&quality=70',
            ],
            [
                'destination' => 'London',
                'means_of_transport' => 'plane',
                'price' => '720.00',
                'stay_length' => '9',
                'image' => 'https://www.vivalingue.com/wp-content/uploads/2019/08/STUDIARE-A-LONDRA-1900x1080.jpg',
            ],
            [
                'destination' => 'Jerusalem',
                'means_of_transport' => 'plane',
                'price' => '400.00',
                'stay_length' => '5',
                'image' => 'https://www.touristjordan.com/wp-content/uploads/2017/10/Jerusalem-Tourist-Israel.jpg',
            ],
            [
                'destination' => 'Sri-Lanka',
                'means_of_transport' => 'plane',
                'price' => '600.00',
                'stay_length' => '6',
                'image' => 'https://scontent.ccdn.cloud/image/vivitravels-it/9f53c0fd-4736-4aa2-bd67-15d81a9a4725/1200x630.jpg',
            ],
            [
                'destination' => 'Procida',
                'means_of_transport' => 'ship',
                'price' => '770.00',
                'stay_length' => '6',
                'image' => 'https://www.turismo.it/typo3temp/pics/7a1f58ad3b.jpg',
            ],
            [
                'destination' => 'Drew',
                'means_of_transport' => 'Rocket',
                'price' => '9999.00',
                'stay_length' => '127',
                'image' => 'https://i.postimg.cc/Zn7MsKbz/20210102-133658.jpg',
            ],
        ];
        foreach ($packages as $package) {
            $_package = new Package();
            $_package->destination = $package['destination'];
            $_package->means_of_transport = $package['means_of_transport'];
            $_package->price = $package['price'];
            $_package->stay_length = $package['stay_length'];
            $_package->image = $package['image'];
            $_package->save();
        }
    }
}
