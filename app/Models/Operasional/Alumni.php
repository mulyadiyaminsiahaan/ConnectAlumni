<?php

namespace App\Models\Operasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni extends Model
{
    //use HasFactory;

   use SoftDeletes;

   //declare table
   public $table = 'alumni';

   //this field must type date yyyy-mm-dd hh:mm:ss 
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable 
   protected $fillable = [
       'job_id',
       'name',
       'fee',
       'photo',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

    //one to many
    public function job()
    {
        //3 parameter (path model, field foreign key, field primary key from table haMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Job', 'job_id', 'id');
    }

    //one to many
   public function meet()
   {
       //2 parameter (path model, field foreign key)
       return $this->hasMany('App\Operasional\Meet', 'alumni_id');
   }
}
