<?php

use LaravelViews\Facades\UI;

public $searchBy = ['name', 'email'];
public $title = "Farmers Records";

public function data($model)
{
    return [
        'avatar' => $model->avatar,
        'title' => $mode->name,
        'subtitle' => $model->email,
    ];
}

public function detail($model)
{
    return [
      UI::component('components.my-custom-component', ['attribute' => 'value' ]),
      UI::component('components.my-second-component', ['model' => $model]),
      UI::attributes([
        'Name' => $model->name,
        'Email' => $model->email,
        'Address' => $model->address,
        'Phone Number' => $model->phone number,
        'Gender' => $model->gender,
        'Actions' => $model->actions
      ])
    ];
}