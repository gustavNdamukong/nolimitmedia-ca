<?php

use Dorguzen\Core\Database\Migrations\Migration;
use Dorguzen\Core\Database\Migrations\Blueprint;

return new class extends Migration {

    public function up(): void
    {
        $sql = $this->schema->create('coding_students', function (Blueprint $table) {
            $table->id('coding_student_id');
            $table->string('coding_student_name', 150);
            $table->string('coding_student_email', 150);
            $table->string('coding_student_phone', 50)->nullable();
            $table->string('coding_student_age_group', 10);   // child | teen | adult
            $table->date('coding_student_start_date');
            $table->string('coding_student_language', 100)->default('HTML/CSS/JS');
            $table->string('coding_student_frequency', 20);   // once_weekly | twice_weekly
            $table->timestamp('created_at')->useCurrent();
        });

        $this->addStatement($sql);
    }

    public function down(): void
    {
        $this->addStatement(
            $this->schema->dropIfExists('coding_students')
        );
    }
};
