<?php

namespace App\Models\ManagementAccsess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
   //use HasFactory;

   use SoftDeletes;

   //declare table
   public $table = 'permission_role';

   //this field must type date yyyy-mm-dd hh:mm:ss 
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable 
   protected $fillable = [
       'permission_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //one to many
   public function permission()
   {
       //3 parameter (path model, field foreign key, field primary key from table haMany/hasOne)
       return $this->belongsTo('App\Models\ManagementAccsess\Permission', 'permission_id', 'id');
   }

   //one to many
   public function role()
   {
       //3 parameter (path model, field foreign key, field primary key from table haMany/hasOne)
       return $this->belongsTo('App\Models\ManagementAccsess\Role', 'role_id', 'id');
   }
}
