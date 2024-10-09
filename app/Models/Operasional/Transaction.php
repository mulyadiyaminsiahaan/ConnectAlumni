<?php

namespace App\Models\Operasional;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
     //use HasFactory;

//    use SoftDeletes;

   //declare table
   public $table = 'meet';

   //this field must type date yyyy-mm-dd hh:mm:ss 
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable 
   protected $fillable = [
       'alumni_id',
       'config_payment',
       'fee_alumni',
       'fee_job',
       'sub_total',
       'vat',
       'total',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

    //one to many
    public function meet()
    {
        //3 parameter (path model, field foreign key, field primary key from table haMany/hasOne)
        return $this->belongsTo('App\Models\Operasional\Meet', 'meet_id', 'id');
    }
}
