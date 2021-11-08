<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appsettings', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->integer('appstatus')->default(0);
            $table->integer('chatoptstatus')->default(0);
            $table->longtext('widgetapearance')->nullable();
            $table->longtext('chatopt')->nullable();
            $table->longtext('faqs')->nullable();
            $table->integer('contactusoption')->default(0);
            $table->string('email')->nullable();
            $table->longtext('formsubmitreq')->nullable();
            $table->string('app_script_tag')->nullable();
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
        Schema::dropIfExists('appsettings');
    }
}
