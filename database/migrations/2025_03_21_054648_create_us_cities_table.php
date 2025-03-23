<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('us_cities', function (Blueprint $table) {
            $table->id(); // Maps to ID int(11) NOT NULL AUTO_INCREMENT
            $table->unsignedBigInteger('id_state'); // Maps to ID_STATE int(11) NOT NULL
            $table->string('city', 50); // Maps to CITY varchar(50) NOT NULL
            $table->string('county', 50); // Maps to COUNTY varchar(50) NOT NULL
            $table->double('latitude'); // Maps to LATITUDE double NOT NULL
            $table->double('longitude'); // Maps to LONGITUDE double NOT NULL
            $table->timestamps(); // Optional: Laravel convention

            // Foreign key constraint
            $table->foreign('id_state')->references('id')->on('us_states')->onDelete('cascade');
        });

        // Insert data (limited to first 10 rows for brevity; add the rest as needed)
        $cities = [
            ['id' => 1, 'id_state' => 2, 'city' => 'Adak', 'county' => 'Aleutians West', 'latitude' => 55.999722, 'longitude' => -161.207778],
            ['id' => 2, 'id_state' => 2, 'city' => 'Akiachak', 'county' => 'Bethel', 'latitude' => 60.891854, 'longitude' => -161.39233],
            ['id' => 3, 'id_state' => 2, 'city' => 'Akiak', 'county' => 'Bethel', 'latitude' => 60.890632, 'longitude' => -161.199325],
            ['id' => 4, 'id_state' => 2, 'city' => 'Akutan', 'county' => 'Aleutians East', 'latitude' => 54.143012, 'longitude' => -165.785368],
            ['id' => 5, 'id_state' => 2, 'city' => 'Alakanuk', 'county' => 'Kusilvak', 'latitude' => 62.746967, 'longitude' => -164.60228],
            ['id' => 6, 'id_state' => 2, 'city' => 'Aleknagik', 'county' => 'Dillingham', 'latitude' => 59.269688, 'longitude' => -158.619882],
            ['id' => 7, 'id_state' => 2, 'city' => 'Allakaket', 'county' => 'Yukon Koyukuk', 'latitude' => 66.543197, 'longitude' => -152.712155],
            ['id' => 8, 'id_state' => 2, 'city' => 'Ambler', 'county' => 'Northwest Arctic', 'latitude' => 67.46951, 'longitude' => -156.455652],
            ['id' => 9, 'id_state' => 2, 'city' => 'Anaktuvuk Pass', 'county' => 'North Slope', 'latitude' => 68.11878, 'longitude' => -151.679005],
            ['id' => 10, 'id_state' => 2, 'city' => 'Anchor Point', 'county' => 'Kenai Peninsula', 'latitude' => 59.788818, 'longitude' => -151.732933],
            // Add remaining 29,870 rows here (I'll provide a solution below to handle this efficiently)
        ];

        DB::table('us_cities')->insert($cities);
    }

    public function down(): void
    {
        Schema::dropIfExists('us_cities');
    }
};