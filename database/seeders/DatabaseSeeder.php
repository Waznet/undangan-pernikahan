<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\MainInfo;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $main_infos = [
            [
                'judul'=> 'Assalamualaikum Warahmatullahi Wabarakatuh',
                'tujuan'=> 'Tanpa Mengurangai Rasa Hormat, Mohon Hadir Pada Pernikahan Anak Kami',
                'foto_pria'=> 'dashboard/assets/img/photo/1.jpeg',
                'nama_pria'=> 'Ridwan',
                'ortu_pria'=> 'Anak Pertama dari Bapak Rizwan',
                'foto_wanita'=> 'dashboard/assets/img/photo/2.jpeg',
                'nama_wanita'=> 'Lumpia',
                'ortu_wanita'=> 'Lumzia',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        ];

        MainInfo::insert($main_infos);
    }
}
