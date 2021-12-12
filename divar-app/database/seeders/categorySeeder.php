<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insertOrIgnore([
            [
                "id" => 1,
                "name" => 'املاک',
                "name_en" => 'states',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 2,
                "name" => 'وسایل نقلیه',
                "name_en" => 'cars',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 3,
                "name" => 'کالاهای دیجیتال',
                "name_en" => 'digital goods',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 4,
                "name" => 'خانه و آشپزخانه',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 5,
                "name" => 'خدمات',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 6,
                "name" => 'وسایل شخصی',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 7,
                "name" => 'سرگرمی و فراغت',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 8,
                "name" => 'اجتماعی',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 9,
                "name" => 'تجهیزات و صنعتی',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 10,
                "name" => 'استخدام و کاریابی',
                "name_en" => '',
                "parent_id" => 0,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 11,
                "name" => 'فروش مسکونی',
                "name_en" => '',
                "parent_id" => 1,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 12,
                "name" => ' اجاره مسکونی',
                "name_en" => '',
                "parent_id" => 1,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 13,
                "name" => 'فروش اداری و تجاری',
                "name_en" => '',
                "parent_id" => 1,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 14,
                "name" => 'خودرو',
                "name_en" => '',
                "parent_id" => 2,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 15,
                "name" => 'قطعات یدکی و لوازم جانبی خودرو',
                "name_en" => '',
                "parent_id" => 2,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 16,
                "name" => 'موبایل و تبلت',
                "name_en" => '',
                "parent_id" => 3,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ], [
                "id" => 17,
                "name" => 'رایانه',
                "name_en" => '',
                "parent_id" => 3,
                "icon" => 'fa fa-circle-o-notch',
                "user_id" => 1
            ]
        ]);

        //
    }
}
