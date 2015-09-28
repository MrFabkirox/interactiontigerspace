<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(array(
            'name' => 'Fabrice2',
            'bio' =>'A great one2.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('authors')->insert(array(
            'name' => 'Toto2',
            'bio' =>'An other great one.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('authors')->where('name', '=', 'Fabrice2') -> delete();
        DB::table('authors')->where('name', '=', 'Toto2') -> delete();
    }
}
