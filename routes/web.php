<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RolesAndPermissions;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\AccessControlController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/all/news/post', function () {
    return view('admin.allnewspost');
});
Route::get('/add/news/post', function () {
    return view('admin.addnewspost');
});



Route::get('/category', [CategoryController::class, 'showData']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::put('/category/status/{id}', [CategoryController::class, 'statusUpdate'])->name('category.status');



Route::get('/subcategory', [SubCategoryController::class, 'showData']);
Route::post('/subcategory/store', [SubCategoryController::class, 'store']);
Route::put('/subcategory/update/{id}', [SubCategoryController::class, 'update']);
Route::delete('/subcategory/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
Route::put('/subcategory/status/{id}', [SubCategoryController::class, 'statusUpdate'])->name('subcategory.status');


Route::get('/manage/roles/permissions', [RolesAndPermissions::class, 'showData']);
Route::get('/view/roles/permissions', [AccessControlController::class, 'showData']);
Route::post('/manage/accesscontrol/store', [AccessControlController::class, 'store'])->name('store.access.menu');

Route::post('/manage/roles/store', [RolesAndPermissions::class, 'RolesStore']);
Route::put('/manage/roles/update/{id}', [RolesAndPermissions::class, 'RolesUpdate']);
Route::delete('/manage/roles/{id}', [RolesAndPermissions::class, 'RolesDestroy'])->name('roles.destroy');
Route::put('/manage/roles/status/{id}', [RolesAndPermissions::class, 'RolesStatusUpdate'])->name('roles.status');

Route::post('/manage/permissions/store', [RolesAndPermissions::class, 'PermissionsStore']);
Route::put('/manage/permissions/update/{id}', [RolesAndPermissions::class, 'PermissionsUpdate']);
Route::delete('/manage/permissions/{id}', [RolesAndPermissions::class, 'PermissionsDestroy'])->name('permissions.destroy');
Route::put('/manage/permissions/status/{id}', [RolesAndPermissions::class, 'PermissionsStatusUpdate'])->name('permissions.status');




Route::get('/pending/review', function () {
    return view('admin.pendingreview');
});
Route::get('/approve/review', function () {
    return view('admin.approvereview');
});
Route::get('/all/admin', function () {
    return view('admin.alladmin');
});
Route::get('/add/admin', function () {
    return view('admin.addadmin');
});

