<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $country_id
 * @property string $name
 * @property string $short_name
 */
class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'loc_country';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'country_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'short_name'];

}
