<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'table__books';


    protected $fillable = [
        'name',
        'pages',
        'IBN',
        'category',
        'publisher',
        'year_of_publication',
        'user_id',
        // Add other fields as needed
    ];

   
    public function user(){
        return $this->belongsTo(User::class);
    }
}
