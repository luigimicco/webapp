<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');
            $table->string('titolo', 10)->nullable();
            $table->string('ruolo', 50)->nullable();
            $table->float('costo_orario', 8, 2)->deafult(0);
            $table->date('data_nascita')->nullable();
            $table->boolean('firma_rdp')->nullable()->deafult(false);
            $table->boolean('firma_prev')->nullable()->deafult(false);
            $table->boolean('firma_acq')->nullable()->deafult(false);
            $table->boolean('resp_qua')->nullable()->deafult(false);
            $table->boolean('convalida_rdp')->nullable()->deafult(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
