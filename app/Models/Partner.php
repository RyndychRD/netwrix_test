<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $company
 * @property string $status
 * @property string $logo
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $countries_covered
 * @property string $states_covered
 */
class Partner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partner_locator';

    /**
     * @var array
     */
    protected $fillable = ['company', 'status', 'logo', 'address', 'website', 'phone', 'countries_covered', 'states_covered'];

//    public function countries()
//    {
//       return $this->hasMany(Country::class);
//    }


}
