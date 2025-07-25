    <?php

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
            Schema::create('admin', function (Blueprint $table) {
                $table->id();
                $table->string('admin_name');
                $table->string('admin_email')->unique();
                $table->string('admin_password');
                $table->string('admin_role')->default('admin'); // optional: 'admin' or 'superadmin'
                $table->timestamps();
            });
        }


        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            //
        }
    };
