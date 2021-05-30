<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ReclamationController;

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

Route::get('/front', function () {
    return view('Frontoffice.actualite.show');
});

Route::get('/plan', function () {
    return view('Backoffice.article.liste');
});


Route::get('login/client', function () {
    return redirect('/');
});
// Route::get('/', function () {
//     return view('Frontoffice.home');
// });

Route::get('/', function () {
    return view('Frontoffice.hom');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/admin', function () {
//     return view('Backoffice.login');
// });



// Route::group(['middleware' => 'auth:admin'], function () {
    
//     Route::view('/admin', 'admin');
// });

Route::get('login/admin', [LoginController::class, 'showAdminLoginForm'])->name('showAdminLogin');
Route::post('login/admin', [LoginController::class, 'adminLogin'])->name('handleAdminLogin');
Route::get('logout', [LoginController::class, 'adminLogout'])->name('handleAdminLogout');


Route::post('login/client', [LoginController::class, 'clientLogin'])->name('handleClientLogin');

Route::get('register/admin', [RegisterController::class, 'showAdminRegisterForm'])->name('showAdminRegister');
Route::post('register/admin', [RegisterController::class, 'createAdmin'])->name('handleAdminRegister');



Route::post('register/client', [RegisterController::class, 'createClient'])->name('handleClientRegister');






// Route::post('admin/login', [AuthController::class, 'handleAdminLogin'])->name('handleAdminLogin');
Route::get('entreprises', [EntrepriseController::class, 'showHome'])->name('showListeEntreprise');

// Route::namespace('Admin')->middleware('auth:admin')->prefix('admin')->group(function () {
Route::namespace('Admin')->middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('entreprises', [EntrepriseController::class, 'showHome'])->name('showListeEntreprise');
    Route::get('entreprise/add', [EntrepriseController::class, 'showAdd'])->name('showAddEntreprise');
    Route::post('entreprise/add', [EntrepriseController::class, 'handleAdd'])->name('handleAddEntreprise');
    Route::get('entreprise/edit', [EntrepriseController::class, 'showEdit'])->name('showEditEntreprise');
    Route::post('entreprise/edit', [EntrepriseController::class, 'handleEdit'])->name('handleEditEntreprise');
    Route::post('entreprise', [EntrepriseController::class, 'handleDelete'])->name('handleDeleteEntreprise');
    

    Route::get('documents', [DocumentController::class, 'showHomeDocument'])->name('showListeDocument');
    Route::get('document/add', [DocumentController::class, 'showAddDocument'])->name('showAddDocument');
    Route::post('document/add', [DocumentController::class, 'handleAddDocument'])->name('handleAddDocument');
    Route::get('document/edit', [DocumentController::class, 'showEditDocument'])->name('showEditDocument');
    Route::post('document/edit', [DocumentController::class, 'handleEditDocument'])->name('handleEditDocument');
    Route::post('document', [DocumentController::class, 'handleDeleteDocument'])->name('handleDeleteDocument');
    Route::post('document/upload', [DocumentController::class, 'handleAddDocument'])->name('handleUploadDocument');


    Route::get('users', [UserController::class, 'showHomeUsers'])->name('showListeUser');
    Route::get('user/edit', [UserController::class, 'showEditUser'])->name('showEditUser');
    Route::post('user/edit', [UserController::class, 'handleEditUser'])->name('handleEditUser');
    //Route::get('users', [UserController::class, 'showHomeUsers'])->name('showListeUser');




    Route::get('articles', [ArticleController::class, 'showListeArticlesAdmin'])->name('showListeArticle');
    Route::post('articles/add', [ArticleController::class, 'handleArticleAdd'])->name('handleArticleAdd');
    Route::post('articles/drop', [ArticleController::class, 'handleDeleteArticleAdmin'])->name('handleDeleteArticleAdmin');


    Route::get('reclamations', [ReclamationController::class, 'showListeReclamationsAdmin'])->name('showListeReclamations');
    Route::get('reclamation/verif', [ReclamationController::class, 'showAdminEditReclamation'])->name('showEditReclamation');
    Route::post('reclamation/verif', [ReclamationController::class, 'handleAdminEditReclamation'])->name('handleEditReclamation');


    
});

Route::get('/planning', function () {
    return view('Frontoffice.not-planning');
});
// Route::namespace('client')->middleware('auth:client')->prefix('client')->group(function () {

Route::namespace('Client')->middleware('auth:client')->prefix('client')->group(function () {

    Route::get('entreprises', [EntrepriseController::class, 'showHomeClient'])->name('showClientListeEntreprise');
    Route::get('profile', [UserController::class, 'showClientDetails'])->name('showClientDetails');
    Route::post('profile', [UserController::class, 'hanleClientDetails'])->name('handleClientDetails');
    Route::get('articles', [ArticleController::class, 'showListeArticlesClient'])->name('showListeArticlesClient');
    Route::post('article', [ArticleController::class, 'showOneArticleClient'])->name('showOneArticleClient');

    Route::get('entreprise/rechercher', [EntrepriseController::class,'showSearch'])->name('showSearchEntreprise');
    Route::post('entreprise/rechercher', [EntrepriseController::class,'handleSearch'])->name('handleSearchEntreprise');
    


    Route::get('reclamations',[ReclamationController::class,'showClientListeReclamations'])->name('showReclamationIndexClient');
    Route::get('reclamation/add',[ReclamationController::class,'showClientAddReclamation'])->name('showReclamationAddClient');
    Route::post('reclamation/add',[ReclamationController::class,'handleClientAddReclamation'])->name('handleReclamationAddClient');
});