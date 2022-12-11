<?php

use App\Models\User;
use App\Models\Cart;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('message');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('province');
            $table->string('phoneNumber');
            $table->enum('status', ['processing', 'done', 'cancelled']);
            $table->softDeletes();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Cart::class);
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
        Schema::dropIfExists('transactions');
    }
};
