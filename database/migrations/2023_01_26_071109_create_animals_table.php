<?php

use App\Models\Cage;
use App\Models\Project;
use App\Models\Stage;
use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('tattoo')->nullable();
            $table->date('dob')->nullable();
            $table->string('color');
            $table->string('source_name')->nullable();
            $table->string('source_contact')->nullable();
            $table->integer('sire')->nullable();
            $table->integer('dam')->nullable();
            $table->string('breed')->nullable();
            $table->integer('legs')->nullable();
            $table->string('sex')->nullable();
            $table->date('entry_date')->nullable();
            $table->foreignIdFor(Project::class);
            $table->foreignIdFor(Stage::class)->nullable();
            $table->foreignIdFor(Status::class)->nullable();
            $table->foreignIdFor(Cage::class)->nullable();
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
        Schema::dropIfExists('animals');
    }
};
