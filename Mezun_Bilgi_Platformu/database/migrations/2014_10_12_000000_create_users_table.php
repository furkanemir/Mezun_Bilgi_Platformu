<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('tc_kimlik');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('mezuniyet_yili');
            $table->string('sehir');
            $table->string('calıstığı_yer');
            $table->string('pozisyon');
            $table->string('medeni_durumu');
            $table->string('tel_no');
            $table->string('image');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('fakulte_id');
            $table->integer('bolum_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
