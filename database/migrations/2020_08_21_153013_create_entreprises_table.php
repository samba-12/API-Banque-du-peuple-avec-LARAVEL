 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entreprises', function (Blueprint $table) {
            $table->increments('idEntreprise');
            $table->integer('numeroCompte')->unique();
            $table->string('nom_entreprise');
            $table->string('adresse');
            $table->string('email');
            $table->string('telephone');
            $table->integer('ninea');
            $table->string('typecompte');
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
        Schema::dropIfExists('Entreprises');
    }
}
