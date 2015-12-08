<?php namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ShiftTransformer extends TransformerAbstract {

    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform($resource) {
        //
    }

}
