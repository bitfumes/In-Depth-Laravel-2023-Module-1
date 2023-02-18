<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class AvatarController extends Controller
{
    public function update()
    {
        // store avatar
        return redirect(route('profile.edit'));
    }
}
