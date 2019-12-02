<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $truncate = [
            'users',
            'products',
            'reviews',
        ];
        // To remove previous data from database
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($truncate as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // $this->call(UsersTableSeeder::class);

        factory(App\User::class,5)->create();
        factory(App\Model\Product::class,50)->create();
        factory(App\Model\Review::class,50)->create();
    }
}
