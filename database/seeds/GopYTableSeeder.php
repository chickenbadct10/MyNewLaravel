<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
class GopYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        $faker    = Faker\Factory::create('vi_VN');
        for ($i=1; $i <= 30; $i++) {
            $today = new DateTime();
            array_push($list, [
                'gy_thoiGian'             => $today->format('Y-m-d H:i:s'),
                'gy_noiDung'              => "gy_noiD $i",
                'kh_ma'                   => $i,
                'sp_ma'                   => $i+30,
                'gy_trangThai'            => $faker->numberBetween(1, 3)
            ]);
        }
        DB::table('cusc_gopy')->insert($list);
    }
}
