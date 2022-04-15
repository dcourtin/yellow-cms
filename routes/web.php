<?php

Route::get('/{nodeType}/{page?}/index',[NodeController::class, 'nodeList'])->name('nodeList');
Route::get('/{nodeType}/{nodeSlug}/show',[NodeController::class, 'nodeShow'])->name('nodeShow');