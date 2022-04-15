<?php

use Dcourtin\YellowCms\Http\Controllers\NodeController;

Route::get('/{nodeType}/{page?}/index',[NodeController::class, 'nodeList'])->name('nodeList');
Route::get('/{nodeType}/{nodeSlug}/show',[NodeController::class, 'nodeShow'])->name('nodeShow');

/*
Route::get('/admin/{nodeType}/{page?}/index',
        [NodeAdminController::class, 'nodeList'])
    ->name('adminNodeList');
Route::get('/admin/{nodeType}/{nodeSlug}/show',
        [NodeAdminController::class, 'nodeShow'])
    ->name('adminNodeShow');
*/

Route::get('/admin/node_type/index', [NodeTypeController::class, 'index'])->name('node_type_index');
Route::get('/admin/node_type/show/{id}', [NodeTypeController::class, 'show'])->name('node_type_show');

Route::get('/admin/node_field/index', [NodeFieldController::class, 'index']);
Route::get('/admin/node_field/show/{id}', [NodeFieldController::class, 'show']);

Route::get('/admin/node/index/{node_type_id}', [NodeController::class, 'index'])->name('node_index');
Route::get('/admin/node/show/{id}', [NodeController::class, 'show'])->name('node_show');
Route::get('/admin/node/edit/{id}', [NodeController::class, 'edit'])->name('node_edit');
Route::get('/admin/node/create/{node_type_id}', [NodeController::class, 'create'])->name('node_create');
Route::post('/admin/node/store', [NodeController::class,'store'])->name('node_store');
