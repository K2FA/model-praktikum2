<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu1 = Menu::create([
            'title' => 'Nepalese MOMO',
            'desc' => 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies',
        ]);
        $menu2 = Menu::create([
            'title' => 'Burger',
            'desc' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. ',
        ]);
        $menu3 = Menu::create([
            'title' => 'Gurkha Chicken',
            'desc' => 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. ',
        ]);
    }
}
