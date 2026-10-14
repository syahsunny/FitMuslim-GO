
<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // Duplicate meal_logs migration.
        // The table was already created by migration 105903.
    }

    public function down(): void
    {
        // Nothing to reverse.
    }
};
