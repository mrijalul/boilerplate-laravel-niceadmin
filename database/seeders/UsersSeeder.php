<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
	public function run(): void
	{
		// Buat pengguna super-admin
		$superAdmin = User::create([
			'name' => 'Super Admin',
			'email' => 'superadmin@mail.com',
			'password' => bcrypt('password'),
		]);

		// // Cari role super-admin
		// $superAdminRole = Role::where('name', 'super-admin')->first();

		// // Jika role super-admin ditemukan, tambahkan role ke pengguna
		// if ($superAdminRole) {
		// 	$superAdmin->assignRole($superAdminRole);
		// }

		// Buat pengguna admin
		$admin = User::create([
			'name' => 'Admin',
			'email' => 'admin@mail.com',
			'password' => bcrypt('password'),
		]);

		// // Cari role admin
		// $adminRole = Role::where('name', 'admin')->first();

		// // Jika role admin ditemukan, tambahkan role ke pengguna
		// if ($adminRole) {
		// 	$admin->assignRole($adminRole);
		// }

		// Buat pengguna user
		$user = User::create([
			'name' => 'User',
			'email' => 'user@mail.com',
			'password' => bcrypt('password'),
		]);

		// // Cari role user
		// $userRole = Role::where('name', 'user')->first();

		// // Jika role user ditemukan, tambahkan role ke pengguna
		// if ($userRole) {
		// 	$user->assignRole($userRole);
		// }
	}
}
