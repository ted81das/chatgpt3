<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daemon extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'daemons';

    public const CREATE_STATUS_SELECT = [
        'created' => 'created',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const DAEMON_ACTION_SELECT = [
        'pause'   => 'Pause',
        'restart' => 'Restart',
    ];

    public $orderable = [
        'id',
        'server_record.serverorderid',
        'command',
        'processes',
        'directory',
        'daemon_action',
    ];

    public $filterable = [
        'id',
        'server_record.serverorderid',
        'command',
        'processes',
        'directory',
        'daemon_action',
    ];

    protected $fillable = [
        'server_record_id',
        'panel_system_user_id',
        'command',
        'processes',
        'directory',
        'create_status',
        'daemon_action',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function serverRecord()
    {
        return $this->belongsTo(CloudServer::class);
    }

    public function panelSystemUser()
    {
        return $this->belongsTo(SystemUser::class);
    }

    public function getCreateStatusLabelAttribute($value)
    {
        return static::CREATE_STATUS_SELECT[$this->create_status] ?? null;
    }

    public function getDaemonActionLabelAttribute($value)
    {
        return static::DAEMON_ACTION_SELECT[$this->daemon_action] ?? null;
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
