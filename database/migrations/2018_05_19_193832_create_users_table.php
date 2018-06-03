 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
            $table->engine = 'InnoDB'; // Motor de BD
            $table->increments('id'); // Integer Unsigned - Autoincremente
            $table->string('name'); //Varchar
            $table->string('email')->unique();  //Varchar Unique
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->integer('profession_id')->unsigned()->nullable();
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
