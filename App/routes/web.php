<?php

use \Kodlazim\Core\Route;
use Kodlazim\App\Controllers;

Route::get('/', function () {

    $polat = new \Kodlazim\App\Models\User();
    $polat->setFullName('oğuzhan karahan');
    $polat->setEmail('polat@polatq.com');
    $polat->setPassword(md5('asdsada'));
    $polat->save();

    $polat->setEmail('polatpolat@polatqq.com');
    $polat->save();

    return view('home', [
        'username' => 'Oguzhan Karahan'
    ]);
});

Route::get('/hakkimizda', 'about@index')->name('about');
Route::get('/rezervasyon', 'RezervasyonController@form')->name('reservation');
Route::post('/rezervasyon', 'RezervasyonController@rezervasyonPost');
Route::get('/cekim-mekanlari', 'shooting@index')->name('shooting');
Route::get('/soru-cevap', 'support@index')->name('support');
Route::get('/iletisim', 'contact@index')->name('contact');
Route::post('/iletisim', 'contact@contactPost');


Route::post('/api/auth', function () {
    header('Content-Type: application/json');

    if (empty($_POST['email'])) {
        echo json_encode([
            'status' => false,
            'msg' => 'E-Posta alanı zorunludur'
        ]);
        return;
    }

    if (empty($_POST['password'])) {
        echo json_encode([
            'status' => false,
            'msg' => 'Şifre alanı zorunludur'
        ]);
        return;
    }

    $user = new \Kodlazim\App\Models\User();
    /** @var \Kodlazim\App\Models\User $user */
    [$user] = $user->where('email', '=', $_POST['email'])
        ->get();


    if (!password_verify($_POST['password'], $user->getPassword())) {
        echo json_encode([
            'status' => false,
            'msg' => 'Kullanıcı adı veya şifreniz yanlış.'
        ]);
        return;
    }


    try {
        $token = \Kodlazim\Core\Helpers\Str::generateRandomString();
        $user->setToken($token);
        $user->save();
    } catch (Throwable $exception) {
        echo json_encode([
            'status' => false,
            'msg' => 'Giriş işlemi yapılırken bir sorun oluştu.'
        ]);
        return;
    }

    echo json_encode([
        'status' => true,
        'msg' => 'Giriş başarılı',
        'token' => $token
    ]);
});
Route::get('/api/self-info', function () {
    header('Content-Type: application/json');
    $headers = getallheaders();

    if (empty($headers['Authorization'])) {
        echo json_encode([
            'status' => false,
            'msg' => 'Authorization required'
        ]);
    }

    [, $token] = explode(' ', $headers['Authorization']);

    $user = new \Kodlazim\App\Models\User();
    $user = $user->where('token', '=', trim($token))->get();

    if (empty($user[0]->getId())) {
        echo json_encode([
            'status' => false,
            'msg' => 'User not found'
        ]);
        return;
    }

    echo json_encode([
        'status' => true,
        'msg' => 'User information successfully fetched',
        'user' => $user[0]
    ]);


});


//
////Route::get('/user/:id1/:id2', 'User@detail')->name('user');
//
//Route::get('/@:username', function ($username){
//    return 'üye adınız = ' . $username;
//})->where('username', '[a-z]+');
//
//Route::get('/search/:search', function ($q){
//    return 'Aranan Kelime = ' . rawurldecode($q);
//})->where('search', '.*');
//

Route::prefix('/admin')->group(['namespace' => 'admin'], function () {
    Route::get('/', 'Admin\AdminControllers@index')->name('index');
    Route::get('/users', 'admin@index');
    Route::get('/settings', 'Settings@settings')->name('settings');
    Route::post('/settings', [Controllers\Admin\Settings::class, 'settingsPost']);
});
Route::redirect('/php-dersleri', '/php');


