<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FirewallRule extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'firewall_rules';

    public const TYPE_SELECT = [
        'tcp' => 'TCP',
        'udp' => 'UDP',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const RULE_TYPE_SELECT = [
        'allow' => 'Allow',
        'deny'  => 'Deny',
    ];

    public $orderable = [
        'id',
        'port',
        'rule_type',
        'from_ip_address',
        'server_record.serverorderid',
    ];

    public $filterable = [
        'id',
        'port',
        'rule_type',
        'from_ip_address',
        'server_record.serverorderid',
    ];

    protected $fillable = [
        'name',
        'port',
        'type',
        'rule_type',
        'from_ip_address',
        'server_record_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    public function getRuleTypeLabelAttribute($value)
    {
        return static::RULE_TYPE_SELECT[$this->rule_type] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function authorid()
    {
        return $this->belongsTo(User::class);
    }

    public function serverRecord()
    {
        return $this->belongsTo(CloudServer::class);
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
