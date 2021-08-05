<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name',50);
            $table->string('hospital_name',150);
            $table->string('hospital_code',20);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->text('address')->nullable();
            $table->string('contact_no',15);
            $table->unsignedSmallInteger('role')->default('2');
            $table->unsignedSmallInteger('is_active')->default('1');
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
        Schema::dropIfExists('admins');
    }
}
