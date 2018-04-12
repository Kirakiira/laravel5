<?php

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
    return view('accueil');
});

Route::get('/accueil.html', function () {
    return view('accueil');
});

Route::get('/connexion.html', function () {
    return view('connexion');
});

Route::get('/inscription.html' , function () {
    return view('inscription');
});

Route::get('/acceuil_connect___tudiant.html' , function () {
    return view('accueil_connecte');
});

Route::get('/d_connexion.html' , function () {
    return view('d_connexion');
});

Route::get('/mot_de_passe_perdu.html' , function () {
    return view('mot_de_passe_perdu');
});

Route::get('e-boutique.html' , function () {
    return view('e-boutique');
});

Route::get('nous_contacter.html' , function () {
    return view('nous_contacter');
});

Route::get('mentions_l_gales.html' , function () {
    return view('mentions_l_gales');
});

Route::get('article.html' , function () {
    return view('article');
});

Route::get('panier.html' , function () {
    return view('panier');
});

Route::get('payement.html' , function () {
    return view('payement');
});

Route::get('confirmation_esp_ce_ou_ch_que.html' , function () {
    return view('confirmation_esp_ce_ou_ch_que');
});

Route::get('favoris.html' , function () {
    return view('favoris');
});

Route::get('page_paypal.html' , function () {
    return view('page_paypal');
});

Route::get('confirmation_de_payement.html' , function () {
    return view('confirmation_payement');
});

Route::get('galerie_de_photo.html' , function () {
    return view('galerie_de_photo');
});

Route::get('image.html' , function () {
    return view('image');
});

Route::get('liste_des_evenement.html' , function () {
    return view('liste_des_evenement');
});

Route::get('bo_te___id_e.html' , function () {
    return view('boite_idee');
});

Route::get('confirmation_mot_de_passe.html' , function () {
    return view('confirmation_mot_de_passe');
});

Route::get('image.html' , function () {
    return view('image');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
