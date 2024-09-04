<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id,
                'type' => 'system',
                'content' => 'System update notification',
                'is_read' => false,
                'expiration' => now()->addDays(7),
            ]);
        }
    }
}
