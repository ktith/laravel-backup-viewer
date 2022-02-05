<?php

use Illuminate\Support\Facades\Route;
use k_tith\BackupViewer\Http\Controllers\BackupViewerController;

Route::group([
    'prefix' => 'backup',
    'as' => 'backup.',
    // 'middleware' => 'role:'.config('boilerplate.access.role.admin'),

], function () {
    Route::get('/', [BackupViewerController::class, 'index'])
        ->name('index');

    // Route::get('create', [RoleController::class, 'create'])
    //     ->name('create')
    //     ->breadcrumbs(function (Trail $trail) {
    //         $trail->parent('admin.auth.role.index')
    //             ->push(__('Create Role'), route('admin.auth.role.create'));
    //     });

    // Route::post('/', [RoleController::class, 'store'])->name('store');

    // Route::group(['prefix' => '{role}'], function () {
    //     Route::get('edit', [RoleController::class, 'edit'])
    //         ->name('edit')
    //         ->breadcrumbs(function (Trail $trail, Role $role) {
    //             $trail->parent('admin.auth.role.index')
    //                 ->push(__('Editing :role', ['role' => $role->name]), route('admin.auth.role.edit', $role));
    //         });

    //     Route::patch('/', [RoleController::class, 'update'])->name('update');
    //     Route::delete('/', [RoleController::class, 'destroy'])->name('destroy');
    // });
});
