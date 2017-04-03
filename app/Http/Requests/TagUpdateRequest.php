<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\TagCreateRequest;

class TagUpdateRequest extends TagCreateRequest
{
    // all method is inherited from TagCreateRequest
    public function rules()
      {
          return [
            'title' => 'required',
            'subtitle' => 'required',
            'meta_description' => 'required',
          ];
      }
}
