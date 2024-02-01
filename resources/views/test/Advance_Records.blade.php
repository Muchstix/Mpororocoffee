<?php

use App\User;
use Illuminate\Database\Eloquent\Builder;

public $title = "Advance Records";

protected $model = User::class;

/**
 * Sets a initial query with the data to fill the table
 *
 * @return Builder Eloquent query
 */
public function repository(): Builder
{
    return User::query();
}

public function headers(): array
{
    return ['Name', 'Amount taken', 'Amount paid', 'Balance', 'Actions'];
}

public function row($model)
{
    return [
        $model->name,
        $model->Amount taken,
        $model->Amount paid,
        $model->Balance,
        $model->Actions
    ];
}

public function data($model)
{
    return [
        'avatar' => $model->avatar,
        'title' => $mode->name,
        'subtitle' => $model->email,
    ];
}