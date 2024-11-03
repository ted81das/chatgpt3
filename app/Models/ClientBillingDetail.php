<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientBillingDetail extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'client_billing_details';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_email_id',
        'clientbillinguserid',
        'client_billing_email',
        'client_billing_source',
    ];

    public $orderable = [
        'id',
        'user_email.email',
        'user_email.name',
        'clientbillinguserid',
        'client_billing_email',
        'client_billing_source',
    ];

    public $filterable = [
        'id',
        'user_email.email',
        'user_email.name',
        'clientbillinguserid',
        'client_billing_email',
        'client_billing_source',
    ];

    public const CLIENT_BILLING_SOURCE_SELECT = [
        'pabbly1'      => 'Pabbly Subscription1',
        'woo'          => 'Woocommerce1',
        'studiocart'   => 'Studio Cart',
        'lemonsqueezy' => 'LemonSqueezy',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function userEmail()
    {
        return $this->belongsTo(User::class);
    }

    public function getClientBillingSourceLabelAttribute($value)
    {
        return static::CLIENT_BILLING_SOURCE_SELECT[$this->client_billing_source] ?? null;
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
