<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class ZoneScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if(Auth::user()->utype ==='ADM')
        {
            $class = get_class($model);
            switch ($class) {
                case 'App\Models\Item':
                    $builder->whereHas('store',function($query){
                        return $query->where('zone_id', Auth::user()->zone_id);
                    });
                    break;

                case 'App\Models\ItemCampaign':
                    $builder->whereHas('store',function($query){
                        return $query->where('zone_id', Auth::user()->zone_id);
                    });
                    break;

                case 'App\Models\Order':
                    $builder->whereHas('store',function($query){
                        return $query->where('zone_id', Auth::user()->zone_id);
                    });
                    break;

                case 'App\Models\Store':
                    $builder->where('zone_id', Auth::user()->zone_id);
                    break;

                case 'App\Models\AddOn':
                    $builder->whereHas('store',function($query){
                        return $query->where('zone_id', Auth::user()->zone_id);
                    });
                    break;

                case 'App\Models\WithdrawRequest':
                    $builder->whereHas('vendor.restaurants',function($query){
                        return $query->where('restaurants.zone_id', Auth::user()->zone_id);
                    });
                    break;

                case 'App\Models\DeliveryMan':
                    $builder->where('zone_id', Auth::user()->zone_id);
                    break;

                case 'App\Models\Banner':
                    $builder->where('zone_id', Auth::user()->zone_id);
                    break;

                case 'App\Models\Notification':
                    $builder->where('zone_id', Auth::user()->zone_id);
                    break;

                case 'App\Models\Zone':
                    $builder->where('id', Auth::user()->zone_id);
                    break;

                case 'App\Models\ProvideDMEarning':
                    $builder->whereHas('delivery_man', function($q){
                        $q->where('zone_id', Auth::user()->zone_id);
                    });
                    break;

                default:
                    $builder;
                    break;
            }
        }
        $builder;
    }
}
