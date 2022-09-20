<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function onTime() {
        return ($this->In_orario) ? 'Si' : 'No';
    }

    public function trainDeleted() {
        return ($this->Cancellato) ? 'Si' : 'No';
    }
}
