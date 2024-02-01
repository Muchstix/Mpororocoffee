<?php

use App\User;
use Illuminate\Database\Eloquent\Builder;

public $title = "Purchase Records";

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
    return ['Name', 'Coffee Type', 'Coffee Bought', 'Cutting', 'Amount Paid', 'Actions'];
}

public function row($model)
{
    return [
        $model->name,
        $model->Coffee Type,
        $model->Coffee Bought,
        $model->Cutting,
        $model->Amount paid,
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