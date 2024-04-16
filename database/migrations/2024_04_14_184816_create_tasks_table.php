<?php

use App\Definitions\TaskStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('priority')->default(0); // default 0
            $table->string('title');
            $table->foreignId('project_id')->nullable()->constrained();
            $table->string('description')->nullable();
            $table->string('image_attachment')->nullable();
            $table->string('author')->nullable()->index();
            $table->string('status')->default(TaskStatus::NEW)->index(); // default `new`
            $table->string('assignee')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop existing foreign keys
        Schema::table('tasks', function (Blueprint $table) {
            if (Schema::hasColumn('tasks', 'project_id')) {
                $table->dropForeign(['project_id']);
            }
        });

        Schema::dropIfExists('tasks');
    }
};
