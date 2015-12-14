<?php namespace App\Transformers;

use Carbon\Carbon;
use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform($user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'role' => $user->role,
            'email' => strtolower($user->email),
            'phone' => preg_replace('/^([0-9]{3})([0-9]{3})([0-9]{4})$/', '($1) $2-$3', $user->phone),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->toRfc2822String(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', $user->updated_at)->toRfc2822String()
        ];
    }
}
