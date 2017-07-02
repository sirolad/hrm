<?php

namespace Sirolad;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;

    const EMPLOYEE = 2;

    const MANAGER = 3;
}
