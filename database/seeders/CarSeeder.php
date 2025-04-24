<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
  {
//        $faker = Faker::create();
//        $userIDs = User::pluck('id')->toArray();
//        $brandIDs = Brand::pluck('id')->toArray();
//        $categoryIDs = Category::pluck('id')->toArray();
//        $colorIDs = Color::pluck('id')->toArray();
//        $paymentMethods = ['Credit Card', 'Debit Card', 'Cash', 'Bank Transfer'];
//        $paymentIDs = [];
//        foreach ($paymentMethods as $method) {
//            $payment = Payment::create(['name' => $method]);
//            $paymentIDs[] = $payment->id;
//        }
//
//        if (empty($userIDs) || empty($brandIDs) || empty($categoryIDs) || empty($colorIDs) || empty($paymentIDs)) {
//            $this->command->info('Please seed users, brands, categories, colors, and payments tables first.');
//            return;
//        }
//
//
//        $numberOfCars = 50;
//
//        for ($i = 0; $i < $numberOfCars; $i++) {
//            Car::create([
//                'user_id' => $faker->randomElement($userIDs),
//                'brand_id' => $faker->randomElement($brandIDs),
//                'category_id' => $faker->randomElement($categoryIDs),
//                'color_id' => $faker->randomElement($colorIDs),
//                'payment_id' => $faker->randomElement($paymentIDs),
//                'name' => $faker->word . ' ' . $faker->word,
//                'image' => $faker->imageUrl(640, 480, 'cars', true),
//                'note' => $faker->optional()->sentence,
//                'year' => $faker->year,
//                'price' => $faker->randomFloat(2, 10000, 100000),
//                'seats' => $faker->numberBetween(2, 7),
//                'status' => $faker->randomElement(['available', 'sold', 'pending']),
//                'created_at' => now(),
//                'updated_at' => now(),
//          ]);
//        }
//
//        $this->command->info('Car data seeded successfully!');
  }
}
