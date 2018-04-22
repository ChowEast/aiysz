<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => '分享',
                'description' => '分享剧集🏷',
            ],
            [
                'name'        => '问答',
                'description' => '求片区，互帮互助😈',
            ],
            [
                'name'        => '公告',
                'description' => '站点公告💡',
            ],
            [
                'name'        => '4K专区',
                'description' => '好清晰的😍',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}