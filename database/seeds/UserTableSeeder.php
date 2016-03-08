<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'first_name' => 'Fabio',
            'last_name' => 'Monti',
            'username' => 'Haseo Xth',
            'slug_username' => 'haseo-xth',
            'email' => 'fabio.monti@gmail.com',
            'password' => \Hash::make('123456')
        ]);

        User::create([
            'first_name' => 'Sara',
            'last_name' => 'Dotti',
            'username' => 'Atoli 16',
            'slug_username' => 'atoli16',
            'email' => 'sara.dotti@hotmail.it',
            'password' => \Hash::make('654321')
        ]);


        User::create([
            'first_name' => 'Elisa',
            'last_name' => 'Dotti',
            'username' => 'The Pest 2009',
            'slug_username' => 'the-pest-2009',
            'email' => 'elisa.dotti@fabiomonti.it',
            'password' => \Hash::make('654321')
        ]);

        User::create([
            'first_name' => 'Gabriel',
            'last_name' => 'Monti',
            'username' => 'Earthquake 2013',
            'slug_username' => 'earthquake2013',
            'email' => 'gabriel.monti@fabiomonti.it',
            'password' => \Hash::make('654321')
        ]);

        User::create([
            'first_name' => 'Rosalba',
            'last_name' => 'Pullara',
            'username' => 'La Pully',
            'slug_username' => 'la-pully',
            'email' => 'la-pully@fabiomonti.it',
            'password' => \Hash::make('lapully')
        ]);

        User::create([
            'first_name' => 'Adriano',
            'last_name' => 'Finatti',
            'username' => 'Il rompipalle',
            'slug_username' => 'il-rompipalle',
            'email' => 'a.finatti@fabiomonti.it',
            'password' => \Hash::make('finatti')
        ]);

        User::create([
            'first_name' => 'Ilaria',
            'last_name' => 'Dotti',
            'username' => 'Iladotti',
            'slug_username' => 'iladotti',
            'email' => 'ilaria.dotti@hotmail.it',
            'password' => \Hash::make('654321')
        ]);

        User::create([
            'first_name' => 'Luisa',
            'last_name' => 'Dotti',
            'username' => 'la Suocera 2.0',
            'slug_username' => 'la-suocera-2-0',
            'email' => 'luisa.dotti@hotmail.it',
            'password' => \Hash::make('654321')
        ]);



    }
}
