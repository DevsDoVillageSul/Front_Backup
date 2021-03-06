<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissaoTes extends Migration
{
    public function up()
    {
        DB::table('permissions')->insert(
            [
                'id' => '8',
                'menu' => '1',
                'position' => '5',
                'permission_id' => 1,
                'name' => 'menu.cadastros.tes',
                'icon' => 'tag',
                'url' => 'cadastros/tes',
            ]
        );
    }

    public function down()
    {
        DB::table('role_permissions')->where('permission_id', 8)->delete();

        DB::table('permissions')->where('id', 8)->delete();
    }
}