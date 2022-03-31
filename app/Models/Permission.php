<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Permission extends Model
{
    use Sortable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'active' ];

    public $sortable = ['nome', 'active'];    
    
    protected $dates = ['deleted_at'];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
