<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class Rol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("rol")->default("");
        });
        User::create(['name' => 'admin', 'codigo' => '202200066', 'email' => 'admin@admin.com', 'password' => '12345678', 'grupo' => 'admin', 'rol' => 1]);
        User::create(['name' => 'Patricia', 'codigo' => '202200066', 'email' => 'patricia@umss.edu.bo', 'password' => '12345678', 'grupo' => 'docente', 'rol' => 4]);
        User::create(['name' => 'David', 'codigo' => '202200067', 'email' => 'david@umss.edu.bo', 'password' => '12345678', 'grupo' => 'docente', 'rol' => 4]);
        User::create(['name' => 'Leticia', 'codigo' => '202200068', 'email' => 'leticia@umss.edu.bo', 'password' => '12345678', 'grupo' => 'docente', 'rol' => 4]);
        User::create(['name' => 'Liz', 'codigo' => '202200068', 'email' => 'liz@umss.edu.bo', 'password' => '12345678', 'grupo' => 'Rep-Legal', 'rol' => 2]);
        User::create(['name' => 'Andrea', 'codigo' => '202200068', 'email' => 'andrea@umss.edu.bo', 'password' => '12345678', 'grupo' => 'Socio', 'rol' => 3]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("rol");
        });
    }
}
