<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'type',
        'contenu',
        'status',
        'id_client',
        'document_path'
    ];
}
