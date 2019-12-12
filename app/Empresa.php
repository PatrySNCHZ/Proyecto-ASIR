<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {

    public function plataformas() {
        return $this->hasMany('App\Plataformas');
    }

}
