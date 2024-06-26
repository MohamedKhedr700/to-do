<?php

namespace App\Http\Requests\Admin;

trait CommonFormRequest
{
    public function attributes(): array
    {
        return [
            'page' => __('admin.attributes.page'),
            'perPage' => __('admin.attributes.perPage'),
            'name' => __('admin.attributes.name'),
            'email' => __('admin.attributes.email'),
            'password' => __('admin.attributes.password'),
        ];
    }
}
