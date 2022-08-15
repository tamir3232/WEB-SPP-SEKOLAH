<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Petugas;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        // seed permission

        // siswa
        Permission::create([
            'name' => 'create-siswa',
        ]);

        Permission::create([
            'name' => 'read-siswa',
        ]);

        Permission::create([
            'name' => 'update-siswa',
        ]);

        Permission::create([
            'name' => 'delete-siswa',
        ]);

        // users
        Permission::create([
            'name' => 'create-users',
        ]);

        Permission::create([
            'name' => 'read-users',
        ]);

        Permission::create([
            'name' => 'update-users',
        ]);

        Permission::create([
            'name' => 'delete-users',
        ]);

        // spp
        Permission::create([
            'name' => 'create-spp',
        ]);

        Permission::create([
            'name' => 'read-spp',
        ]);

        Permission::create([
            'name' => 'update-spp',
        ]);

        Permission::create([
            'name' => 'delete-spp',
        ]);

        // kelas
        Permission::create([
            'name' => 'create-kelas',
        ]);

        Permission::create([
            'name' => 'read-kelas',
        ]);

        Permission::create([
            'name' => 'update-kelas',
        ]);

        Permission::create([
            'name' => 'delete-kelas',
        ]);

        // roles
        Permission::create([
            'name' => 'create-roles',
        ]);

        Permission::create([
            'name' => 'read-roles',
        ]);

        Permission::create([
            'name' => 'update-roles',
        ]);

        Permission::create([
            'name' => 'delete-roles',
        ]);

        // permissions
        Permission::create([
            'name' => 'create-permissions',
        ]);

        Permission::create([
            'name' => 'read-permissions',
        ]);

        Permission::create([
            'name' => 'update-permissions',
        ]);

        Permission::create([
            'name' => 'delete-permissions',
        ]);

        // pembayaran
        Permission::create([
            'name' => 'create-pembayaran',
        ]);

        Permission::create([
            'name' => 'read-pembayaran',
        ]);

        Permission::create([
            'name' => 'update-pembayaran',
        ]);

        Permission::create([
            'name' => 'delete-pembayaran',
        ]);

        // seed spp
        Spp::create([
            'tahun' => '2022',
            'nominal' => 250000,
        ]);

        Spp::create([
            'tahun' => '2023',
            'nominal' => 300000,
        ]);

        Spp::create([
            'tahun' => '2024',
            'nominal' => 350000,
        ]);

        // seed role
        $role1 = Role::create([
            'name' => 'admin'
        ]);

        $role1->syncPermissions([
            'create-siswa', 'read-siswa', 'update-siswa', 'delete-siswa', 
            'create-kelas', 'read-kelas', 'update-kelas', 'delete-kelas',
            'create-spp', 'read-spp', 'update-spp', 'delete-spp',
            'create-users', 'read-users', 'update-users', 'delete-users',
            'create-roles', 'read-roles', 'update-roles', 'delete-roles',
            'create-pembayaran', 'read-pembayaran', 'update-pembayaran', 'delete-pembayaran',
            'create-permissions', 'read-permissions', 'update-permissions', 'delete-permissions',
        ]);

        $role2 = Role::create([
            'name' => 'petugas'
        ]);

        $role2->syncPermissions([
            'create-siswa', 'read-siswa', 'update-siswa', 'delete-siswa',
            'create-kelas', 'read-kelas', 'update-kelas', 'delete-kelas',
            'create-spp', 'read-spp', 'update-spp', 'delete-spp',
            'create-pembayaran', 'read-pembayaran', 'update-pembayaran', 'delete-pembayaran',
        ]);

        $role3 = Role::create([
            'name' => 'siswa'
        ]);

        // seed kelas
        $kelas1 = Kelas::create([
            'nama_kelas' => 'KOM A',
            'kompetensi_keahlian' => 'Teknolog Informasi',
        ]);

        $kelas2 = Kelas::create([
            'nama_kelas' => 'KOM B',
            'kompetensi_keahlian' => 'TeknolTeknologi Informasisi',
        ]);

        $kelas3 = Kelas::create([
            'nama_kelas' => 'KOM C',
            'kompetensi_keahlian' => 'Teknologi Informasi',
        ]);

    	$user1 = User::create([
    		'username' => 'admintaufiq',
    		'email' => 'admintaufiq@gmail.com',
    		'password' => Hash::make('password'),
    	]);

        $user1->assignRole('admin');

        $petugas1 = Petugas::create([
            'user_id' => $user1->id,
            'kode_petugas' => 'PTG'.Str::upper(Str::random(5)),
            'nama_petugas' => 'Taufiq Akbar',
            'jenis_kelamin' => 'Laki-laki',
        ]);

		$user2 = User::create([
    		'username' => 'petugasfani',
    		'email' => 'petugasfani@gmail.com',
    		'password' => Hash::make('password'),
    	]);

        $user2->assignRole('petugas');

        $petugas2 = Petugas::create([
            'user_id' => $user2->id,
            'kode_petugas' => 'PTG'.Str::upper(Str::random(5)),
            'nama_petugas' => 'Fani Windari',
            'jenis_kelamin' => 'Perempuan',
        ]);

        $user3 = User::create([
    		'username' => 'petugashuda',
    		'email' => 'petugashuda@gmail.com',
    		'password' => Hash::make('password'),
    	]);

        $user3->assignRole('petugas');

        $petugas3 = Petugas::create([
            'user_id' => $user3->id,
            'kode_petugas' => 'PTG'.Str::upper(Str::random(5)),
            'nama_petugas' => 'Nurul Huda',
            'jenis_kelamin' => 'Laki-laki',
        ]);

    	$user4 = User::create([
    		'username' => 'siswasarmida',
    		'email' => 'siswasarmida@gmail.com',
    		'password' => Hash::make('password'),
    	]);

        $user4->assignRole('siswa');

        Siswa::create([
            'user_id' => $user4->id,
            'kode_siswa' => 'SSW'.Str::upper(Str::random(5)),
            'nisn' => '211402071',
            'nis' => '00001',
            'nama_siswa' => 'Sarmida',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Samosir',
            'wali_siswa' => 'Sinaga',
            'no_telepon' => '082362050182',
            'kelas_id' => $kelas1->id,
        ]);

    	$user5 = User::create([
    		'username' => 'siswanadya',
    		'email' => 'siswanadya@gmail.com',
    		'password' => Hash::make('password'),
    	]);    	

        $user5->assignRole('siswa');

        Siswa::create([
            'user_id' => $user5->id,
            'kode_siswa' => 'SSW'.Str::upper(Str::random(5)),
            'nisn' => '211402154',
            'nis' => '00002',
            'nama_siswa' => 'Nadya Ruth',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Medan',
            'wali_siswa' => 'Purba',
            'no_telepon' => '082363117590',
            'kelas_id' => $kelas2->id,
        ]);
    	
    }
}
