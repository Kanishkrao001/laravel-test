<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mob', function (Blueprint $table) {
            $table->increments('id');
            // $table->timestamps();
            $table->string('name');
            // now if we rollback and then migrate, then new table with id and name col will be created
            // 2nd way to update a table is by using the update the command and then adding the required clmns in the file
            // and then migrating the file
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mob');
    }
}
