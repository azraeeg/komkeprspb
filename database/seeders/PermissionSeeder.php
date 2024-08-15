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
        $perbidUsers = User::whereIn('id', [1399, 1400, 1401, 1402, 1403, 1404, 1405, 1406, 1407, 1408, 1409, 1410, 1411, 1412, 1413, 1414, 1415, 1416, 1417, 1418, 1419, 1420, 1421, 1422, 1423, 1424, 1425, 1426, 1427, 1428, 1429, 1430, 1431, 1432, 1433, 1434, 1435, 1436, 1437, 1438, 1439, 1440, 1441, 1442, 1443, 1444, 1445, 1446, 1447, 1448, 1449, 1450, 1451, 1452, 1453, 1454, 1455, 1456, 1457, 1458, 1459, 1460, 1461, 1462, 1463, 1464, 1465, 1466, 1467, 1468, 1469, 1470, 1471, 1472, 1473, 1474, 1475, 1476, 1477, 1478, 1479, 1480, 1481, 1482, 1483, 1484, 1485, 1486, 1487, 1488, 1489, 1490, 1491, 1492, 1493, 1494, 1495, 1496, 1497, 1498, 1499, 1500, 1501, 1502, 1503, 1504, 1505, 1506, 1507, 1508, 1509, 1510, 1511, 1512, 1513, 1514, 1515, 1516, 1517, 1518, 1519, 1520, 1521, 1522, 1523, 1524, 1525, 1526, 1527, 1528, 1529, 1530, 1531, 1532, 1533, 1534, 1535, 1536, 1537, 1538, 1539, 1540, 1541, 1542, 1543, 1544, 1545, 1546, 1547, 1548, 1549, 1550, 1551, 1552, 1553, 1554, 1555, 1556, 1557, 1558, 1559, 1560, 1561, 1562, 1563, 1564, 1565, 1566, 1567, 1568, 1569, 1570, 1571, 1572, 1573, 1574, 1575, 1576, 1577, 1578, 1579, 1580, 1581, 1582, 1583, 1584])->get();
        foreach ($perbidUsers as $perbidUsers) {
            $perbidUsers->assignRole('perbid');
        }

        $adminUsers = User::whereIn('id', [1589])->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->assignRole('admin');
        }

        $karuUsers = User::whereIn('id', [1590, 1591, 1592, 1593, 1594, 1595, 1596, 1597, 1598, 1599, 1600, 1601, 1602, 1603, 1604])->get();
        foreach ($karuUsers as $karuUser) {
            $karuUser->assignRole('karu');
        }

        $hrdUsers = User::whereIn('id', [1605])->get();
        foreach ($hrdUsers as $hrdUser) {
            $hrdUser->assignRole('hrd');
        }

        $sekreUsers = User::whereIn('id', [1606])->get();
        foreach ($sekreUsers as $sekreUser) {
            $sekreUser->assignRole('sekretaris');
        }
    }
}
