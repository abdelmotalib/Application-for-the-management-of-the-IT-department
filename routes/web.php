<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chercheurController;
use App\Http\Controllers\PersonneController;
use App\Models\Chercheur;
use App\Models\Personne;
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

Route::get('/', function () {
    return view('admin.Gestion.create');
});





Route::get('/test', function () {
    
   /*  $Chercheur= Chercheur::create([
        'rolec' => 'PHD0000'
    ]);

   $Personne= Personne::find(2);
   $Personne->personneable_type = 'App\Models\Chercheur';
   $Personne->personneable_id = $Chercheur->id;
   $Personne->save();

 */
    
    //App\Models\Personne::find(1);
    $Personne= Personne::find(2);
    return $Personne->personneable;

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ajouter une personne dans (create) VALIDE
Route::post('cvs',[PersonneController::class, 'store']);
//formulaire ajouter une personne
Route::get('cvs/personne',[PersonneController::class, 'create']);
//afficher la page affichage des personnes (index) valide 
Route::get('cvs/info', [PersonneController::class, 'index']);
// editer une personne avec index (VALIDE)
Route::get('cvs/{id}/edit', [PersonneController::class, 'edit']);
//modifier une personne
Route::put('cvs/{id}', [PersonneController::class, 'update']);
//supprimer  une personne de (index) VALIDE
Route::delete('cvs/{id}/delete', [PersonneController::class, 'destroy']);

//acceder au chercheur
Route::get('cvs/chercheur',[chercheurController::class, 'create']);
//ajouter chercheur createchercheur VALIDE
Route::post('ajouterchercheur',[chercheurController::class, 'store']);

//afficher chercheur 
Route::get('cvs/chercheurliste',[ChercheurController::class, 'index']);

//editer chercheur 
Route::get('cvs/{id}/editchercheur', [ChercheurController::class, 'edit']);
// effectuer modification 
Route::put('chercheur/{id}', [ChercheurController::class, 'update']);

//supprimer chercheur 
Route::delete('cvs/{id}/deletechercheur', [ChercheurController::class, 'destroy']);


//afficher la page create personne(create) VALIDE 
Route::get('/Ajouterpersonne', function () {
    return view('admin.Gestion.create');
});

Route::get('/afficherpersonnes', function () {
    return view('admin.Gestion.index');
});

Route::get('/Ajouterchercheur', function () {
    return view('admin.Gestion.createchercheur');
});
