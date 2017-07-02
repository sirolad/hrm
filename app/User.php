<?php

namespace Sirolad;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'firstName', 'surname', 'birthDate', 'maritalStatus', 'role',
        'description', 'hireDate', 'image', 'phone', 'permanentAddress', 'country', 'sex',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->attributes['role'] == Role::ADMIN;
    }

    /**
     * @return bool
     */
    public function isEmployee()
    {
        return $this->attributes['role'] == Role::EMPLOYEE;
    }

    /**
     * @return bool
     */
    public function isManager()
    {
        return $this->attributes['role'] == Role::MANAGER;
    }
}
