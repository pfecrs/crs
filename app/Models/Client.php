<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Authenticatable
{
    use Notifiable;

    protected $guard = 'client';

    protected $fillable =['nom', 'prenom' , 'email' , 'date_naissance' , 'num_telephone' ,'date_expiration',  'password' , 'cin' , 'entreprise','nb_docs'];

    protected $hidden =['password','remember_token'];
}
