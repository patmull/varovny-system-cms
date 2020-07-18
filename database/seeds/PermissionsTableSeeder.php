<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('permissions')->truncate();

     // crud post
     $crudPost = new Permission();
     $crudPost->name = "crud-posts";
     $crudPost->save();

     // update others post
     $updateOthersPost = new Permission();
     $updateOthersPost->name = "update-others-posts";
     $updateOthersPost->save();

     // delete others post
     $deleteOthersPost = new Permission();
     $deleteOthersPost->name = "delete-others-posts";
     $deleteOthersPost->save();

     // crud category
     $crudCategory = new Permission();
     $crudCategory->name = "crud-categories";
     $crudCategory->save();

     // crud user
     $crudUser = new Permission();
     $crudUser->name = "crud-users";
     $crudUser->save();

     // attach roles permissions
     $admin = Role::whereName('admin')->first();
     $editor = Role::whereName('editor')->first();
     $author = Role::whereName('author')->first();

     $admin->detachPermissions([$crudPost, $updateOthersPost, $deleteOthersPost, $crudCategory, $crudUser]);
     $admin->attachPermissions([$crudPost, $updateOthersPost, $deleteOthersPost, $crudCategory, $crudUser]);

     $editor->detachPermissions([$crudPost, $updateOthersPost, $deleteOthersPost, $crudCategory]);
     $editor->attachPermissions([$crudPost, $updateOthersPost, $deleteOthersPost, $crudCategory]);

     $author->detachPermission($crudPost);
     $author->attachPermission($crudPost);
    }
}
