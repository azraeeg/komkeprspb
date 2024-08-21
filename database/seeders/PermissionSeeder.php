<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            [
                'name' => 'admin'
            ]
        );
        $role_perbid = Role::updateOrCreate(
            [
                'name' => 'perbid'
            ],
            [
                'name' => 'perbid'
            ]
        );
        $role_karu = Role::updateOrCreate(
            [
                'name' => 'karu'
            ],
            [
                'name' => 'karu'
            ]
        );
        $role_hrd = Role::updateOrCreate(
            [
                'name' => 'hrd'
            ],
            [
                'name' => 'hrd'
            ]
        );
        $role_sekretaris = Role::updateOrCreate(
            [
                'name' => 'sekretaris'
            ],
            [
                'name' => 'sekretaris'
            ]
        );
        // ===========================================

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_all'
            ],
            ['name' => 'view_all']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_profil'
            ],
            ['name' => 'view_profil']
        );

        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'view_penilaian'
            ],
            ['name' => 'view_penilaian']
        );

        $permission4 = Permission::updateOrCreate(
            [
                'name' => 'view_hrd'
            ],
            ['name' => 'view_hrd']
        );

        $permission5 = Permission::updateOrCreate(
            [
                'name' => 'view_perbid'
            ],
            ['name' => 'view_perbid']
        );

        $permission6 = Permission::updateOrCreate(
            [
                'name' => 'view_sekretaris'
            ],
            ['name' => 'view_sekretaris']
        );

        // ====================================
        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission3);
        $role_admin->givePermissionTo($permission4);

        $role_karu->givePermissionTo($permission);
        $role_karu->givePermissionTo($permission2);
        $role_karu->givePermissionTo($permission3);

        $role_hrd->givePermissionTo($permission);
        $role_hrd->givePermissionTo($permission2);
        $role_hrd->givePermissionTo($permission4);

        $role_perbid->givePermissionTo($permission2);
        $role_perbid->givePermissionTo($permission5);

        $role_sekretaris->givePermissionTo($permission6);


        // ====================================
        $perbidUsers = User::whereIn('id', [160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269, 270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281, 282, 283, 284, 285, 286, 287, 288, 289, 290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301, 302, 303, 304, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 322, 323, 324, 325, 326, 327, 328, 329, 330, 331, 332, 333, 334, 335, 336, 337, 338, 339, 340, 341, 342, 343, 344, 345, 346, 347, 348, 349, 350, 351, 352, 353, 354, 355, 356, 357, 358, 359, 360, 361, 362, 363
                ])->get();
        foreach ($perbidUsers as $perbidUsers) {
            $perbidUsers->assignRole('perbid');
        }

        $adminUsers = User::whereIn('id', [364])->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->assignRole('admin');
        }

        $karuUsers = User::whereIn('id', [])->get();
        foreach ($karuUsers as $karuUser) {
            $karuUser->assignRole('karu');
        }

        $hrdUsers = User::whereIn('id', [])->get();
        foreach ($hrdUsers as $hrdUser) {
            $hrdUser->assignRole('hrd');
        }

        $sekreUsers = User::whereIn('id', [])->get();
        foreach ($sekreUsers as $sekreUser) {
            $sekreUser->assignRole('sekretaris');
        }
    }
}
