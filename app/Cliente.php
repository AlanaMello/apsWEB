<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function lista(){
        return (object) [
            (object) ["nome"=>"Alana"],
            (object) ["nome"=>"Roberta"],
            (object) ["nome"=>"Luana"],
            (object) ["nome"=>"Isadora"],
            (object) ["nome"=>"Laura"],
            (object) ["nome"=>"Aline"],
        ];
    }
}
