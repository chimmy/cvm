<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //
        Schema::create('members', function(Blueprint $table)           
           {
                $table->increments('id');
                $table->string('firstname');
                $table->string('lastname');
                $table->integer('member_id');
                $table->date('created_date');
                $table->date('expired_date');
                $table->date('distribution_date');
                $table->timestamp('created_at');
                $table->timestamp('updated_at');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
