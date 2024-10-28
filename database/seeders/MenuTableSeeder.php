<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $menus = 
        [
            ['id' => 1, 'parent_id' => 0, 'menu_name' => 'Dashboard', 'route' => 'dashbord.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'parent_id' => 0, 'menu_name' => 'News', 'route' => 'news.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'parent_id' => 0, 'menu_name' => 'Basic Info Manage', 'route' => 'basic-infos.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'parent_id' => 0, 'menu_name' => 'Admin', 'route' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'parent_id' => 0, 'menu_name' => 'Category', 'route' => 'categories.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'parent_id' => 0, 'menu_name' => 'Tags', 'route' => 'tags.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'parent_id' => 0, 'menu_name' => 'Writers', 'route' => 'writers.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'parent_id' => 0, 'menu_name' => 'Reporters', 'route' => 'reporters.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'parent_id' => 0, 'menu_name' => 'Pages', 'route' => 'pages.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'parent_id' => 0, 'menu_name' => 'Polls', 'route' => 'polls.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'parent_id' => 0, 'menu_name' => 'Gallery', 'route' => 'galleries.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'parent_id' => 0, 'menu_name' => 'Ads Positions', 'route' => 'ads-positions.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'parent_id' => 0, 'menu_name' => 'Ads', 'route' => 'my-ads.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'parent_id' => 1, 'menu_name' => 'Today\'s Post', 'route' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'parent_id' => 1, 'menu_name' => 'Total Post', 'route' => NULL, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'parent_id' => 2, 'menu_name' => 'Add', 'route' => 'news.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'parent_id' => 2, 'menu_name' => 'Edit', 'route' => 'news.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'parent_id' => 2, 'menu_name' => 'Delete', 'route' => 'news.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'parent_id' => 4, 'menu_name' => 'Roles', 'route' => 'roles.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'parent_id' => 4, 'menu_name' => 'Admin', 'route' => 'admins.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'parent_id' => 20, 'menu_name' => 'Add', 'route' => 'admins.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'parent_id' => 20, 'menu_name' => 'Edit', 'route' => 'admins.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'parent_id' => 20, 'menu_name' => 'Delete', 'route' => 'admins.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'parent_id' => 19, 'menu_name' => 'Add', 'route' => 'roles.index', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'parent_id' => 19, 'menu_name' => 'Edit', 'route' => 'admins.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'parent_id' => 19, 'menu_name' => 'Delete', 'route' => 'admins.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'parent_id' => 5, 'menu_name' => 'Add', 'route' => 'categories.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'parent_id' => 5, 'menu_name' => 'Edit', 'route' => 'categories.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'parent_id' => 5, 'menu_name' => 'Delete', 'route' => 'categories.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'parent_id' => 6, 'menu_name' => 'Add', 'route' => 'tags.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'parent_id' => 6, 'menu_name' => 'Edit', 'route' => 'tags.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'parent_id' => 6, 'menu_name' => 'Delete', 'route' => 'tags.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'parent_id' => 7, 'menu_name' => 'Add', 'route' => 'writers.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'parent_id' => 7, 'menu_name' => 'Edit', 'route' => 'writers.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'parent_id' => 7, 'menu_name' => 'Delete', 'route' => 'writers.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'parent_id' => 8, 'menu_name' => 'Add', 'route' => 'reporters.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'parent_id' => 8, 'menu_name' => 'Edit', 'route' => 'reporters.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'parent_id' => 8, 'menu_name' => 'Delete', 'route' => 'reporters.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'parent_id' => 9, 'menu_name' => 'Add', 'route' => 'pages.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'parent_id' => 9, 'menu_name' => 'Edit', 'route' => 'pages.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'parent_id' => 9, 'menu_name' => 'Delete', 'route' => 'pages.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'parent_id' => 10, 'menu_name' => 'Add', 'route' => 'polls.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'parent_id' => 10, 'menu_name' => 'Edit', 'route' => 'polls.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'parent_id' => 10, 'menu_name' => 'Delete', 'route' => 'polls.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'parent_id' => 11, 'menu_name' => 'Add', 'route' => 'galleries.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'parent_id' => 11, 'menu_name' => 'Edit', 'route' => 'galleries.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'parent_id' => 11, 'menu_name' => 'Delete', 'route' => 'galleries.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'parent_id' => 12, 'menu_name' => 'Add', 'route' => 'ads-positions.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'parent_id' => 12, 'menu_name' => 'Edit', 'route' => 'ads-positions.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'parent_id' => 12, 'menu_name' => 'Delete', 'route' => 'ads-positions.destroy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'parent_id' => 13, 'menu_name' => 'Add', 'route' => 'my-ads.create', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'parent_id' => 13, 'menu_name' => 'Edit', 'route' => 'my-ads.edit', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 53, 'parent_id' => 13, 'menu_name' => 'Delete', 'route' => 'my-ads.destroy', 'created_at' => now(), 'updated_at' => now()],
        ];
        Menu::insert($menus);
    }
}
