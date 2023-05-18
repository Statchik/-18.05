<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminProfileController extends Controller
{
    public function AdminProfile()
    {
        $users = DB::table('users')->get();
        return view('adminprofile', ['users' => $users]);
    }

    public function destroy($id)
    {
        DB::delete('delete from users where id = ?', [$id]);
        echo "Вы успешно удалили аккаунт пользователя.<br/>";
        echo '<a href="/public/admin">Нажмите сюда</a> чтобы вернуться назад.';
    }

    public function show($id) {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('filials',['users'=>$users]);
     }
}
