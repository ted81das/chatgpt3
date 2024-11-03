<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CloudServer extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'cloud_servers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const WEBSERVER_TYPE_SELECT = [
        'nginx' => 'Docker with NGINX',
    ];

    public const INSTALL_MONITORING_SELECT = [
        'true'  => 'Install',
        'false' => 'Do not install',
    ];

    public const OS_TYPE_SELECT = [
        'ubuntu-20-04-lts' => 'Ubuntu 20',
        'ubuntu-22-04-lts' => 'Ubuntu 22',
    ];

    public $orderable = [
        'id',
        'name',
        'type',
        'webserver_type',
        'os_type',
        'php_version',
        'install_monitoring',
    ];

    public $filterable = [
        'id',
        'name',
        'type',
        'webserver_type',
        'os_type',
        'php_version',
        'install_monitoring',
    ];

    public const PHP_VERSION_SELECT = [
        '7.4'  => '7.4',
        '8.0'  => '8.0',
        '8.1'  => '8.1',
        '8.2'  => '8.2',
        'none' => 'No PHP',
    ];

    public const CLOUD_TYPE_SELECT = [
        'hetzner'   => 'H-Cloud',
        'linode'    => 'L-Cloud',
        'vultr'     => 'V-Cloud',
        'upcloud'   => 'U-Cloud',
        'lightsail' => 'A-Cloud',
    ];

    public const DATABASE_TYPE_SELECT = [
        'none'         => 'No Database',
        'mysql'        => 'Mysql',
        'mariadb'      => 'Mariadb',
        'postgresql'   => 'Postgresql',
        'postgresql13' => 'Postgresql13',
    ];

    public const TYPE_SELECT = [
        'server'          => 'Web and Docker server',
        'database-server' => 'Database server',
        'redis-server'    => 'Redis server',
        'load-balancer'   => 'Load balancer',
    ];

    protected $fillable = [
        'serverorderid',
        'clientbillingorderid',
        'serverserverid',
        'name',
        'credential',
        'plan',
        'region',
        'cloud_type',
        'type',
        'database_type',
        'webserver_type',
        'os_type',
        'php_version',
        'description',
        'install_monitoring',
        'webhook_url',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function clientpaneluserid()
    {
        return $this->belongsTo(User::class);
    }

    public function authorid()
    {
        return $this->belongsTo(User::class);
    }

    public function getCloudTypeLabelAttribute($value)
    {
        return static::CLOUD_TYPE_SELECT[$this->cloud_type] ?? null;
    }

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    public function getDatabaseTypeLabelAttribute($value)
    {
        return static::DATABASE_TYPE_SELECT[$this->database_type] ?? null;
    }

    public function getWebserverTypeLabelAttribute($value)
    {
        return static::WEBSERVER_TYPE_SELECT[$this->webserver_type] ?? null;
    }

    public function getOsTypeLabelAttribute($value)
    {
        return static::OS_TYPE_SELECT[$this->os_type] ?? null;
    }

    public function getPhpVersionLabelAttribute($value)
    {
        return static::PHP_VERSION_SELECT[$this->php_version] ?? null;
    }

    public function getInstallMonitoringLabelAttribute($value)
    {
        return static::INSTALL_MONITORING_SELECT[$this->install_monitoring] ?? null;
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
