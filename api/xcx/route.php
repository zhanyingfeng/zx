<?php

/**
 * Created by PhpStorm.
 * User: afeng
 * Date: 18/4/18
 * Time: 上午9:56
 */

use think\Route;

Route::resource('case', 'xcx/Case');
Route::resource('designer', 'xcx/Designer');
Route::resource('case_category', 'xcx/CaseCategory');