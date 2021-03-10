<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model {
    public $timestamps = FALSE;

    const CREATED_AT = 'start_date';
    const UPDATED_AT = 'end_date';
}
