<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [

            // 'user-list',
            // 'user-create',
            // 'user-edit',
            // 'user-delete',
            // 'news-list',
            // 'news-create',
            // 'news-edit',
            // 'news-delete',
            // 'polls-list',
            // 'polls-create',
            // 'polls-edit',
            // 'polls-delete',
            // 'blog-list',
            // 'blog-create',
            // 'blog-edit',
            // 'blog-delete',
            // 'course-list',
            // 'course-create',
            // 'course-edit',
            // 'course-delete',
            // 'client-list',
            // 'client-create',
            // 'client-edit',
            // 'client-delete',
            // 'expert-list',
            // 'expert-create',
            // 'expert-edit',
            // 'expert-delete',
            // 'role-list',
            // 'role-create',
            // 'role-edit',
            // 'role-delete',


            'packages-list',
            'packages-create',
            'packages-edit',
            'packages-delete',

            'tasks-list',
            'tasks-create',
            'tasks-edit',
            'tasks-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
