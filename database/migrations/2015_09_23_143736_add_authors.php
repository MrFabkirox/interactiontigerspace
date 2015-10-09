<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(array(
            'name' => 'Fabrice',
            'bio' =>'A great one.',
            //'created_at'=>date('Y-m-d H:m:s'),
            //'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('authors')->insert(array(
            'name' => 'Toto',
            'bio' =>'An other great one.',
            //'created_at'=>date('Y-m-d H:m:s'),
            //'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('authors')->where('name', '=', 'Fabrice') -> delete();
        DB::table('authors')->where('name', '=', 'Toto') -> delete();
    }
}
