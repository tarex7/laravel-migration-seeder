<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function onTime() {
        return ($this->in_orario) ? 'Si' : 'No';
    }

    public function trainDeleted() {
        return ($this->cancellato) ? 'Si' : 'No';
    }

    public function getTime($v) {
        return substr( $this->$v, 0, 5 );
    }
}
