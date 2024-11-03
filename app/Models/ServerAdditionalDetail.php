<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServerAdditionalDetail extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'server_additional_details';

    protected $fillable = [
        'panelserverid_id',
        'ip',
        'ssh_port',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $orderable = [
        'id',
        'panelserverid.name',
        'ip',
        'ssh_port',
    ];

    public $filterable = [
        'id',
        'panelserverid.name',
        'ip',
        'ssh_port',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function panelserverid()
    {
        return $this->belongsTo(CloudServer::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function authorid()
    {
        return $this->belongsTo(User::class);
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
