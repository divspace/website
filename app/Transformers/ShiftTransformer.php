<?php namespace App\Transformers;

use Carbon\Carbon;
use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ShiftTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform($shift)
    {
        return [
            'id' => $shift->id,
            'user_id' => $shift->user_id,
            'break' => $shift->break,
            'start_time' => Carbon::createFromFormat('Y-m-d H:i:s', $shift->start_time)->toRfc2822String(),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i:s', $shift->end_time)->toRfc2822String(),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $shift->created_at)->toRfc2822String(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', $shift->updated_at)->toRfc2822String()
        ];
    }
}
