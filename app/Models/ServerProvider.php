<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServerProvider extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'server_providers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $orderable = [
        'id',
        'serverprovider',
        'label',
        'providertype',
        'planid',
        'region',
        'server_providerid',
    ];

    public $filterable = [
        'id',
        'serverprovider',
        'label',
        'providertype',
        'planid',
        'region',
        'server_providerid',
    ];

    protected $fillable = [
        'serverprovider',
        'label',
        'providertype',
        'planid',
        'plandescription',
        'region',
        'region_name',
        'server_providerid',
    ];

    public const PROVIDERTYPE_SELECT = [
        'hetzner'   => 'H-Cloud',
        'linode'    => 'L-Cloud',
        'vultr'     => 'V-cloud',
        'upcloud'   => 'U-Cloud',
        'lightsail' => 'A-Cloud',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getProvidertypeLabelAttribute($value)
    {
        return static::PROVIDERTYPE_SELECT[$this->providertype] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
