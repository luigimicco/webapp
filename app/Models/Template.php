<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class Template extends Model
{
    use Notifiable;
    use Sortable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name', 'body', 'active' ];

    public $sortable = ['name', 'active'];

    protected $dates = ['deleted_at'];

}
