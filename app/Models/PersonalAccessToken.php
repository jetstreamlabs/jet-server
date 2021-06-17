<?php

namespace App\Models;

use JSLabs\Snowflake\Concerns\HasSnowflakePrimary;
use Laravel\Sanctum\PersonalAccessToken as SanctumTokens;

class PersonalAccessToken extends SanctumTokens
{
    use HasSnowflakePrimary;
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Return self to ensure proper error handling.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this;
    }
}
