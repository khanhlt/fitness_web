<?php
	use Illuminate\Database\Seeder;
	class CourseTableSeeder extends Seeder
	{
    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	 public function run()
     {
	 	DB::table('course')->insert([
			'id' => 1,
			'title' => "Barbell Full Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/64/Male/l/64_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 2,
			'title' => "Dips - Triceps Versio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/55/Male/l/55_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 3,
			'title' => "La",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1751/Male/l/1751_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 4,
			'title' => "Weighted Pull Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/928/Male/l/928_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 5,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/746/Male/l/746_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 6,
			'title' => "Spell Caster",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2041/Male/l/2041_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 7,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/25/Male/l/25_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 8,
			'title' => "Power Partials",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/270/Male/l/270_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 9,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/52/Male/l/52_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 10,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/42/Male/l/42_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 11,
			'title' => "Barbell Curls Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/300/Male/l/300_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 12,
			'title' => "Ar",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/82/Male/l/82_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 13,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/125/Male/l/125_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 14,
			'title' => "Weighted Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/926/Male/l/926_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 15,
			'title' => "Kettlebell Pistol Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/521/Male/l/521_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 16,
			'title' => "Narrow Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/272/Male/l/272_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 17,
			'title' => "Thigh Adductor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/153/Male/l/153_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 18,
			'title' => "Barbell Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/169/Male/l/169_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 19,
			'title' => "EZ-Bar Skullcrusher",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1641/Male/l/1641_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 20,
			'title' => "Reverse Grip Triceps Pushdow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/179/Male/l/179_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 21,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/150/Male/l/150_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 22,
			'title' => "Drop Push",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/779/Male/l/779_4.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 23,
			'title' => "Dumbbell Rear Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/109/Male/l/109_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 24,
			'title' => "Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/102/Male/l/102_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 25,
			'title' => "Barbell I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3311/Male/l/3311_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 26,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3193/Male/l/3193_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 27,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/75/Male/l/75_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 28,
			'title' => "Clam",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2843/Male/l/2843_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 29,
			'title' => "Otis-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2071/Male/l/2071_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 30,
			'title' => "3/4 Sit-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2001/Male/l/2001_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 31,
			'title' => "Trap Bar Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/921/Male/l/921_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 32,
			'title' => "Ri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1431/Male/l/1431_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 33,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/873/Male/l/873_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 34,
			'title' => "Bodyweight Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/855/Male/l/855_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 35,
			'title' => "Chair Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1821/Male/l/1821_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 36,
			'title' => "Dips - Chest Versio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/145/Male/l/145_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 37,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/36/Male/l/36_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 38,
			'title' => "Biceps Curl To Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4101/Male/l/4101_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 39,
			'title' => "Parallel Bar Dip",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1461/Male/l/1461_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 40,
			'title' => "Co",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/136/Male/l/136_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 41,
			'title' => "Low Cable Crossover",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1621/Male/l/1621_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 42,
			'title' => "Cocoo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2011/Male/l/2011_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 43,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/920/Male/l/920_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 44,
			'title' => "Plate Twist",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/106/Male/l/106_3.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 45,
			'title' => "Natural Glute Ham Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/847/Male/l/847_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 46,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1531/Male/l/1531_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 47,
			'title' => "Step Mill",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/656/Male/l/656_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 48,
			'title' => "Kettlebell Sumo High Pull",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/645/Male/l/645_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 49,
			'title' => "Deadlift with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/677/Male/l/677_3.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 50,
			'title' => "Trail Ru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/657/Male/l/657_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 51,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/368/Male/l/368_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 52,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/690/Male/l/690_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 53,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/344/Male/l/344_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 54,
			'title' => "Goblet Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/590/Male/l/590_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 55,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/255/Male/l/255_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 56,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/227/Male/l/227_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 57,
			'title' => "Dumbbell Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/234/Male/l/234_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 58,
			'title' => "Side to Side Box Shuffle",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/817/Male/l/817_4.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 59,
			'title' => "Power Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/185/Male/l/185_2.jpg",
			'level' => 1,
			'number_step' => 30,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 60,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/716/Male/l/716_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 61,
			'title' => "Seated Triceps Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/341/Male/l/341_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 62,
			'title' => "Exter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/869/Male/l/869_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 63,
			'title' => "Wide-Grip Rear Pull-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/191/Male/l/191_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 64,
			'title' => "Close-Grip EZ Bar Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/238/Male/l/238_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 65,
			'title' => "Cross Body Hammer Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/236/Male/l/236_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 66,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/230/Male/l/230_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 67,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/347/Male/l/347_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 68,
			'title' => "Barbell Ab Rollout - O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/206/Male/l/206_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 69,
			'title' => "Wide-Grip Barbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/33/Male/l/33_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 70,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/18/Male/l/18_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 71,
			'title' => "Ab Roller",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/110/Male/l/110_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 72,
			'title' => "Barbell Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3861/Male/l/3861_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 73,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/38/Male/l/38_2.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 74,
			'title' => "Dumbbell Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/85/Male/l/85_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 75,
			'title' => "Stiff-Legged Dumbbell Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/22/Male/l/22_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 76,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/17/Male/l/17_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 77,
			'title' => "Reverse Barbell Preacher Curls",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/8/Male/l/8_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 78,
			'title' => "Close-Grip Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/14/Male/l/14_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 79,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/34/Male/l/34_4.jpg",
			'level' => 3,
			'number_step' => 12,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 80,
			'title' => "T-Bar Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3381/Male/l/3381_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 81,
			'title' => "Mou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/608/Male/l/608_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 82,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/352/Male/l/352_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 83,
			'title' => "Tricep Dumbbell Kickback",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/348/Male/l/348_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 84,
			'title' => "Dumbbell O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/337/Male/l/337_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 85,
			'title' => "Neck Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/274/Male/l/274_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 86,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/192/Male/l/192_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 87,
			'title' => "Preacher Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/180/Male/l/180_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 88,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/219/Male/l/219_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 89,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3331/Male/l/3331_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 90,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/372/Male/l/372_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 91,
			'title' => "Seated Close-Grip Co",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/309/Male/l/309_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 92,
			'title' => "Shotgu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1971/Male/l/1971_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 93,
			'title' => "Burpee",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3153/Male/l/3153_3.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 94,
			'title' => "Dip Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/146/Male/l/146_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 95,
			'title' => "Bodyweight Mid Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1911/Male/l/1911_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 96,
			'title' => "Close-Grip EZ-Bar Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1701/Male/l/1701_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 97,
			'title' => "Dumbbell I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1311/Male/l/1311_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 98,
			'title' => "Ball Leg Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/861/Male/l/861_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 99,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/915/Male/l/915_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 100,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/831/Male/l/831_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 101,
			'title' => "Double Leg Butt Kick",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/778/Male/l/778_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 102,
			'title' => "V-Bar Pullup",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/140/Male/l/140_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 103,
			'title' => "Cable Crossover",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/132/Male/l/132_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 104,
			'title' => "Seated Cable Rows",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/45/Male/l/45_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 105,
			'title' => "Stairmaster",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/655/Male/l/655_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 106,
			'title' => "Muscle Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1501/Male/l/1501_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 107,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/937/Male/l/937_1.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 108,
			'title' => "Barbell Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/41/Male/l/41_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 109,
			'title' => "Leverage Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/897/Male/l/897_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 110,
			'title' => "Rowi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/652/Male/l/652_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 111,
			'title' => "Bicycli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/646/Male/l/646_1.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 112,
			'title' => "Dumbbell Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/323/Male/l/323_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 113,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/288/Male/l/288_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 114,
			'title' => "Dumbbell Bicep Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/223/Male/l/223_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 115,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/222/Male/l/222_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 116,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/883/Male/l/883_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 117,
			'title' => "V-Bar Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/177/Male/l/177_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 118,
			'title' => "Barbell Ab Rollout",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/207/Male/l/207_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 119,
			'title' => "Cable Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/163/Male/l/163_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 120,
			'title' => "Exercise Ball Pull-I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/121/Male/l/121_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 121,
			'title' => "Elliptical Trai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/648/Male/l/648_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 122,
			'title' => "Groi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/592/Male/l/592_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 123,
			'title' => "Dumbbell Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/321/Male/l/321_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 124,
			'title' => "Air Bike",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/209/Male/l/209_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 125,
			'title' => "Reverse Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/119/Male/l/119_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 126,
			'title' => "Narrow Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/271/Male/l/271_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 127,
			'title' => "Dumbbell Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/32/Male/l/32_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 128,
			'title' => "Hyperexte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/24/Male/l/24_1.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 129,
			'title' => "Dumbbell Goblet Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3711/Male/l/3711_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 130,
			'title' => "Wide-Grip Pull-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3961/Male/l/3961_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 131,
			'title' => "Cable O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/80/Male/l/80_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 132,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/76/Male/l/76_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 133,
			'title' => "Leg Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/57/Male/l/57_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 134,
			'title' => "Triceps Pushdow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/54/Male/l/54_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 135,
			'title' => "Wide-Grip Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/35/Male/l/35_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 136,
			'title' => "Butt Lift (Bridge)",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/99/Male/l/99_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 137,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/19/Male/l/19_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 138,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4571/Male/l/4571_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 139,
			'title' => "Weighted Suitcase Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2813/Male/l/2813_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 140,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2151/Male/l/2151_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 141,
			'title' => "Oblique Cable Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3293/Male/l/3293_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 142,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1231/Male/l/1231_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 143,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1761/Male/l/1761_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 144,
			'title' => "Weighted Jump Squat ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/887/Male/l/887_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 145,
			'title' => "Car Drivers",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1771/Male/l/1771_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 146,
			'title' => "Box Squat with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/666/Male/l/666_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 147,
			'title' => "Squat with Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/705/Male/l/705_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 148,
			'title' => "Dumbbell Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/328/Male/l/328_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 149,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/181/Male/l/181_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 150,
			'title' => "Push-Ups - Close Triceps Positio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/363/Male/l/363_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 151,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1941/Male/l/1941_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 152,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/101/Male/l/101_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 153,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3273/Male/l/3273_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 154,
			'title' => "Bodyweight Flyes",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1561/Male/l/1561_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 155,
			'title' => "Bottoms Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2021/Male/l/2021_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 156,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/936/Male/l/936_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 157,
			'title' => "Pla",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/908/Male/l/908_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 158,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/13/Male/l/13_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 159,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/48/Male/l/48_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 160,
			'title' => "Reverse Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/753/Male/l/753_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 161,
			'title' => "Sumo Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/722/Male/l/722_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 162,
			'title' => "Bodyweight Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4461/Male/l/4461_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 163,
			'title' => "Box Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/665/Male/l/665_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 164,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/370/Male/l/370_2.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 165,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/367/Male/l/367_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 166,
			'title' => "Wide-Grip Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/287/Male/l/287_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 167,
			'title' => "Fi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1681/Male/l/1681_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 168,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/688/Male/l/688_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 169,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/899/Male/l/899_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 170,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2723/Male/l/2723_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 171,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/519/Male/l/519_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 172,
			'title' => "Bear Crawl Sled Drags ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/730/Male/l/730_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 173,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/880/Male/l/880_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 174,
			'title' => "Seated Palms-Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/389/Male/l/389_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 175,
			'title' => "Seated O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/386/Male/l/386_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 176,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/371/Male/l/371_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 177,
			'title' => "Barbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/360/Male/l/360_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 178,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/345/Male/l/345_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 179,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/670/Male/l/670_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 180,
			'title' => "Narrow Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/269/Male/l/269_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 181,
			'title' => "Flexor I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/285/Male/l/285_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 182,
			'title' => "Dumbbell Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/319/Male/l/319_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 183,
			'title' => "Overhead Cable Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/213/Male/l/213_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 184,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4031/Male/l/4031_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 185,
			'title' => "Rocky Pull-Ups/Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/279/Male/l/279_2.jpg",
			'level' => 1,
			'number_step' => 12,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 186,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/193/Male/l/193_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 187,
			'title' => "EZ-Bar Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/210/Male/l/210_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 188,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/173/Male/l/173_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 189,
			'title' => "Cross-Body Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/124/Male/l/124_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 190,
			'title' => "Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/129/Male/l/129_2.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 191,
			'title' => "Close-Grip Barbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/23/Male/l/23_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 192,
			'title' => "Barbell Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2241/Male/l/2241_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 193,
			'title' => "Dumbbell Flyes",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/12/Male/l/12_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 194,
			'title' => "Spider Crawl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2061/Male/l/2061_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 195,
			'title' => "Triceps Pushdow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/143/Male/l/143_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 196,
			'title' => "Power Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/748/Male/l/748_3.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 197,
			'title' => "Wrist Roller",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/142/Male/l/142_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 198,
			'title' => "Rope Jumpi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/651/Male/l/651_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 199,
			'title' => "Seated Barbell Military Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/382/Male/l/382_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 200,
			'title' => "Gorilla Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/183/Male/l/183_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 201,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/380/Male/l/380_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 202,
			'title' => "Seated Dumbbell Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/364/Male/l/364_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 203,
			'title' => "Zottma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/204/Male/l/204_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 204,
			'title' => "Hammer Curls",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/147/Male/l/147_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 205,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/374/Male/l/374_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 206,
			'title' => "Weighted Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/334/Male/l/334_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 207,
			'title' => "Hyperexte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/47/Male/l/47_2.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 208,
			'title' => "Elbow to K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2031/Male/l/2031_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 209,
			'title' => "Reverse Flyes",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/375/Male/l/375_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 210,
			'title' => "Floor Glute-Ham Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1121/Male/l/1121_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 211,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/933/Male/l/933_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 212,
			'title' => "Olympic Squat ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/700/Male/l/700_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 213,
			'title' => "Seated Two-Arm Palms-Up Low-Pulley Wrist Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/7/Male/l/7_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 214,
			'title' => "Axle Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/750/Male/l/750_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 215,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/166/Male/l/166_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 216,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/187/Male/l/187_4.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 217,
			'title' => "Push Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/186/Male/l/186_3.jpg",
			'level' => 1,
			'number_step' => 14,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 218,
			'title' => "Leverage Shrug",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/898/Male/l/898_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 219,
			'title' => "Barbell Hip Thrust",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/661/Male/l/661_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 220,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5/Male/l/5_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 221,
			'title' => "Barbell Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3831/Male/l/3831_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 222,
			'title' => "Tire Flip",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/725/Male/l/725_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 223,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/864/Male/l/864_3.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 224,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/671/Male/l/671_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 225,
			'title' => "Deficit Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/679/Male/l/679_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 226,
			'title' => "Barbell Glute Bridge",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/662/Male/l/662_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 227,
			'title' => "Roma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3791/Male/l/3791_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 228,
			'title' => "Farmer's Walk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/682/Male/l/682_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 229,
			'title' => "Palms-Up Barbell Wrist Curl Over A Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/390/Male/l/390_1.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 230,
			'title' => "Hip Circles (pro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/874/Male/l/874_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 231,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/818/Male/l/818_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 232,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1841/Male/l/1841_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 233,
			'title' => "Power S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/703/Male/l/703_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 234,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/511/Male/l/511_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 235,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/366/Male/l/366_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 236,
			'title' => "Spider Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/178/Male/l/178_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 237,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/194/Male/l/194_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 238,
			'title' => "Roma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/751/Male/l/751_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 239,
			'title' => "Pushups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/70/Male/l/70_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 240,
			'title' => "Reverse Grip Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/128/Male/l/128_2.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 241,
			'title' => "Pullups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/46/Male/l/46_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 242,
			'title' => "Dumbbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1/Male/l/1_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 243,
			'title' => "Dumbbell V-Sit Cross Jab",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4751/Male/l/4751_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 244,
			'title' => "Palms-Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2/Male/l/2_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 245,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/134/Male/l/134_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 246,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2081/Male/l/2081_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 247,
			'title' => "Wrist Rotatio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1691/Male/l/1691_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 248,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1741/Male/l/1741_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 249,
			'title' => "T-Bar Row with Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1931/Male/l/1931_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 250,
			'title' => "Side Laterals to Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1791/Male/l/1791_3.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 251,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3941/Male/l/3941_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 252,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/882/Male/l/882_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 253,
			'title' => "Atlas Sto",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/659/Male/l/659_4.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 254,
			'title' => "Rickshaw Carry",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/742/Male/l/742_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 255,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/357/Male/l/357_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 256,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/354/Male/l/354_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 257,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/167/Male/l/167_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 258,
			'title' => "Split Squat with Dumbbells",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/800/Male/l/800_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 259,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/782/Male/l/782_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 260,
			'title' => "Pallof Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2713/Male/l/2713_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 261,
			'title' => "Li",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/951/Male/l/951_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 262,
			'title' => "Hack Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/56/Male/l/56_2.jpg",
			'level' => 1,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 263,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1211/Male/l/1211_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 264,
			'title' => "Straight-Arm Dumbbell Pullover",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/39/Male/l/39_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 265,
			'title' => "Isometric Wipers",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1571/Male/l/1571_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 266,
			'title' => "Glute Ham Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/685/Male/l/685_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 267,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/350/Male/l/350_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 268,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/144/Male/l/144_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 269,
			'title' => "Neutral-Grip Pull Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3951/Male/l/3951_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 270,
			'title' => "Weighted Ball Hyperexte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/332/Male/l/332_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 271,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/159/Male/l/159_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 272,
			'title' => "Dumbbell Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/322/Male/l/322_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 273,
			'title' => "Roma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2833/Male/l/2833_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 274,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2181/Male/l/2181_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 275,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/170/Male/l/170_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 276,
			'title' => "Bodyweight Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2161/Male/l/2161_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 277,
			'title' => "Wi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2051/Male/l/2051_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 278,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1871/Male/l/1871_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 279,
			'title' => "Rocket Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/812/Male/l/812_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 280,
			'title' => "Wi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/631/Male/l/631_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 281,
			'title' => "Jerk Dip Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/695/Male/l/695_3.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 282,
			'title' => "Yoke Walk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/726/Male/l/726_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 283,
			'title' => "Jefferso",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/283/Male/l/283_2.jpg",
			'level' => 1,
			'number_step' => 12,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 284,
			'title' => "Cuba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/199/Male/l/199_3.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 285,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/188/Male/l/188_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 286,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/149/Male/l/149_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 287,
			'title' => "Elevated Cable Rows",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/293/Male/l/293_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 288,
			'title' => "Ab Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/225/Male/l/225_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 289,
			'title' => "Weighted Sit-Ups - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/262/Male/l/262_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 290,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/273/Male/l/273_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 291,
			'title' => "Superma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/228/Male/l/228_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 292,
			'title' => "Barbell Shrug Behi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/216/Male/l/216_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 293,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/212/Male/l/212_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 294,
			'title' => "Two-Arm Dumbbell Preacher Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/266/Male/l/266_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 295,
			'title' => "Cross Over - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/257/Male/l/257_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 296,
			'title' => "Flutter Kicks",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/267/Male/l/267_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 297,
			'title' => "Middle Back Shrug",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/172/Male/l/172_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 298,
			'title' => "Butt-Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/127/Male/l/127_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 299,
			'title' => "Glute Kickback",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/98/Male/l/98_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 300,
			'title' => "Kettlebell Turkish Get-Up (Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/526/Male/l/526_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 301,
			'title' => "Seated Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/353/Male/l/353_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 302,
			'title' => "Bradford/Rocky Presses",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/291/Male/l/291_3.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 303,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/224/Male/l/224_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 304,
			'title' => "Power Jerk ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/702/Male/l/702_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 305,
			'title' => "Dumbbell Floor Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/680/Male/l/680_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 306,
			'title' => "Thigh Abductor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/154/Male/l/154_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 307,
			'title' => "Iliotibial Tract-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/594/Male/l/594_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 308,
			'title' => "Low Cable Triceps Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/157/Male/l/157_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 309,
			'title' => "Dumbbell Step Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/63/Male/l/63_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 310,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/218/Male/l/218_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 311,
			'title' => "Reverse Barbell Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/9/Male/l/9_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 312,
			'title' => "Alie",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4541/Male/l/4541_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 313,
			'title' => "Wide-Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4501/Male/l/4501_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 314,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4371/Male/l/4371_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 315,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/66/Male/l/66_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 316,
			'title' => "Roma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4091/Male/l/4091_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 317,
			'title' => "Cable Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/848/Male/l/848_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 318,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/342/Male/l/342_1.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 319,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/49/Male/l/49_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 320,
			'title' => "Zercher Squats",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/284/Male/l/284_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 321,
			'title' => "Cable Russia",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/940/Male/l/940_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 322,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/168/Male/l/168_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 323,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/74/Male/l/74_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 324,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/118/Male/l/118_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 325,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/356/Male/l/356_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 326,
			'title' => "Upright Cable Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/71/Male/l/71_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 327,
			'title' => "Box Jump (Multiple Respo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/766/Male/l/766_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 328,
			'title' => "Back Flyes - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/253/Male/l/253_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 329,
			'title' => "Seated Good Mor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/712/Male/l/712_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 330,
			'title' => "Close-Grip Dumbbell Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1611/Male/l/1611_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 331,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/138/Male/l/138_1.jpg",
			'level' => 1,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 332,
			'title' => "Tate Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/226/Male/l/226_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 333,
			'title' => "Cable Rope Overhead Triceps Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/220/Male/l/220_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 334,
			'title' => "Full Ra",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/182/Male/l/182_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 335,
			'title' => "Stiff Leg Barbell Good Mor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/86/Male/l/86_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 336,
			'title' => "Seated Back Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3401/Male/l/3401_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 337,
			'title' => "Pe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3841/Male/l/3841_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 338,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2783/Male/l/2783_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 339,
			'title' => "A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1811/Male/l/1811_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 340,
			'title' => "Reverse Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/912/Male/l/912_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 341,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/935/Male/l/935_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 342,
			'title' => "Cable Rear Delt Fly",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/867/Male/l/867_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 343,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/793/Male/l/793_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 344,
			'title' => "Supi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/838/Male/l/838_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 345,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/40/Male/l/40_2.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 346,
			'title' => "Bodyweight Reverse Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4051/Male/l/4051_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 347,
			'title' => "Cobra Triceps Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3133/Male/l/3133_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 348,
			'title' => "Straight Raises o",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1801/Male/l/1801_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 349,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1991/Male/l/1991_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 350,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/884/Male/l/884_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 351,
			'title' => "Yates Row Reverse Grip",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4321/Male/l/4321_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 352,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/732/Male/l/732_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 353,
			'title' => "Chest Push (multiple respo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/769/Male/l/769_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 354,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/789/Male/l/789_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 355,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/83/Male/l/83_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 356,
			'title' => "Joggi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/649/Male/l/649_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 357,
			'title' => "Floor Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/683/Male/l/683_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 358,
			'title' => "Bicycli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/647/Male/l/647_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 359,
			'title' => "Dumbbell Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2271/Male/l/2271_3.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 360,
			'title' => "Butt Kicks",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3143/Male/l/3143_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 361,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1351/Male/l/1351_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 362,
			'title' => "Cable Reverse Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/938/Male/l/938_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 363,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/919/Male/l/919_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 364,
			'title' => "Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/658/Male/l/658_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 365,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/879/Male/l/879_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 366,
			'title' => "Body Tricep Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1291/Male/l/1291_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 367,
			'title' => "Recumbe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/650/Male/l/650_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 368,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/376/Male/l/376_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 369,
			'title' => "Cable Hip Adductio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/312/Male/l/312_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 370,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/516/Male/l/516_1.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 371,
			'title' => "Mixed Grip Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/281/Male/l/281_1.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 372,
			'title' => "Cable Hammer Curls - Rope Attachme",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/189/Male/l/189_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 373,
			'title' => "Face Pull",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/681/Male/l/681_2.jpg",
			'level' => 3,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 374,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/589/Male/l/589_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 375,
			'title' => "Skati",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/654/Male/l/654_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 376,
			'title' => "Dumbbell Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/327/Male/l/327_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 377,
			'title' => "Weighted Sissy Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/335/Male/l/335_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 378,
			'title' => "Cable Rope Rear-Delt Rows",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/299/Male/l/299_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 379,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/229/Male/l/229_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 380,
			'title' => "Seated Dumbbell Palms-Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/385/Male/l/385_2.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 381,
			'title' => "Barbell Shrug",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/97/Male/l/97_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 382,
			'title' => "Freeha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/108/Male/l/108_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 383,
			'title' => "Stiff-Legged Barbell Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/21/Male/l/21_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 384,
			'title' => "Tuck Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/115/Male/l/115_2.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 385,
			'title' => "Straight-Arm Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/11/Male/l/11_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 386,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/16/Male/l/16_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 387,
			'title' => "Barbell Thruster",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4231/Male/l/4231_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 388,
			'title' => "Push-Up Wide",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1511/Male/l/1511_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 389,
			'title' => "Leverage Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/891/Male/l/891_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 390,
			'title' => "Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/733/Male/l/733_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 391,
			'title' => "Dumbbell Seated Box Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1151/Male/l/1151_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 392,
			'title' => "Rack Pulls",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/710/Male/l/710_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 393,
			'title' => "Split Jerk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/719/Male/l/719_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 394,
			'title' => "Bottoms-Up Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/507/Male/l/507_3.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 395,
			'title' => "Adva",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/502/Male/l/502_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 396,
			'title' => "Barbell Rollout from Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1961/Male/l/1961_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 397,
			'title' => "Bosu Ball Cable Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/932/Male/l/932_3.jpg",
			'level' => 1,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 398,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/740/Male/l/740_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 399,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1521/Male/l/1521_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 400,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/26/Male/l/26_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 401,
			'title' => "Leverage Chest Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/889/Male/l/889_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 402,
			'title' => "Rack Pull with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/741/Male/l/741_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 403,
			'title' => "Dumbbell O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/324/Male/l/324_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 404,
			'title' => "Jumpi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2943/Male/l/2943_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 405,
			'title' => "Giro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/292/Male/l/292_2.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 406,
			'title' => "Press Sit-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/203/Male/l/203_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 407,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/246/Male/l/246_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 408,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/689/Male/l/689_3.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 409,
			'title' => "Seated O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/297/Male/l/297_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 410,
			'title' => "Butterfly",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/214/Male/l/214_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 411,
			'title' => "Seated O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/387/Male/l/387_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 412,
			'title' => "Drag Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/174/Male/l/174_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 413,
			'title' => "Seated Side Lateral Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/378/Male/l/378_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 414,
			'title' => "Oblique Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/104/Male/l/104_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 415,
			'title' => "Upright Barbell Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/365/Male/l/365_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 416,
			'title' => "Plate Pi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/237/Male/l/237_3.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 417,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/148/Male/l/148_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 418,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/72/Male/l/72_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 419,
			'title' => "Reverse Triceps Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/358/Male/l/358_3.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 420,
			'title' => "Plie Dumbbell Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/43/Male/l/43_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 421,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1601/Male/l/1601_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 422,
			'title' => "Cable Iro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2111/Male/l/2111_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 423,
			'title' => "Side Wrist Pull",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/442/Male/l/442_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 424,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/50/Male/l/50_2.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 425,
			'title' => "Ru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/653/Male/l/653_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 426,
			'title' => "Leverage Iso Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/894/Male/l/894_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 427,
			'title' => "Seated Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/377/Male/l/377_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 428,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/362/Male/l/362_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 429,
			'title' => "Clock Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1581/Male/l/1581_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 430,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/643/Male/l/643_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 431,
			'title' => "Russia",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/208/Male/l/208_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 432,
			'title' => "Exercise Ball Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/117/Male/l/117_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 433,
			'title' => "Side To Side Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/280/Male/l/280_3.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 434,
			'title' => "Seated Flat Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/93/Male/l/93_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 435,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/361/Male/l/361_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 436,
			'title' => "Palms-Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4/Male/l/4_2.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 437,
			'title' => "Flat Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/90/Male/l/90_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 438,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/37/Male/l/37_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 439,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/697/Male/l/697_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 440,
			'title' => "Ma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4171/Male/l/4171_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 441,
			'title' => "Jog I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2963/Male/l/2963_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 442,
			'title' => "Kettlebell Thruster",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/641/Male/l/641_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 443,
			'title' => "Kettlebell O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/546/Male/l/546_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 444,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/504/Male/l/504_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 445,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/520/Male/l/520_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 446,
			'title' => "Triceps Pushdow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/343/Male/l/343_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 447,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/340/Male/l/340_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 448,
			'title' => "Cable I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/315/Male/l/315_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 449,
			'title' => "JM Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3341/Male/l/3341_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 450,
			'title' => "Seated Dumbbell Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/201/Male/l/201_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 451,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/158/Male/l/158_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 452,
			'title' => "Side Lateral Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/373/Male/l/373_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 453,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/339/Male/l/339_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 454,
			'title' => "U",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/139/Male/l/139_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 455,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/51/Male/l/51_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 456,
			'title' => "Barbell Hack Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/84/Male/l/84_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 457,
			'title' => "Scissors Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/813/Male/l/813_4.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 458,
			'title' => "Seated Cable Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/871/Male/l/871_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 459,
			'title' => "Calf Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/862/Male/l/862_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 460,
			'title' => "Good Mor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/686/Male/l/686_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 461,
			'title' => "Leg Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/53/Male/l/53_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 462,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/506/Male/l/506_3.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 463,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/669/Male/l/669_3.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 464,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/131/Male/l/131_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 465,
			'title' => "Exter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/232/Male/l/232_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 466,
			'title' => "Wide Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/744/Male/l/744_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 467,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/111/Male/l/111_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 468,
			'title' => "Low Pulley Row To Neck",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/156/Male/l/156_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 469,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/211/Male/l/211_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 470,
			'title' => "Barbell Rear Delt Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/307/Male/l/307_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 471,
			'title' => "Stomach Vacuum",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/243/Male/l/243_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 472,
			'title' => "Jackk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/91/Male/l/91_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 473,
			'title' => "Push-Ups With Feet Elevated",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/103/Male/l/103_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 474,
			'title' => "Pushups (Close a",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/81/Male/l/81_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 475,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/73/Male/l/73_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 476,
			'title' => "Push-Ups With Feet O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/126/Male/l/126_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 477,
			'title' => "Hammer Grip I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/60/Male/l/60_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 478,
			'title' => "Battli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1711/Male/l/1711_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 479,
			'title' => "Sledgehammer Swi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/916/Male/l/916_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 480,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/850/Male/l/850_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 481,
			'title' => "Barbell Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/308/Male/l/308_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 482,
			'title' => "Rocki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/200/Male/l/200_3.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 483,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1411/Male/l/1411_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 484,
			'title' => "Calf Press O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/215/Male/l/215_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 485,
			'title' => "Calf-Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/184/Male/l/184_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 486,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/231/Male/l/231_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 487,
			'title' => "Seated Calf Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/152/Male/l/152_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 488,
			'title' => "Reverse Cable Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/141/Male/l/141_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 489,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/65/Male/l/65_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 490,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/20/Male/l/20_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 491,
			'title' => "Step-up with K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2251/Male/l/2251_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 492,
			'title' => "Dumbbell Shrug",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/96/Male/l/96_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 493,
			'title' => "Rope Straight-Arm Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2171/Male/l/2171_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 494,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1591/Male/l/1591_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 495,
			'title' => "Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1851/Male/l/1851_3.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 496,
			'title' => "Barbell Step Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/62/Male/l/62_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 497,
			'title' => "Preacher Hammer Dumbbell Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/155/Male/l/155_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 498,
			'title' => "Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/113/Male/l/113_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 499,
			'title' => "Wide-Grip Lat Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/10/Male/l/10_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 500,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/6/Male/l/6_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 501,
			'title' => "Dead Bug",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2733/Male/l/2733_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 502,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2091/Male/l/2091_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 503,
			'title' => "Triceps Overhead Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/922/Male/l/922_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 504,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1361/Male/l/1361_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 505,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2101/Male/l/2101_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 506,
			'title' => "Rope Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/888/Male/l/888_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 507,
			'title' => "Deadlift with Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/678/Male/l/678_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 508,
			'title' => "Kettlebell Turkish Get-Up (Squat style)",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/527/Male/l/527_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 509,
			'title' => "Close-Grip Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/276/Male/l/276_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 510,
			'title' => "Leverage I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/893/Male/l/893_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 511,
			'title' => "Palms-Up Dumbbell Wrist Curl Over A Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3/Male/l/3_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 512,
			'title' => "Dumbbell Side Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/88/Male/l/88_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 513,
			'title' => "Dumbbell Rear Delt Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3751/Male/l/3751_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 514,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/513/Male/l/513_3.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 515,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1721/Male/l/1721_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 516,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/114/Male/l/114_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 517,
			'title' => "Cable Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/161/Male/l/161_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 518,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1671/Male/l/1671_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 519,
			'title' => "Cable Chest Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/870/Male/l/870_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 520,
			'title' => "Dumbbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1161/Male/l/1161_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 521,
			'title' => "Rope Climb",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1441/Male/l/1441_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 522,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/663/Male/l/663_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 523,
			'title' => "Two-Arm Kettlebell Military Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/530/Male/l/530_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 524,
			'title' => "Seated Palm-Up Barbell Wrist Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/388/Male/l/388_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 525,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1091/Male/l/1091_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 526,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1921/Male/l/1921_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 527,
			'title' => "Upright Row - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/261/Male/l/261_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 528,
			'title' => "Close-Grip EZ-Bar Curl with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1631/Male/l/1631_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 529,
			'title' => "Pallof Press With Rotatio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/934/Male/l/934_2.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 530,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/198/Male/l/198_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 531,
			'title' => "Sit-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/217/Male/l/217_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 532,
			'title' => "Kettlebell Pass Betwee",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/524/Male/l/524_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 533,
			'title' => "Circus Bell",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/668/Male/l/668_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 534,
			'title' => "Speed Squats",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/268/Male/l/268_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 535,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4781/Male/l/4781_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 536,
			'title' => "Neck Bridge Pro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3451/Male/l/3451_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 537,
			'title' => "Seated Barbell Twist",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/89/Male/l/89_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 538,
			'title' => "Board Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/664/Male/l/664_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 539,
			'title' => "Seated Calf Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/404/Male/l/404_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 540,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/415/Male/l/415_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 541,
			'title' => "Wide-Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3421/Male/l/3421_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 542,
			'title' => "Upper Back Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/450/Male/l/450_2.jpg",
			'level' => 2,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 543,
			'title' => "Split Squats",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/630/Male/l/630_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 544,
			'title' => "All Fours Quad Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/581/Male/l/581_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 545,
			'title' => "90/90 Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/578/Male/l/578_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 546,
			'title' => "Arm Circles",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/497/Male/l/497_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 547,
			'title' => "Triceps Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/448/Male/l/448_2.jpg",
			'level' => 3,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 548,
			'title' => "Iro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/597/Male/l/597_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 549,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/468/Male/l/468_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 550,
			'title' => "A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/623/Male/l/623_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 551,
			'title' => "Spi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/481/Male/l/481_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 552,
			'title' => "Seated Floor Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/473/Male/l/473_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 553,
			'title' => "Child's Pose",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/426/Male/l/426_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 554,
			'title' => "Rou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/435/Male/l/435_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 555,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3671/Male/l/3671_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 556,
			'title' => "Supi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/840/Male/l/840_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 557,
			'title' => "Elbow Circles",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/498/Male/l/498_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 558,
			'title' => "Pelvic Tilt I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/433/Male/l/433_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 559,
			'title' => "Rhomboids-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/616/Male/l/616_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 560,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2261/Male/l/2261_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 561,
			'title' => "Dy",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/587/Male/l/587_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 562,
			'title' => "Catch a",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/768/Male/l/768_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 563,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/478/Male/l/478_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 564,
			'title' => "Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/453/Male/l/453_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 565,
			'title' => "Shoulder Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/449/Male/l/449_2.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 566,
			'title' => "Squats - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/260/Male/l/260_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 567,
			'title' => "Forward Drag with Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/736/Male/l/736_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 568,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/298/Male/l/298_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 569,
			'title' => "Calves-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/625/Male/l/625_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 570,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/534/Male/l/534_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 571,
			'title' => "Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/801/Male/l/801_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 572,
			'title' => "Hip Lift with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/738/Male/l/738_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 573,
			'title' => "Crucifix",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/675/Male/l/675_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 574,
			'title' => "The Straddle",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/418/Male/l/418_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 575,
			'title' => "Seated Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/621/Male/l/621_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 576,
			'title' => "Looki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/455/Male/l/455_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 577,
			'title' => "Lower Back-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/601/Male/l/601_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 578,
			'title' => "Seated Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/619/Male/l/619_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 579,
			'title' => "World's Greatest Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/632/Male/l/632_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 580,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/400/Male/l/400_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 581,
			'title' => "Latissimus Dorsi-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/600/Male/l/600_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 582,
			'title' => "Hug K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/398/Male/l/398_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 583,
			'title' => "Calf Raise O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/242/Male/l/242_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 584,
			'title' => "A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/394/Male/l/394_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 585,
			'title' => "Seated Overhead Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/406/Male/l/406_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 586,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/444/Male/l/444_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 587,
			'title' => "Elbows Back",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/465/Male/l/465_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 588,
			'title' => "Calf Raises - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/256/Male/l/256_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 589,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/544/Male/l/544_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 590,
			'title' => "Quad Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/614/Male/l/614_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 591,
			'title' => "Side Neck Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/447/Male/l/447_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 592,
			'title' => "Dy",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/586/Male/l/586_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 593,
			'title' => "Calf Stretch Elbows Agai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/479/Male/l/479_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 594,
			'title' => "Cable Judo Flip",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/939/Male/l/939_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 595,
			'title' => "Behi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/582/Male/l/582_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 596,
			'title' => "Torso Rotatio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/640/Male/l/640_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 597,
			'title' => "Seated Biceps",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/618/Male/l/618_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 598,
			'title' => "Kettlebell Dead Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/549/Male/l/549_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 599,
			'title' => "Calf Stretch Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/480/Male/l/480_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 600,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/59/Male/l/59_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 601,
			'title' => "Cat Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/392/Male/l/392_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 602,
			'title' => "Quadriceps-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/615/Male/l/615_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 603,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/476/Male/l/476_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 604,
			'title' => "Fast Skippi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/780/Male/l/780_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 605,
			'title' => "Hug A Ball",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/424/Male/l/424_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 606,
			'title' => "Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/593/Male/l/593_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 607,
			'title' => "Tricep Side Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/493/Male/l/493_2.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 608,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/254/Male/l/254_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 609,
			'title' => "Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/734/Male/l/734_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 610,
			'title' => "Da",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/427/Male/l/427_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 611,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1391/Male/l/1391_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 612,
			'title' => "Upper Back-Leg Grab",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/457/Male/l/457_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 613,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/462/Male/l/462_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 614,
			'title' => "Isometric Neck Exercise - Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/27/Male/l/27_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 615,
			'title' => "Push Press - Behi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/708/Male/l/708_3.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 616,
			'title' => "Barbell I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/306/Male/l/306_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 617,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/164/Male/l/164_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 618,
			'title' => "Straight Bar Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1951/Male/l/1951_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 619,
			'title' => "Lower Back Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/602/Male/l/602_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 620,
			'title' => "Cable Seated Lateral Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/79/Male/l/79_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 621,
			'title' => "Scapular Pull-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1451/Male/l/1451_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 622,
			'title' => "Leg Lift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/100/Male/l/100_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 623,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/383/Male/l/383_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 624,
			'title' => "Side To Side Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3283/Male/l/3283_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 625,
			'title' => "Squat with Plate Movers",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1831/Male/l/1831_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 626,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/302/Male/l/302_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 627,
			'title' => "Piriformis-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/612/Male/l/612_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 628,
			'title' => "Seated Dumbbell Palms-Up Wrist Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/384/Male/l/384_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 629,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/718/Male/l/718_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 630,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/196/Male/l/196_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 631,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/606/Male/l/606_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 632,
			'title' => "Dumbbell Tricep Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/866/Male/l/866_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 633,
			'title' => "Mo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/903/Male/l/903_3.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 634,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/596/Male/l/596_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 635,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/282/Male/l/282_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 636,
			'title' => "Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/510/Male/l/510_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 637,
			'title' => "Pero",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/629/Male/l/629_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 638,
			'title' => "Atlas Sto",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/727/Male/l/727_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 639,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/264/Male/l/264_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 640,
			'title' => "Sit Squats",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/637/Male/l/637_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 641,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/886/Male/l/886_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 642,
			'title' => "Weighted Ball Side Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/333/Male/l/333_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 643,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/638/Male/l/638_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 644,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/595/Male/l/595_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 645,
			'title' => "Shoulder Circles",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/496/Male/l/496_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 646,
			'title' => "Barbell Guilloti",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/305/Male/l/305_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 647,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/494/Male/l/494_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 648,
			'title' => "Backward Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/764/Male/l/764_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 649,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/673/Male/l/673_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 650,
			'title' => "La",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1181/Male/l/1181_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 651,
			'title' => "Sled Push",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/714/Male/l/714_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 652,
			'title' => "Upward Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/466/Male/l/466_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 653,
			'title' => "Backward Drag",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/728/Male/l/728_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 654,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/760/Male/l/760_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 655,
			'title' => "Kettlebell Ar",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/512/Male/l/512_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 656,
			'title' => "Toe Touchers",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/107/Male/l/107_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 657,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1901/Male/l/1901_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 658,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1881/Male/l/1881_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 659,
			'title' => "Kettlebell Seated Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/555/Male/l/555_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 660,
			'title' => "Double Kettlebell Jerk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/557/Male/l/557_3.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 661,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/522/Male/l/522_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 662,
			'title' => "90-Degree Jump Squat Twist",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4721/Male/l/4721_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 663,
			'title' => "Barbell Side Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/87/Male/l/87_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 664,
			'title' => "Pi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/701/Male/l/701_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 665,
			'title' => "Lo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1981/Male/l/1981_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 666,
			'title' => "Scissor Kick",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/120/Male/l/120_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 667,
			'title' => "Dumbbell Squat To A Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/61/Male/l/61_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 668,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/67/Male/l/67_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 669,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/463/Male/l/463_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 670,
			'title' => "Seated Leg Tucks",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/290/Male/l/290_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 671,
			'title' => "Wide-Grip Pulldow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/15/Male/l/15_2.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 672,
			'title' => "Cable Deadlifts",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/860/Male/l/860_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 673,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/819/Male/l/819_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 674,
			'title' => "Fra",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/684/Male/l/684_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 675,
			'title' => "Groi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/591/Male/l/591_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 676,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/331/Male/l/331_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 677,
			'title' => "Isometric Chest Squeezes",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/92/Male/l/92_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 678,
			'title' => "Cable I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/314/Male/l/314_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 679,
			'title' => "Push Up to Side Pla",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/844/Male/l/844_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 680,
			'title' => "A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/501/Male/l/501_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 681,
			'title' => "Hip Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/877/Male/l/877_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 682,
			'title' => "Kippi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1471/Male/l/1471_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 683,
			'title' => "Reverse Plate Curls",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/320/Male/l/320_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 684,
			'title' => "Cable I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/313/Male/l/313_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 685,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3391/Male/l/3391_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 686,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2121/Male/l/2121_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 687,
			'title' => "Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/672/Male/l/672_4.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 688,
			'title' => "Kettlebell Figure 8",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/548/Male/l/548_3.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 689,
			'title' => "Side Leg Raises",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/635/Male/l/635_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 690,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/379/Male/l/379_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 691,
			'title' => "Kettlebell Wi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/533/Male/l/533_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 692,
			'title' => "Frog Sit-Ups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/295/Male/l/295_1.jpg",
			'level' => 2,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 693,
			'title' => "Kettlebell Curtsy Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3801/Male/l/3801_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 694,
			'title' => "Smith Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/330/Male/l/330_1.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 695,
			'title' => "Weighted Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/336/Male/l/336_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 696,
			'title' => "Cable Seated Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/316/Male/l/316_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 697,
			'title' => "Seated Leg Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3411/Male/l/3411_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 698,
			'title' => "Dumbbell Seated O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/175/Male/l/175_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 699,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2141/Male/l/2141_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 700,
			'title' => "Lateral Bou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/794/Male/l/794_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 701,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/904/Male/l/904_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 702,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/783/Male/l/783_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 703,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/301/Male/l/301_1.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 704,
			'title' => "Two-Arm Kettlebell Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/531/Male/l/531_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 705,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/241/Male/l/241_1.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 706,
			'title' => "Flat Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/162/Male/l/162_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 707,
			'title' => "Close-Grip Push-Up off of a Dumbbell",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1661/Male/l/1661_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 708,
			'title' => "Wide-Grip Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/275/Male/l/275_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 709,
			'title' => "Dumbbell Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4581/Male/l/4581_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 710,
			'title' => "Movi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1041/Male/l/1041_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 711,
			'title' => "Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/116/Male/l/116_1.jpg",
			'level' => 1,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 712,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/78/Male/l/78_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 713,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4131/Male/l/4131_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 714,
			'title' => "Pull Through",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/707/Male/l/707_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 715,
			'title' => "Do",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/296/Male/l/296_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 716,
			'title' => "Seated Dumbbell I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/245/Male/l/245_1.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 717,
			'title' => "Oblique Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/122/Male/l/122_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 718,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1551/Male/l/1551_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 719,
			'title' => "Barbell Squat To A Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/58/Male/l/58_2.jpg",
			'level' => 3,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 720,
			'title' => "Barbell Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3741/Male/l/3741_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 721,
			'title' => "Prowler Spri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1331/Male/l/1331_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 722,
			'title' => "Ja",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/202/Male/l/202_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 723,
			'title' => "Dumbbell I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/318/Male/l/318_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 724,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/190/Male/l/190_1.jpg",
			'level' => 2,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 725,
			'title' => "Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/901/Male/l/901_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 726,
			'title' => "Leg Pull-I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/95/Male/l/95_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 727,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/68/Male/l/68_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 728,
			'title' => "Isometric Neck Exercise - Sides",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/28/Male/l/28_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 729,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1891/Male/l/1891_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 730,
			'title' => "Plyo Push-up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/910/Male/l/910_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 731,
			'title' => "Split Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/826/Male/l/826_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 732,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/881/Male/l/881_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 733,
			'title' => "Flat Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/94/Male/l/94_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 734,
			'title' => "Vertical Swi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/842/Male/l/842_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 735,
			'title' => "Cable Preacher Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/221/Male/l/221_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 736,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2131/Male/l/2131_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 737,
			'title' => "Bala",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/263/Male/l/263_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 738,
			'title' => "Dumbbell Scaptio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1341/Male/l/1341_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 739,
			'title' => "See-Saw Press (Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/197/Male/l/197_3.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 740,
			'title' => "Close-Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4431/Male/l/4431_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 741,
			'title' => "Side Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2873/Male/l/2873_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 742,
			'title' => "Double Kettlebell Push Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/532/Male/l/532_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 743,
			'title' => "Cable Wrist Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/317/Male/l/317_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 744,
			'title' => "Kettlebell Pirate Ships",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1731/Male/l/1731_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 745,
			'title' => "Sumo Deadlift with Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/724/Male/l/724_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 746,
			'title' => "Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3053/Male/l/3053_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 747,
			'title' => "Physioball Hip Bridge",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1111/Male/l/1111_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 748,
			'title' => "Seated Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/349/Male/l/349_1.jpg",
			'level' => 3,
			'number_step' => 11,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 749,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1401/Male/l/1401_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 750,
			'title' => "Dumbbell O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/325/Male/l/325_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 751,
			'title' => "Barbell Side Split Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/310/Male/l/310_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 752,
			'title' => "Two-Arm Kettlebell Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/529/Male/l/529_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 753,
			'title' => "Zottma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/205/Male/l/205_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 754,
			'title' => "Barbell Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3301/Male/l/3301_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 755,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/749/Male/l/749_4.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 756,
			'title' => "Shoulder Press - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/259/Male/l/259_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 757,
			'title' => "Barbell Seated Calf Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/176/Male/l/176_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 758,
			'title' => "Leg-Up Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/429/Male/l/429_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 759,
			'title' => "Seated Head Har",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/29/Male/l/29_1.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 760,
			'title' => "Tiger-Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4601/Male/l/4601_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 761,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1381/Male/l/1381_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 762,
			'title' => "Dumbbell Pro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/326/Male/l/326_2.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 763,
			'title' => "Arou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/277/Male/l/277_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 764,
			'title' => "Jump Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2953/Male/l/2953_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 765,
			'title' => "Leverage High Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/892/Male/l/892_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 766,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/278/Male/l/278_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 767,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/729/Male/l/729_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 768,
			'title' => "Overhead Slam",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/905/Male/l/905_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 769,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/381/Male/l/381_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 770,
			'title' => "Lateral Raise - With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/258/Male/l/258_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 771,
			'title' => "High Cable Curls",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/286/Male/l/286_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 772,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/351/Male/l/351_2.jpg",
			'level' => 2,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 773,
			'title' => "Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/849/Male/l/849_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 774,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/165/Male/l/165_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 775,
			'title' => "Pistol Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3481/Male/l/3481_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 776,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/505/Male/l/505_3.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 777,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/137/Male/l/137_2.jpg",
			'level' => 3,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 778,
			'title' => "Overhead Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/248/Male/l/248_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 779,
			'title' => "Cable Shrugs",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/133/Male/l/133_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 780,
			'title' => "Seated Leg Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/69/Male/l/69_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 781,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1781/Male/l/1781_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 782,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/338/Male/l/338_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 783,
			'title' => "Plyo Kettlebell Pushups",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/644/Male/l/644_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 784,
			'title' => "Depth Jump Leap",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/775/Male/l/775_4.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 785,
			'title' => "Reverse Flyes With Exter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/239/Male/l/239_1.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 786,
			'title' => "Reverse Hyperexte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1421/Male/l/1421_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 787,
			'title' => "Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/160/Male/l/160_2.jpg",
			'level' => 1,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 788,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/105/Male/l/105_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 789,
			'title' => "Body-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3991/Male/l/3991_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 790,
			'title' => "Fire Hydra",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3441/Male/l/3441_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 791,
			'title' => "Wall Ball Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4151/Male/l/4151_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 792,
			'title' => "Shoulder Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/492/Male/l/492_1.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 793,
			'title' => "Adductor/Groi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/580/Male/l/580_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 794,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/446/Male/l/446_2.jpg",
			'level' => 3,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 795,
			'title' => "Ru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/436/Male/l/436_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 796,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/605/Male/l/605_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 797,
			'title' => "Retur",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/811/Male/l/811_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 798,
			'title' => "Side Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/971/Male/l/971_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 799,
			'title' => "Keg Load",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/696/Male/l/696_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 800,
			'title' => "Speed Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1221/Male/l/1221_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 801,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3661/Male/l/3661_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 802,
			'title' => "Heavi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/693/Male/l/693_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 803,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3233/Male/l/3233_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 804,
			'title' => "Stiff-Legged Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3213/Male/l/3213_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 805,
			'title' => "Jerk Bala",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/694/Male/l/694_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 806,
			'title' => "Power Stairs",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/706/Male/l/706_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 807,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3243/Male/l/3243_1.jpg",
			'level' => 2,
			'number_step' => 10,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 808,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3223/Male/l/3223_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 809,
			'title' => "Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/802/Male/l/802_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 810,
			'title' => "Fast Kick With Arm Circles",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2983/Male/l/2983_3.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 811,
			'title' => "Quick Leap",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/810/Male/l/810_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 812,
			'title' => "Log Lift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/698/Male/l/698_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 813,
			'title' => "Bosu Ball Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3971/Male/l/3971_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 814,
			'title' => "Ice Skater",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4081/Male/l/4081_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 815,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4001/Male/l/4001_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 816,
			'title' => "Half-k",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4061/Male/l/4061_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 817,
			'title' => "Neck Bridge Supi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2853/Male/l/2853_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 818,
			'title' => "Feet Jack",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2973/Male/l/2973_4.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 819,
			'title' => "Speed Box Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1241/Male/l/1241_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 820,
			'title' => "Sled Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1081/Male/l/1081_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 821,
			'title' => "Platform Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1101/Male/l/1101_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 822,
			'title' => "Pro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1131/Male/l/1131_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 823,
			'title' => "Sled Reverse Flye",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1071/Male/l/1071_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 824,
			'title' => "Sled Overhead Backward Walk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1061/Male/l/1061_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 825,
			'title' => "Leverage Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/890/Male/l/890_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 826,
			'title' => "Supi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/839/Male/l/839_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 827,
			'title' => "Star Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/835/Male/l/835_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 828,
			'title' => "Barbell Squat To A Box",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3871/Male/l/3871_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 829,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/824/Male/l/824_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 830,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3891/Male/l/3891_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 831,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3901/Male/l/3901_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 832,
			'title' => "Tall Muscle S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3851/Male/l/3851_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 833,
			'title' => "Forward Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3731/Male/l/3731_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 834,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/822/Male/l/822_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 835,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3681/Male/l/3681_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 836,
			'title' => "Hip Circle",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3701/Male/l/3701_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 837,
			'title' => "Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3691/Male/l/3691_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 838,
			'title' => "Hurdle Hops",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/788/Male/l/788_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 839,
			'title' => "Chest Push (si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/770/Male/l/770_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 840,
			'title' => "Reverse Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/758/Male/l/758_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 841,
			'title' => "Reverse Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/757/Male/l/757_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 842,
			'title' => "Reverse Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/756/Male/l/756_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 843,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3931/Male/l/3931_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 844,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3591/Male/l/3591_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 845,
			'title' => "Split Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/755/Male/l/755_4.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 846,
			'title' => "Floor Press with Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/735/Male/l/735_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 847,
			'title' => "Sumo Deadlift with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/723/Male/l/723_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 848,
			'title' => "Squat Jerk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/721/Male/l/721_4.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 849,
			'title' => "Sled Drag - Har",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/713/Male/l/713_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 850,
			'title' => "Sa",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/711/Male/l/711_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 851,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3581/Male/l/3581_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 852,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/745/Male/l/745_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 853,
			'title' => "Muscle S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/699/Male/l/699_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 854,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3531/Male/l/3531_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 855,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3521/Male/l/3521_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 856,
			'title' => "Squat with Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/704/Male/l/704_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 857,
			'title' => "Plate Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3361/Male/l/3361_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 858,
			'title' => "Bosu Ball Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3431/Male/l/3431_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 859,
			'title' => "Axle Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3203/Male/l/3203_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 860,
			'title' => "Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3321/Male/l/3321_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 861,
			'title' => "High K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3183/Male/l/3183_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 862,
			'title' => "Vertical Mou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3013/Male/l/3013_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 863,
			'title' => "Seated Glute Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3063/Male/l/3063_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 864,
			'title' => "Jump Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3003/Male/l/3003_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 865,
			'title' => "Slide Jump Shot",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3073/Male/l/3073_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 866,
			'title' => "Lateral Co",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/796/Male/l/796_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 867,
			'title' => "Lateral Box Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/795/Male/l/795_4.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 868,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3491/Male/l/3491_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 869,
			'title' => "Football Up-Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2993/Male/l/2993_3.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 870,
			'title' => "Heavy Bag Thrust",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/786/Male/l/786_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 871,
			'title' => "Box Skip",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/767/Male/l/767_4.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 872,
			'title' => "Chest Push from 3 poi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/771/Male/l/771_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 873,
			'title' => "Reverse Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/752/Male/l/752_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 874,
			'title' => "Rickshaw Deadlift ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/743/Male/l/743_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 875,
			'title' => "Power S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/747/Male/l/747_4.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 876,
			'title' => "Chest Push with Ru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/772/Male/l/772_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 877,
			'title' => "Split S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/720/Male/l/720_2.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 878,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/715/Male/l/715_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 879,
			'title' => "Rack Delivery",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/709/Male/l/709_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 880,
			'title' => "Cross Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3123/Male/l/3123_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 881,
			'title' => "Lateral Speed Step",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3173/Male/l/3173_3.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 882,
			'title' => "S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/717/Male/l/717_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 883,
			'title' => "Defe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3093/Male/l/3093_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 884,
			'title' => "Seated Scissor Kick",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3033/Male/l/3033_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 885,
			'title' => "Pu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3043/Male/l/3043_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 886,
			'title' => "Slow Jog",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3083/Male/l/3083_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 887,
			'title' => "Square Hop",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3163/Male/l/3163_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 888,
			'title' => "Southpaw Sprawl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5353/Male/l/5353_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 889,
			'title' => "Bear Crawl Fire Feet",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5363/Male/l/5363_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 890,
			'title' => "Breakda",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5373/Male/l/5373_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 891,
			'title' => "Kettlebell Thruster Progressio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5303/Male/l/5303_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 892,
			'title' => "Kettlebell 3-Poi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5313/Male/l/5313_3.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 893,
			'title' => "Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5383/Male/l/5383_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 894,
			'title' => "Ru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5323/Male/l/5323_1.jpg",
			'level' => 3,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 895,
			'title' => "Kettlebell Side Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5283/Male/l/5283_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 896,
			'title' => "Sprawl Frog Kick",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5193/Male/l/5193_4.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 897,
			'title' => "Double U",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5043/Male/l/5043_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 898,
			'title' => "Jumpi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5063/Male/l/5063_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 899,
			'title' => "Arou",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4991/Male/l/4991_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 900,
			'title' => "Plate Shoulder Circle Big To Small Rotatio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5001/Male/l/5001_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 901,
			'title' => "Suitcase Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2803/Male/l/2803_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 902,
			'title' => "Glute Bridge Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2823/Male/l/2823_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 903,
			'title' => "Decli",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4961/Male/l/4961_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 904,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/2793/Male/l/2793_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 905,
			'title' => "Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1861/Male/l/1861_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 906,
			'title' => "Sled Overhead Triceps Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1321/Male/l/1321_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 907,
			'title' => "Co",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/674/Male/l/674_3.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 908,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/692/Male/l/692_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 909,
			'title' => "Kettlebell Seesaw Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/558/Male/l/558_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 910,
			'title' => "I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1541/Male/l/1541_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 911,
			'title' => "Bar Throw A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4941/Male/l/4941_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 912,
			'title' => "Ope",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/539/Male/l/539_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 913,
			'title' => "Double Kettlebell S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/535/Male/l/535_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 914,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/537/Male/l/537_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 915,
			'title' => "Thigh Killa",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5473/Male/l/5473_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 916,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/607/Male/l/607_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 917,
			'title' => "Bear Crawl Shoulder Tap",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5453/Male/l/5453_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 918,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/541/Male/l/541_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 919,
			'title' => "Barbell Deadlift Be",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4861/Male/l/4861_3.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 920,
			'title' => "V-Sit Dumbbell Triceps Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4811/Male/l/4811_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 921,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4791/Male/l/4791_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 922,
			'title' => "Close-Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4771/Male/l/4771_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 923,
			'title' => "Shoulder Tap",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4801/Male/l/4801_2.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 924,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4661/Male/l/4661_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 925,
			'title' => "Weighted Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4641/Male/l/4641_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 926,
			'title' => "Triple Clap Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4631/Male/l/4631_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 927,
			'title' => "Clappi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4621/Male/l/4621_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 928,
			'title' => "Typewriter Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4611/Male/l/4611_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 929,
			'title' => "Diamo",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4451/Male/l/4451_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 930,
			'title' => "Assisted Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4381/Male/l/4381_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 931,
			'title' => "Barbell Reverse Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4361/Male/l/4361_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 932,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4071/Male/l/4071_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 933,
			'title' => "Burpee Over Barbell",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4221/Male/l/4221_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 934,
			'title' => "Triceps Pla",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4011/Male/l/4011_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 935,
			'title' => "Stability Ball Pike With K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4401/Male/l/4401_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 936,
			'title' => "Wall Shoulder Tap",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5443/Male/l/5443_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 937,
			'title' => "Bosu Ball Cru",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3981/Male/l/3981_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 938,
			'title' => "Dumbbell Squat S",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5433/Male/l/5433_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 939,
			'title' => "Gorilla Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5393/Male/l/5393_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 940,
			'title' => "Kettlebell Sumo Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4281/Male/l/4281_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 941,
			'title' => "Burppe Box Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5423/Male/l/5423_4.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 942,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4261/Male/l/4261_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 943,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3921/Male/l/3921_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 944,
			'title' => "Suspe",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3911/Male/l/3911_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 945,
			'title' => "Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3821/Male/l/3821_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 946,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3811/Male/l/3811_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 947,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3781/Male/l/3781_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 948,
			'title' => "Dumbbell Overhead Squat ",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3771/Male/l/3771_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 949,
			'title' => "Dumbbell Squat To Shoulder Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3761/Male/l/3761_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 950,
			'title' => "Lateral Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3721/Male/l/3721_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 951,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3651/Male/l/3651_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 952,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3641/Male/l/3641_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 953,
			'title' => "Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3611/Male/l/3611_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 954,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3551/Male/l/3551_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 955,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3541/Male/l/3541_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 956,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3511/Male/l/3511_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 957,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3561/Male/l/3561_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 958,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3571/Male/l/3571_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 959,
			'title' => "Straight-Legged Hip Raise",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3461/Male/l/3461_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 960,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3631/Male/l/3631_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 961,
			'title' => "JM Press With Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3351/Male/l/3351_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 962,
			'title' => "Li",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1141/Male/l/1141_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 963,
			'title' => "Elevated Back Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1171/Male/l/1171_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 964,
			'title' => "Rockers (Pullover To Press) Straight Bar",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3371/Male/l/3371_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 965,
			'title' => "Seated Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1201/Male/l/1201_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 966,
			'title' => "Staggered Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3263/Male/l/3263_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 967,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/981/Male/l/981_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 968,
			'title' => "Li",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1031/Male/l/1031_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 969,
			'title' => "Part",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/3501/Male/l/3501_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 970,
			'title' => "Exter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/868/Male/l/868_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 971,
			'title' => "Hip Flexio",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/878/Male/l/878_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 972,
			'title' => "Carioca Quick Step",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/961/Male/l/961_4.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 973,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/834/Male/l/834_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 974,
			'title' => "Stride Jump Crossover",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/837/Male/l/837_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 975,
			'title' => "Side Hop-Spri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/816/Male/l/816_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 976,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/821/Male/l/821_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 977,
			'title' => "Good Mor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/687/Male/l/687_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 978,
			'title' => "Box Squat with Chai",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/667/Male/l/667_2.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 979,
			'title' => "Car Deadlift",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/676/Male/l/676_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 980,
			'title' => "Seated Hamstri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/622/Male/l/622_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 981,
			'title' => "Double Kettlebell Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/553/Male/l/553_3.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 982,
			'title' => "Kettlebell Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/551/Male/l/551_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 983,
			'title' => "Leg-Over Floor Press",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/543/Male/l/543_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 984,
			'title' => "Two-Arm Kettlebell Jerk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/528/Male/l/528_2.jpg",
			'level' => 1,
			'number_step' => 2,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 985,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/540/Male/l/540_3.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 986,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/523/Male/l/523_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 987,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/517/Male/l/517_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 988,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/515/Male/l/515_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 989,
			'title' => "Smith I",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/329/Male/l/329_1.jpg",
			'level' => 3,
			'number_step' => 8,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 990,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/514/Male/l/514_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 991,
			'title' => "Posterior Tibialis Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/613/Male/l/613_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 992,
			'title' => "Overhead Lat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/609/Male/l/609_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 993,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/604/Male/l/604_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 994,
			'title' => "Chair Leg Exte",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/486/Male/l/486_3.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 995,
			'title' => "IT Ba",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/598/Male/l/598_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 996,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/691/Male/l/691_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 997,
			'title' => "Side-Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/440/Male/l/440_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 998,
			'title' => "Wrist Circles",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/265/Male/l/265_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 999,
			'title' => "Pyramid",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/434/Male/l/434_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1000,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/401/Male/l/401_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1001,
			'title' => "Foot-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/626/Male/l/626_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1002,
			'title' => "Neck-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/628/Male/l/628_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1003,
			'title' => "Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/603/Male/l/603_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1004,
			'title' => "Double Kettlebell Wi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/508/Male/l/508_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1005,
			'title' => "Seated Glute",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/620/Male/l/620_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1006,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/443/Male/l/443_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1007,
			'title' => "Chair Lower Back Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/487/Male/l/487_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1008,
			'title' => "Brachialis-SMR",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/624/Male/l/624_1.jpg",
			'level' => 1,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1009,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/412/Male/l/412_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1010,
			'title' => "Chest A",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/421/Male/l/421_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1011,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/430/Male/l/430_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1012,
			'title' => "Pero",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/611/Male/l/611_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1013,
			'title' => "Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/411/Male/l/411_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1014,
			'title' => "O",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/402/Male/l/402_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1015,
			'title' => "Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/805/Male/l/805_3.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1016,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/428/Male/l/428_1.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1017,
			'title' => "Rear Leg Raises",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/634/Male/l/634_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1018,
			'title' => "Chest Stretch o",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/584/Male/l/584_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1019,
			'title' => "Overhead Triceps",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/610/Male/l/610_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1020,
			'title' => "Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/467/Male/l/467_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1021,
			'title' => "Middle Back Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/483/Male/l/483_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1022,
			'title' => "Overhead Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/432/Male/l/432_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1023,
			'title' => "Side Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/407/Male/l/407_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1024,
			'title' => "Crossover Reverse Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/585/Male/l/585_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1025,
			'title' => "Frog Hops",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/588/Male/l/588_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1026,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/1021/Male/l/1021_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1027,
			'title' => "Dow",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/422/Male/l/422_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1028,
			'title' => "Chair Upper Body Stretch",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/485/Male/l/485_1.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1029,
			'title' => "Adductor",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/583/Male/l/583_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1030,
			'title' => "Burpee To Medici",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4971/Male/l/4971_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1031,
			'title' => "Wide-Sta",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4921/Male/l/4921_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1032,
			'title' => "V-Sit Lyi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4981/Male/l/4981_2.jpg",
			'level' => 2,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1033,
			'title' => "Superma",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5011/Male/l/5011_1.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1034,
			'title' => "Body Triceps Press Usi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4901/Male/l/4901_2.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1035,
			'title' => "Bar Push-Up Smith Machi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4951/Male/l/4951_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1036,
			'title' => "Barbell Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5021/Male/l/5021_2.jpg",
			'level' => 1,
			'number_step' => 9,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1037,
			'title' => "L-Sit Chi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4851/Male/l/4851_2.jpg",
			'level' => 3,
			'number_step' => 3,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1038,
			'title' => "Side Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5083/Male/l/5083_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1039,
			'title' => "Dumbbell Alter",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5073/Male/l/5073_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1040,
			'title' => "Dumbbell Pistol Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5053/Male/l/5053_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1041,
			'title' => "Lateral Hop 4 Times To Spri",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4841/Male/l/4841_3.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1042,
			'title' => "Seated Straight-Bar Curl Superset",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5031/Male/l/5031_1.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1043,
			'title' => "Hammer Plate Curl",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/5033/Male/l/5033_2.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1044,
			'title' => "Dive Bomber Push-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4441/Male/l/4441_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1045,
			'title' => "Wide-Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4421/Male/l/4421_1.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1046,
			'title' => "High Kick",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4331/Male/l/4331_1.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1047,
			'title' => "K",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4341/Male/l/4341_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1048,
			'title' => "Waiter's Carry",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4311/Male/l/4311_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1049,
			'title' => "Russia",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4911/Male/l/4911_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1050,
			'title' => "Hip Stretch With Twist",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4351/Male/l/4351_3.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1051,
			'title' => "Sve",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4411/Male/l/4411_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1052,
			'title' => "Walki",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4301/Male/l/4301_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1053,
			'title' => "Dumbbell Clea",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4291/Male/l/4291_3.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1054,
			'title' => "Ha",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4251/Male/l/4251_1.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1055,
			'title' => "Wall Walk",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4271/Male/l/4271_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1056,
			'title' => "Negative Pull-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4241/Male/l/4241_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1057,
			'title' => "Burpee Pull-Up",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4161/Male/l/4161_4.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1058,
			'title' => "Split Squat With Kettlebells",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4141/Male/l/4141_2.jpg",
			'level' => 2,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1059,
			'title' => "Dumbbell Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4831/Male/l/4831_2.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1060,
			'title' => "Suitcase Dumbbell Carry",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4111/Male/l/4111_2.jpg",
			'level' => 1,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1061,
			'title' => "Yates Row",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4121/Male/l/4121_1.jpg",
			'level' => 1,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1062,
			'title' => "Dumbbell Jump Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4761/Male/l/4761_2.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1063,
			'title' => "Lateral Hop Holdi",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4821/Male/l/4821_1.jpg",
			'level' => 3,
			'number_step' => 4,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1064,
			'title' => "Trap Bar Jump",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4561/Male/l/4561_2.jpg",
			'level' => 2,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1065,
			'title' => "Dumbbell Lu",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4731/Male/l/4731_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1066,
			'title' => "Ski",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4651/Male/l/4651_1.jpg",
			'level' => 1,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1067,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4491/Male/l/4491_2.jpg",
			'level' => 3,
			'number_step' => 5,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1068,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4521/Male/l/4521_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1069,
			'title' => "Si",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4511/Male/l/4511_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1070,
			'title' => "Pop Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4551/Male/l/4551_2.jpg",
			'level' => 2,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1071,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4481/Male/l/4481_1.jpg",
			'level' => 2,
			'number_step' => 6,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1072,
			'title' => "Fro",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4471/Male/l/4471_1.jpg",
			'level' => 1,
			'number_step' => 7,
			'number_like' => 0,
		]);
	 	DB::table('course')->insert([
			'id' => 1073,
			'title' => "Wall Squat",
			'image_url' => "https://www.bodybuilding.com/exercises/exerciseImages/sequences/4531/Male/l/4531_1.jpg",
			'level' => 3,
			'number_step' => 6,
			'number_like' => 0,
		]);

}
}
