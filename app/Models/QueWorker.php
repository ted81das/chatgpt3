<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QueWorker extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'que_workers';

    public const CREATE_STATUS_SELECT = [
        'create' => 'Create',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const QUE_ACTION_SELECT = [
        'pause'   => 'Pause',
        'restart' => 'Restart',
    ];

    public $orderable = [
        'id',
        'site_record.root_domain',
        'connection',
        'queue',
        'maximum_seconds',
        'sleep',
        'processes',
        'backoff',
        'maximum_tries',
    ];

    public $filterable = [
        'id',
        'site_record.root_domain',
        'connection',
        'queue',
        'maximum_seconds',
        'sleep',
        'processes',
        'backoff',
        'maximum_tries',
    ];

    protected $fillable = [
        'site_record_id',
        'connection',
        'queue',
        'maximum_seconds',
        'sleep',
        'processes',
        'backoff',
        'maximum_tries',
        'que_action',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function siteRecord()
    {
        return $this->belongsTo(CloudSite::class);
    }

    public function getCreateStatusLabelAttribute($value)
    {
        return static::CREATE_STATUS_SELECT[$this->create_status] ?? null;
    }

    public function getQueActionLabelAttribute($value)
    {
        return static::QUE_ACTION_SELECT[$this->que_action] ?? null;
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
