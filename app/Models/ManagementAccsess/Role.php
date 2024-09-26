<?php

namespace App\Models\ManagementAccsess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;

   use SoftDeletes;

   //declare table
   public $table = 'role';

   //this field must type date yyyy-mm-dd hh:mm:ss 
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable 
   protected $fillable = [
       'title',
       'updated_at',
       'deleted_at',
   ];
}
