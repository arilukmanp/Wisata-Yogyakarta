<?php

use App\Models\Fuzzy;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuzzyVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuzzy_variables', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->string('criteria', 100);
            $table->string('name_set', 100);
            $table->float('min_set',  8, 1)->nullable();
            $table->float('max_set', 8, 1)->nullable();
            $table->timestamps();
        });

        // Create Fuzzy Variables Data
        Fuzzy::create([
            'criteria' => 'Popularitas',
            'name_set' => 'Cukup Terkenal',
            'min_set'  => '0',
            'max_set'  => '7.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Popularitas',
            'name_set' => 'Terkenal',
            'min_set'  => '7',
            'max_set'  => '8.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Popularitas',
            'name_set' => 'Sangat Terkenal',
            'min_set'  => '8',
            'max_set'  => '10'
        ]);

        Fuzzy::create([
            'criteria' => 'Biaya Masuk',
            'name_set' => 'Sangat Murah',
            'min_set'  => '0',
            'max_set'  => '15000'
        ]);

        Fuzzy::create([
            'criteria' => 'Biaya Masuk',
            'name_set' => 'Murah',
            'min_set'  => '10000',
            'max_set'  => '50000'
        ]);

        Fuzzy::create([
            'criteria' => 'Biaya Masuk',
            'name_set' => 'Sedang',
            'min_set'  => '30000',
            'max_set'  => '100000'
        ]);

        Fuzzy::create([
            'criteria' => 'Pengunjung',
            'name_set' => 'Sepi',
            'min_set'  => '0',
            'max_set'  => '30'
        ]);

        Fuzzy::create([
            'criteria' => 'Pengunjung',
            'name_set' => 'Cukup Ramai',
            'min_set'  => '20',
            'max_set'  => '100'
        ]);

        Fuzzy::create([
            'criteria' => 'Pengunjung',
            'name_set' => 'Ramai',
            'min_set'  => '80',
            'max_set'  => '300'
        ]);

        Fuzzy::create([
            'criteria' => 'Fasilitas',
            'name_set' => 'Cukup Lengkap',
            'min_set'  => '0',
            'max_set'  => '7.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Fasilitas',
            'name_set' => 'Lengkap',
            'min_set'  => '7',
            'max_set'  => '8.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Fasilitas',
            'name_set' => 'Sangat Lengkap',
            'min_set'  => '8',
            'max_set'  => '10'
        ]);

        Fuzzy::create([
            'criteria' => 'Kebersihan',
            'name_set' => 'Cukup Bersih',
            'min_set'  => '0',
            'max_set'  => '7.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Kebersihan',
            'name_set' => 'Bersih',
            'min_set'  => '7',
            'max_set'  => '8.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Kebersihan',
            'name_set' => 'Sangat Bersih',
            'min_set'  => '8',
            'max_set'  => '10'
        ]);

        Fuzzy::create([
            'criteria' => 'Akses',
            'name_set' => 'Cukup Mudah',
            'min_set'  => '0',
            'max_set'  => '7.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Akses',
            'name_set' => 'Mudah',
            'min_set'  => '7',
            'max_set'  => '8.5'
        ]);

        Fuzzy::create([
            'criteria' => 'Akses',
            'name_set' => 'Sangat Mudah',
            'min_set'  => '8',
            'max_set'  => '10'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuzzy_variables');
    }
}
