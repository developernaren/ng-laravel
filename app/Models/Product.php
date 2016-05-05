<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'slug' ];


    function getNameAttribute( $value ) {

        return ucwords( $value );
    }


    function scopeForSlug( $q, $slug ) {

        return $q->whereSlug( $slug );
    }
}