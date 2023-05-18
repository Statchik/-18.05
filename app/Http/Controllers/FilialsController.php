<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FilialsController extends Controller
{
    public function filials()
    {
        $users = DB::table('users')->get();
        return view('filials', ['users' => $users]);
    }

    public function edit(Request $request,$id) {
        $name = $request->input('stud_name');
        DB::update('update users set name = ? where id = ?',[$name,$id]);
        echo "Вы успешно обновили данные пользователя.<br/>";
        echo '<a href="/public/admin">Нажмите сюда</a> чтобы вернуться назад.';
     }
}
