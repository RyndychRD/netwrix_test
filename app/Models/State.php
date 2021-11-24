<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $state_id
 * @property string $name
 * @property string $short_name
 * @property int $country_id
 */
class State extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'loc_state';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'state_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'short_name', 'country_id'];

}
