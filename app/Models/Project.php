<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $customer_id
 * @property string $name
 * @property \Carbon\CarbonInterface $created_at
 * @property \Carbon\CarbonInterface $updated_at
 *
 * @property Customer $customer
 */
class Project extends Model
{
    use HasFactory;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
