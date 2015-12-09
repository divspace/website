<?php namespace App\Http\Controllers;

use Fractal;
use App\Shift;
use App\Transformers\ShiftTransformer;
use App\Http\Controllers\Controller;

class ShiftController extends Controller {

    public function all() {
        $shifts = Shift::paginate(10);

        return Fractal::collection($shifts, new ShiftTransformer)->responseJson(200);
    }

}
