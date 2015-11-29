<?php

use Illuminate\Database\Seeder;

class ProductBuildingTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		\DB::table('product')->truncate();

		$now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('product')->insert(array(
			0 => array(
				'name' => 'Clothes',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_1.jpg',
				'retail_price' => 170,
				'original_price' => 170,
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array(
				'name' => 'Cream Jacket',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_8.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array(
				'name' => 'Dress',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_6.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array(
				'name' => 'Ladies Jacket',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_10.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array(
				'name' => 'Dress',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_7.jpg',
				'retail_price' => 120,
				'original_price' => 120,
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array(
				'name' => 'Colourful Trousers',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_9.jpg',
				'retail_price' => 18,
				'original_price' => 18,
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array(
				'name' => 'Cream Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_3.jpg',
				'retail_price' => 28,
				'original_price' => 28,
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array(
				'name' => 'Cream Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_5.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			8 => array(
				'name' => 'Yellow Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_7.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
			9 => array(
				'name' => 'Pink Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_6.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
			10 => array(
				'name' => 'White Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_9.jpg',
				'retail_price' => 170,
				'original_price' => 170,
				'created_at' => $now,
				'updated_at' => $now,
			),
			11 => array(
				'name' => 'Cream Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_4.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			12 => array(
				'name' => 'Cream Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_5.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			13 => array(
				'name' => 'Yellow Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_6.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			14 => array(
				'name' => 'Pink Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_3.jpg',
				'retail_price' => 120,
				'original_price' => 120,
				'created_at' => $now,
				'updated_at' => $now,
			),
			15 => array(
				'name' => 'Pink Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_1.jpg',
				'retail_price' => 38,
				'original_price' => 38,
				'created_at' => $now,
				'updated_at' => $now,
			),
			16 => array(
				'name' => 'Green Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_7.jpg',
				'retail_price' => 38,
				'original_price' => 39,
				'created_at' => $now,
				'updated_at' => $now,
			),
			17 => array(
				'name' => 'Blue Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_8.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
			18 => array(
				'name' => 'White Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_8.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			19 => array(
				'name' => 'Cream Shoulder Beg',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 68,
				'subcat_level' => 1,
				'photo_1' => 'bag_10.jpg',
				'retail_price' => 40,
				'original_price' => 40,
				'created_at' => $now,
				'updated_at' => $now,
			),
			20 => array(
				'name' => 'Pink Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_9.jpg',
				'retail_price' => 150,
				'original_price' => 150,
				'created_at' => $now,
				'updated_at' => $now,
			),
			21 => array(
				'name' => 'Red Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_6.jpg',
				'retail_price' => 210,
				'original_price' => 210,
				'created_at' => $now,
				'updated_at' => $now,
			),
			22 => array(
				'name' => 'Peach Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_5.jpg',
				'retail_price' => 280,
				'original_price' => 280,
				'created_at' => $now,
				'updated_at' => $now,
			),
			23 => array(
				'name' => 'Pink Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_1.jpg',
				'retail_price' => 175,
				'original_price' => 175,
				'created_at' => $now,
				'updated_at' => $now,
			),
			24 => array(
				'name' => 'Cream Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_7.jpg',
				'retail_price' => 128,
				'original_price' => 128,
				'created_at' => $now,
				'updated_at' => $now,
			),
			25 => array(
				'name' => 'Black Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_10.jpg',
				'retail_price' => 56,
				'original_price' => 56,
				'created_at' => $now,
				'updated_at' => $now,
			),
			26 => array(
				'name' => 'Yellow Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_8.jpg',
				'retail_price' => 56,
				'original_price' => 56,
				'created_at' => $now,
				'updated_at' => $now,
			),
			27 => array(
				'name' => 'Pink Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_9.jpg',
				'retail_price' => 56,
				'original_price' => 56,
				'created_at' => $now,
				'updated_at' => $now,
			),
			28 => array(
				'name' => 'Pink Purse',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'bag_8.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
			29 => array(
				'name' => 'Stripe Wallet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 117,
				'subcat_level' => 1,
				'photo_1' => 'wallet_3.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
			30 => array(
				'name' => 'Black & Eclare Scarf',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_9.jpg',
				'retail_price' => 580,
				'original_price' => 580,
				'created_at' => $now,
				'updated_at' => $now,
			),
			31 => array(
				'name' => 'Colourful Bracelet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_2.jpg',
				'retail_price' => 38,
				'original_price' => 38,
				'created_at' => $now,
				'updated_at' => $now,
			),
			32 => array(
				'name' => 'Bracelet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_3.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			33 => array(
				'name' => 'Colourful Bracelet',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_8.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			34 => array(
				'name' => 'Purple Crystal Ear Ring',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_1.jpg',
				'retail_price' => 120,
				'original_price' => 120,
				'created_at' => $now,
				'updated_at' => $now,
			),
			35 => array(
				'name' => 'Perfume',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_4.png',
				'retail_price' => 320,
				'original_price' => 320,
				'created_at' => $now,
				'updated_at' => $now,
			),
			36 => array(
				'name' => 'Pibbon Style Ear Ring',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_6.jpg',
				'retail_price' => 70,
				'original_price' => 70,
				'created_at' => $now,
				'updated_at' => $now,
			),
			37 => array(
				'name' => 'Sunglasses',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_7.jpg',
				'retail_price' => 70,
				'original_price' => 70,
				'created_at' => $now,
				'updated_at' => $now,
			),
			38 => array(
				'name' => 'Black Sunglasses',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_7.jpg',
				'retail_price' => 70,
				'original_price' => 70,
				'created_at' => $now,
				'updated_at' => $now,
			),
			39 => array(
				'name' => 'Blue and Cream Belt',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 118,
				'subcat_level' => 1,
				'photo_1' => 'accessories_5.jpg',
				'retail_price' => 50,
				'original_price' => 50,
				'created_at' => $now,
				'updated_at' => $now,
			),
			40 => array(
				'name' => 'Ladies Pink Jacket',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_5.jpg',
				'retail_price' => 170,
				'original_price' => 170,
				'created_at' => $now,
				'updated_at' => $now,
			),
			41 => array(
				'name' => 'Male Purple Jacket',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_4.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			42 => array(
				'name' => 'Pink Gym Dress',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_4.jpg',
				'retail_price' => 48,
				'original_price' => 48,
				'created_at' => $now,
				'updated_at' => $now,
			),
			43 => array(
				'name' => 'Colourful Sports Dress',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_3.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			44 => array(
				'name' => 'Gym Short',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'ladies_wear_2.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			45 => array(
				'name' => 'Male Gym Cloth',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_1.jpg',
				'retail_price' => 70,
				'original_price' => 70,
				'created_at' => $now,
				'updated_at' => $now,
			),
			46 => array(
				'name' => 'Dark Gym Cloth',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_8.jpg',
				'retail_price' => 80,
				'original_price' => 80,
				'created_at' => $now,
				'updated_at' => $now,
			),
			47 => array(
				'name' => 'Blue Gym Bag',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'wallet_2.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			48 => array(
				'name' => 'Black Gym Bag',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'bag_11.jpg',
				'retail_price' => 160,
				'original_price' => 160,
				'created_at' => $now,
				'updated_at' => $now,
			),
			49 => array(
				'name' => 'Pink Gym Bag',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 56,
				'subcat_level' => 1,
				'photo_1' => 'bag_12.jpg',
				'retail_price' => 160,
				'original_price' => 160,
				'created_at' => $now,
				'updated_at' => $now,
			),
			50 => array(
				'name' => 'Sports Shoe',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_7.jpg',
				'retail_price' => 170,
				'original_price' => 170,
				'created_at' => $now,
				'updated_at' => $now,
			),
			51 => array(
				'name' => 'Ladies Heels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_7.jpg',
				'retail_price' => 350,
				'original_price' => 350,
				'created_at' => $now,
				'updated_at' => $now,
			),
			52 => array(
				'name' => 'Male Blue Shoe',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_3.jpg',
				'retail_price' => 80,
				'original_price' => 80,
				'created_at' => $now,
				'updated_at' => $now,
			),
			53 => array(
				'name' => 'Cream Heels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_2.jpg',
				'retail_price' => 45,
				'original_price' => 45,
				'created_at' => $now,
				'updated_at' => $now,
			),
			54 => array(
				'name' => 'Black Heels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_6.jpg',
				'retail_price' => 120,
				'original_price' => 120,
				'created_at' => $now,
				'updated_at' => $now,
			),
			55 => array(
				'name' => 'Beach Slipper',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_4.jpg',
				'retail_price' => 20,
				'original_price' => 20,
				'created_at' => $now,
				'updated_at' => $now,
			),
			56 => array(
				'name' => 'Blue Male Shoe',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_3.jpg',
				'retail_price' => 20,
				'original_price' => 20,
				'created_at' => $now,
				'updated_at' => $now,
			),
			57 => array(
				'name' => 'Cream Ladies Heels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_5.jpg',
				'retail_price' => 20,
				'original_price' => 20,
				'created_at' => $now,
				'updated_at' => $now,
			),
			58 => array(
				'name' => 'Pink Scandels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'l_l_1.jpg',
				'retail_price' => 20,
				'original_price' => 20,
				'created_at' => $now,
				'updated_at' => $now,
			),
			59 => array(
				'name' => 'Beach Scandels',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 67,
				'subcat_level' => 1,
				'photo_1' => 'accessories_2.jpg',
				'retail_price' => 20,
				'original_price' => 20,
				'created_at' => $now,
				'updated_at' => $now,
			),
			60 => array(
				'name' => 'Yellow Shoulder Bag',
				'brand_id' => 1,
				'category_id' => 4,
				'subcat_id' => 115,
				'subcat_level' => 1,
				'photo_1' => 'man_wear_7.jpg',
				'retail_price' => 30,
				'original_price' => 30,
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
	}
}