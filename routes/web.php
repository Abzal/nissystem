<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SkdController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TeacherRouteItemController;
use App\Http\Controllers\TeacherRouteController;
use App\Http\Controllers\LibController;
use App\Http\Controllers\TetController;
use App\Http\Middleware\CheckRole;

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/nav', [MainController::class, 'nav'])->name('nav');


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/piple', [SkdController::class, 'piple'])->name('piple');
Route::get('/lessons', [LessonController::class, 'lessons'])->name('lessons');
Route::get('/categories', [ClassController::class, 'categories'])->name('categories');
Route::get('/categories/{id}', [ClassController::class, 'classes'])->name('classes');
Route::get('/categories/{id}/{sid?}', [ClassController::class, 'students'])->name('students');
Route::get('/library', [LibController::class, 'library'])->name('library');
Route::post('/library/add', [LibController::class, 'addbooks'])->name('library-addbook');
Route::any('/library/update/{id}', [LibController::class, 'addbooksUpdate'])->name('library-updatebook');
Route::get('/library/delete/{id}', [LibController::class, 'deleteBook'])->name('library-deletebook');
Route::get('/tet', [TetController::class, 'tetShow'])->name('tet-show');
Route::get('/tet/show', [TetController::class, 'show'])->name('show');







Route::middleware(['auth','role:admin'])->group(function (){
	Route::get('/routes/items', [TeacherRouteItemController::class, 'actionIndex'])->name('teacher-route-item');

Route::get('dashboard/box', [MainController::class, 'boxes'])->name('boxes');
Route::post('dashboard/box/submit', [MainController::class, 'submit'])->name('box-form');

	Route::post('/routes/additem', [TeacherRouteItemController::class, 'actionCreate'])->name('add-teacher-route-item');
	Route::get('/routes/delitem/{id?}', [TeacherRouteItemController::class, 'actionDelete'])->name('del-teacher-route-item');
	
	Route::get('/tet/list', [TetController::class, 'tetList'])->name('tet-list');
	Route::post('/tet/list/add', [TetController::class, 'tetAdd'])->name('tet-add');
});

Route::middleware(['auth'])->group(function (){
	Route::get('/routes/index', [TeacherRouteController::class, 'actionIndex'])->name('teacher-route-index');
	Route::get('/routes/del/{id?}', [TeacherRouteController::class, 'actionDelete'])->name('del-teacher-route');
	Route::any('/routes/create/{id?}', [TeacherRouteController::class, 'actionCreate'])->name('add-teacher-route');
});	

Route::middleware(['auth','role:KMmoderator'])->group(function (){
	Route::get('/routes/allview', [TeacherRouteController::class, 'actionAllview'])->name('teacher-route-allview');
	Route::get('/routes/view/{id?}', [TeacherRouteController::class, 'actionView'])->name('teacher-route-view');
});	
	
