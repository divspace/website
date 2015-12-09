<?php namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ShiftTransformer extends TransformerAbstract {

    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform($shift) {
        return [
            'id' => $shift->id,
            'user_id' => $shift->user_id,
            'break' => $shift->break,
            'start_time' => $shift->start_time,
            'end_time' => $shift->end_time,
            'created_at' => $shift->created_at,
            'updated_at' => $shift->updated_at
        ];
    }

}
