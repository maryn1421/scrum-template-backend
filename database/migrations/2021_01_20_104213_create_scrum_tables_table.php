<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrum_tables', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("scrum_master_id");
            $table->bigInteger("project_id")->unsigned();
            $table->timestamps();
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrum_tables');
    }
}
