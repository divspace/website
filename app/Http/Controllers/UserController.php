<?php namespace App\Http\Controllers;

use Fractal;
use App\User;
use App\Transformers\UserTransformer;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function all() {
        $users = User::paginate(10);

        return Fractal::collection($users, new UserTransformer)->responseJson(200);
    }

}
