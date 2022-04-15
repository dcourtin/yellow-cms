<?php

use Dcourtin\YellowCms\Http\Controllers\NodeController;
use Dcourtin\YellowCms\Http\Controllers\AdminNodeController;
use Dcourtin\YellowCms\Http\Controllers\AdminNodeTypeController;
use Dcourtin\YellowCms\Http\Controllers\AdminNodeFieldController;

/** ACCÈS FRONT */
Route::get('/{nodeType}/{page?}/index',[NodeController::class, 'nodeList'])
        ->where('page', '[0-9]+')
        ->name('nodeList');

Route::get('/{nodeType}/{nodeSlug}/show',[NodeController::class, 'nodeShow'])
        ->name('nodeShow');

/** NODE_TYPES */
Route::get('/admin/node_type/index', [AdminNodeTypeController::class, 'index'])
        ->name('node_type_index');

Route::get('/admin/node_type/show/{id}', [AdminNodeTypeController::class, 'show'])
        ->where('id', '[0-9]+')
        ->name('node_type_show');

Route::get('/admin/node_type/edit/{id}', [AdminNodeTypeController::class, 'edit'])
        ->name('node_type_edit');

Route::get('/admin/node_type/create', [AdminNodeTypeController::class, 'create'])
        ->name('node_type_create');

Route::post('/admin/node_type/store', [AdminNodeTypeController::class, 'store'])
        ->name('node_type_store');

/** NODE_FIELDS */
Route::get('/admin/node_field/index', [AdminNodeFieldController::class, 'index']);
Route::get('/admin/node_field/show/{id}', [AdminNodeFieldController::class, 'show']);

/** NODES */
Route::get('/admin/node/index/{node_type_id}', [AdminNodeController::class, 'index'])
        ->name('node_index');

Route::get('/admin/node/show/{id}', [AdminNodeController::class, 'show'])
        ->name('node_show');

Route::get('/admin/node/edit/{id}', [AdminNodeController::class, 'edit'])
        ->name('node_edit');

Route::get('/admin/node/create/{node_type_id}', [AdminNodeController::class, 'create'])
        ->name('node_create');

Route::post('/admin/node/store', [AdminNodeController::class,'store'])
        ->name('node_store');
