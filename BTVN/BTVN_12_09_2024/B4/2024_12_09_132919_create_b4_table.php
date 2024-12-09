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
        // • Bảng cinemas:
        //     o id (Mã rạp chiếu, primary key, ví dụ: 601)
        //     o name (Tên rạp chiếu, ví dụ: "CGV Vincom")
        //     o location (Địa chỉ, ví dụ: "Vincom Center, Hà Nội")
        //     o total_seats (Tổng số ghế ngồi, ví dụ: 300)

        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('location', 100);
            $table->integer('total_seats');
        });
        // • Bảng movies:
        //     o id (Mã phim, primary key, ví dụ: 5001)
        //     o title (Tên phim, ví dụ: "Avengers: Endgame")
        //     o director (Đạo diễn, ví dụ: "Anthony và Joe Russo")
        //     o release_date (Ngày phát hành, ví dụ: "2019-04-26")
        //     o duration (Thời lượng phim, ví dụ: 181 phút)
        //     o cinema_id (foreign key, tham chiếu đến cinemas.id, ví dụ: 601)
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('director', 100);
            $table->date('release_date');
            $table->integer('duration');
            $table->unsignedBigInteger('cinema_id');
            $table->foreign('cinema_id')->references('id')->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b4');
    }
};
