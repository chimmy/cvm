<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public $timestamps = false;
    
    public function up()
    {
        
        
        Schema::table('members', function (Blueprint $table) {
            
        //           
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
        Schema::table('members', function (Blueprint $table) {
            //
        });
    }
}
