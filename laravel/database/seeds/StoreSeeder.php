<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Store::class, 80)->create();
        DB::table('stores')->insert([
            'name' => 'PARAPHARMACIE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 11',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 1,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'NOCIBE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 06 58',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 71 14 56 44',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 2,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'PHARMACIE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 75 48 99',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)2 40 40 78 78',
            'emergency_phonenumber_2' => '+33 (0)2 40 94 07 81',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 3,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'FRANCK PROVOST',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 91 14 61',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 64 74 48 94',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 4,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'STEVEN COIFFURE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 04 19 98',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 68 14 19 98',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 5,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'COIFFURE DU MONDE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 0,
            'termination_date' => '2020-02-29',
            'phonenumber_1' => '+33 (0)2 40 32 32 32',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)7 71 01 96 44',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 6,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'SEPHORA',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 81 00',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 46 00 26 07',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 7,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'KIKO',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 07 61 67',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 08 96 12 49',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 8,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'YVES ROCHER',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 16 68 30',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 37 08 92 55',
            'emergency_phonenumber_2' => '+33 (0)6 33 41 28 36',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 9,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'SUNSHINE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 07 07 83',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 79 87 78 45',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 10,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'B&BE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 82 22 67 52',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 68 68 94 76',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 11,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'JULIEN D\'ORCELL',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 32 23 74',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 73 54 36 45',
            'emergency_phonenumber_2' => '+33 (0)7 60 31 30 86',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 12,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'LEONIDAS',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 13 24 42',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 15 92 71 93',
            'emergency_phonenumber_2' => '+33 (0)6 33 94 48 90',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 13,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'ESPACE CULTUREL',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 81',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)2 51 11 51 81',
            'emergency_phonenumber_2' => '+33 (0)2 51 11 51 28',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 14,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'LOUIS LEMERCIER',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 13 13 66',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 15,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'UBLIME',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 43 05 36',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 88 48 41 49',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 16,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'BY ROSE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 07 80 75',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 11 78 83 83',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 17,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'MOA',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 25 46 59',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 34 01 80 52',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 18,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'MAROQUINERIE PECARI',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 04 10 53',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 08 76 57 88',
            'emergency_phonenumber_2' => '+33 (0)6 15 30 47 48',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 19,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'JENNYFER',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 26 32 21',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 76 15 30 62',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 20,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'J. RIU',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 09 90',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 70 52 18 51',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 21,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'CACHE CACHE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 21 06 17',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 73 84 44 80',
            'emergency_phonenumber_2' => '+33 (0)2 99 19 98 98',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 22,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'ROUGE GORGE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 70 09 51',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 09 82 46 52',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 23,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'CHRISTINE LAURE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 00 81',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)2 40 06 08 14',
            'emergency_phonenumber_2' => '+33 (0)6 12 74 06 72',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 24,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'GRAIN DE MALICE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 91 14 48',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 27 02 33 91',
            'emergency_phonenumber_2' => '+33 (0)6 78 47 06 82',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 25,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'BONOBO',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 65 82 19',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 70 19 25 60',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 26,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'OKAIDI',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 13 29 19',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 95 07 45 05',
            'emergency_phonenumber_2' => '+33 (0)6 22 26 10 79',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 27,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'S. OLIVER',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 78 13 48',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 28,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'PATRICE BREAL',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 78 73 35',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 75 96 70 14',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 29,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'PROMOD',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 21 25 33',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 29 75 26 22',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 30,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'CAMAIEU FEMME',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 26 34 98',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 09 92 86 60',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 31,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'ARMAND THIERY FEMME',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 32,
            'product_id' => 1
        ]);

        DB::table('stores')->insert([
            'name' => 'CELIO',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 13 87 25',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 95 12 11 81',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 33,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'LA FEE MARABOUTEE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 67 35 30 80',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 43 39 61 22',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 34,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'BEAUTY SHOES',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 78 06 42',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 13 93 33 38',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 35,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'DEVRED',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 25 46 43',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 23 21 07 87',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 36,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'DAMART',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 77 40 00',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 69 23 28 58',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 37,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'MANGO',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 70 91 79',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 24 82 85 54',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 38,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'ERAM',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 40 72 76',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 75 57 64 79',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 39,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'ARMAND THIERY HOMME',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 25 89 70',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 40 46 37 39',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 40,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'TOSCANE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 25 02 75',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 26 77 39 51',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 41,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'VYKTOR & LEO',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 78 18 92',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 15 52 58 75',
            'emergency_phonenumber_2' => '+33 (0)6 50 96 99 15',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 42,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'GUZZI',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 78 14 86',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 23 41 42 43',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 43,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'NAF NAF',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 62 60 77 01',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 04 59 12 16',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 44,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'SERGENT MAJOR',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 96 77 01 ',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 78 08 07 72',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 45,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'Z',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 78 88 12',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 80 18 29 21',
            'emergency_phonenumber_2' => '+33 (0)2 40 76 39 14',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 46,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'H&M',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)8 05 08 88 88',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 47,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'PAPRIKA',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 91 99 64',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 80 35 41 28',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 48,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'BLACKSTORE',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 96 04 44',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 62 76 49 73',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 49,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'LYNX OPTIQUE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 26 49 94',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 70 53 71 88',
            'emergency_phonenumber_2' => '+33 (0)6 61 95 13 40',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 50,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'LECLERC VOYAGES',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 51',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 63 22 15 88',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 51,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'MANEGE ENFANTIN',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 52,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'PRESSE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 04 08 61',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)7 71 01 75 73',
            'emergency_phonenumber_2' => '+33 (0)7 85 53 68 95',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 53,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'ESPACE ENFANT',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 28 25 65 90',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 98 53 54 58',
            'emergency_phonenumber_2' => '+33 (0)2 49 62 01 29',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 54,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'CHANGE NANTES ROYAL',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 54 86 18 79',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 04 50 34 99',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 55,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'DOCTEUR IT',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)7 68 72 07 12',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)7 68 72 07 12',
            'emergency_phonenumber_2' => '+33 (0)7 68 26 18 22',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 56,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'LA POSTE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 80 13 74 77',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 57,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'ORANGE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 70 28 95',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)7 86 62 17 98',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 58,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'BOUYGUES TELECOM',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 70 65 73',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 60 31 26 88',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 59,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'KRYS',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 02 22',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 61 95 13 40',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 60,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'SERVICES MINUTE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 04 05 40',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 36 36 47 83',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 61,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => '5 A SEC',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 70 08 96',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 88 23 23 15',
            'emergency_phonenumber_2' => '+33 (0)6 79 62 24 46',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 62,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'VAP\'STATION',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 92 54',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 76 84 50 64',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 63,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'BISTR\'OCEAN',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 75 01 30',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 18 02 35 59',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 64,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'L\'ILE AUX GOURMANDS',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 86 56 91 88',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 83 61 61 97',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 65,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'L\'ALIZE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 05 08 37',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)2 40 05 25 93',
            'emergency_phonenumber_2' => '+33 (0)6 80 52 32 64',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 66,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'L\'ORANGERIE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 02 81 52',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 62 40 70 45',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 67,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'ITALY\'S DINER',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 67 77 63 03',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 41 71 14 49',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 68,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'SUBWAY',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 66 98 48 69',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 83 61 61 97',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 69,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'LE POINT VIRGULE',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 15 65',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 31 50 64 73',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 70,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'WANDI',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)6 81 20 60 79',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 63 04 15 79',
            'emergency_phonenumber_2' => '+33 (0)6 98 92 61 73',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 71,
            'product_id' => 5
        ]);

        DB::table('stores')->insert([
            'name' => 'INTERSPORT',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 36 36',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 43 84 14 55',
            'emergency_phonenumber_2' => '+33 (0)6 07 35 01 85',
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 72,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'FITNESS PRIME',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)9 67 26 31 06',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 63 29 43 73',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 73,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'MR BRICOLAGE',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 40 40 17 40',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 50 24 91 28',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 74,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'HYPERMARCHE',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 11',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 75,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'STATION SERVICE',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 11',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => 76,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'ESPRIT / OUTFITTERS',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 0,
            'termination_date' => '2018-06-30',
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'SOUS LES TOITS',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 0,
            'termination_date' => '2018-12-31',
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 6
        ]);

        DB::table('stores')->insert([
            'name' => 'DDP',
            'description' => NULL,
            'unit_size' => 0,
            'active' => 0,
            'termination_date' => '2018-12-31',
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 3
        ]);

        DB::table('stores')->insert([
            'name' => 'L\'ETUDE IMMOBILIERE',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 0,
            'termination_date' => NULL,
            'phonenumber_1' => NULL,
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => NULL,
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 4
        ]);

        DB::table('stores')->insert([
            'name' => 'FABRIQUE DE STYLES',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 06 06',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)6 24 82 85 54',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 2
        ]);

        DB::table('stores')->insert([
            'name' => 'LOCATIONS VEHICULES',
            'description' => NULL,
            'unit_size' => 1,
            'active' => 1,
            'termination_date' => NULL,
            'phonenumber_1' => '+33 (0)2 51 11 51 11',
            'phonenumber_2' => NULL,
            'emergency_phonenumber_1' => '+33 (0)2 51 11 51 11',
            'emergency_phonenumber_2' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'shopping_mall_id' => 1,
            'retail_space_id' => null,
            'product_id' => 6
        ]);
    }
}
