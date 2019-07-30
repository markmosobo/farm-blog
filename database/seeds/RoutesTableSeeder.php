<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\Route;
use App\Models\Route;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder
{
    const SystemAdmin = 'SYSADMIN';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\RoleRoute::truncate();
        \Illuminate\Support\Facades\DB::table('routes')->delete();
        $admin = Role::where('code', self::SystemAdmin)->first();
        $frontOffice = Role::where('code','FRONTOFFICE')->first();
        $manager = Role::where('code','MANAGER')->first();
        $coreAdmin = Role::where('code','ADMIN')->first();
        $fofficer = Role::where('code','FIELDOFFICER')->first();




//        #### Dashboard
        $dashboard = new Route();
        $dashboard->route_name = 'Dashboard';
        $dashboard->icon = 'fa-dashboard';
        $dashboard->sequence = 1;
        $dashboard->save();
        $dashboard_id = $dashboard->id;

        #### Dashboard child
        $analytics_dash = new Route();
        $analytics_dash->route_name = 'Analytics Dashboard';
        $analytics_dash->url = 'home';
        $analytics_dash->parent_route = $dashboard_id;
        $analytics_dash->save();
        $analytics_dash->roles()->attach($admin);
        $analytics_dash->roles()->attach($manager);
        $analytics_dash->roles()->attach($coreAdmin);


        ####### Configurations

        $parent = Route::create([
            'route_name'=> 'Configurations',
            'icon'=> 'fa-wrench',
            'sequence'=>2,
        ]);
        $child = Route::create([
            'route_name'=>'Farm Tools',
            'parent_route' => $parent->id,
            'url'=>'farmtools'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);


        $child = Route::create([
            'route_name'=>'Crops',
            'parent_route' => $parent->id,
            'url'=>'crops'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'About',
            'parent_route' => $parent->id,
            'url'=>'abouts'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);



        ####### crm

        $parent = Route::create([
            'route_name'=> 'CRM',
            'icon'=> 'fa-users',
            'sequence'=>3,
        ]);

        $child = Route::create([
            'route_name'=>'All Labour',
            'parent_route' => $parent->id,
            'url'=>'landlords'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'All Tenants',
            'parent_route' => $parent->id,
            'url'=>'tenants'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'All Staff',
            'parent_route' => $parent->id,
            'url'=>'staff'
        ]);
        $child->roles()->attach($admin);


        $child = Route::create([
            'route_name'=>'All Customers',
            'parent_route' => $parent->id,
            'url'=>'customers'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        ####farming costs
        $parent = Route::create([
            'route_name'=> 'Farming Costs',
            'icon'=> 'fa-users',
            'sequence'=>3,
        ]);

        $child = Route::create([
            'route_name'=>'Production Costs',
            'parent_route' => $parent->id,
            'url'=>'landlords'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'Labour Costs',
            'parent_route' => $parent->id,
            'url'=>'landlords'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'Projected Yields',
            'parent_route' => $parent->id,
            'url'=>'landlords'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        ##stories
        $parent = Route::create([
            'route_name'=> 'Stories',
            'icon'=> 'fa-users',
            'sequence'=>3,
        ]);

        $child = Route::create([
            'route_name'=>'Manage Authors',
            'parent_route' => $parent->id,
            'url'=>'authors'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'Manage Stories',
            'parent_route' => $parent->id,
            'url'=>'stories'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'Projected Yields',
            'parent_route' => $parent->id,
            'url'=>'landlords'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        ####borrowing and lending
        $parent = Route::create([
            'route_name'=> 'Exchange Programmes',
            'icon'=> 'fa-users',
            'sequence'=>3,
        ]);

        $child = Route::create([
            'route_name'=>'Lent Farm Tools',
            'parent_route' => $parent->id,
            'url'=>'lendfarmtools'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        $child = Route::create([
            'route_name'=>'Borrowed Farm Tools',
            'parent_route' => $parent->id,
            'url'=>'borrowedfarmtools'
        ]);
        $child->roles()->attach($admin);
        $child->roles()->attach($frontOffice);
        $child->roles()->attach($manager);
        $child->roles()->attach($coreAdmin);

        #### user management
        $user_mngt = new Route();
        $user_mngt->route_name = 'User Manager';
        $user_mngt->icon = 'fa-user';
        $user_mngt->sequence = 6;
        $user_mngt->save();
        $user_mngt_id = $user_mngt->id;
//
        #### user management children
        $all_user = new Route();
        $all_user->route_name = 'All Users';
        $all_user->url = 'users';
        $all_user->parent_route = $user_mngt_id;
        $all_user->save();
        $all_user->roles()->attach($admin);

        ####notices
        $all_user = new Route();
        $all_user->route_name = 'Notices';
        $all_user->url = 'notices';
        $all_user->parent_route = $user_mngt_id;
        $all_user->save();
        $all_user->roles()->attach($admin);

        $roles = new Route();
        $roles->route_name = 'Manage User Roles';
        $roles->url = 'roles';
        $roles->parent_route = $user_mngt_id;
        $roles->save();
        $roles->roles()->attach($admin);
        $roles->roles()->attach($coreAdmin);

//////        #### system
//        $system = new Route();
//        $system->route_name = 'System Settings';
//        $system->icon = 'fa-cogs';
//        $system->sequence = 7;
//        $system->save();
//        $system_id = $system->id;
//
//        #### system children
//        $routes = new Route();
//        $routes->route_name = 'System Routes';
//        $routes->url = 'routes';
//        $routes->parent_route = $system_id;
//        $routes->save();
//        $routes->roles()->attach($admin);
    }
}
