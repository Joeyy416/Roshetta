<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
          'name' => $this->name,
          'email' => $this->email,
          'phone' => $this->phone,
          'gender' => $this->gender

        ];
    }

    public function with($request){
      $auth = auth()->check();
      return [
        'additional' => $request->session()->all(),
        'authenticated' => $auth
      ];
    }

}
