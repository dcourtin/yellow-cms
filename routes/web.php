<?php

use Dcourtin\YellowCms\Http\Controllers\NodeController;

Route::get('/{nodeType}/{page?}/index',[NodeController::class, 'nodeList'])->name('nodeList');
Route::get('/{nodeType}/{nodeSlug}/show',[NodeController::class, 'nodeShow'])->name('nodeShow');


Route::get('/admin', function(){
    return redirect()->route('adminNodeList');
 })->name('adminNodeList');


Route::get('/admin/{nodeType}/{page?}/index',
        [NodeAdminController::class, 'nodeList'])
    ->name('adminNodeList');
Route::get('/admin/{nodeType}/{nodeSlug}/show',
        [NodeAdminController::class, 'nodeShow'])
    ->name('adminNodeShow');
