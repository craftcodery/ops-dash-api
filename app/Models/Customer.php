<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property \Carbon\CarbonInterface $created_at
 * @property \Carbon\CarbonInterface $updated_at
 */
class Customer extends Model
{
    use HasFactory;
}
