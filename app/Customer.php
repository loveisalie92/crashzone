<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'owner', 'address', 'mobile', 'phone',
        'fax', 'email', 'quote', 'date_in', 'date_out', 'estimator',
        'rego', 'dom', 'make', 'model', 'series', 'badge', 'colour',
        'rr'
    ];
}
