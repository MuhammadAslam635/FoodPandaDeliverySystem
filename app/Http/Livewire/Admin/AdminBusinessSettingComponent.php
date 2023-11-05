<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\BusinessSetting;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminBusinessSettingComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $currency;
    public $currency_symbol;
    public $country;
    public $language;
    public $time_zone;
    public $time_format;
    public $order_schedule;
    public $order_confirmation;
    public $dm_status;
    public $store_cancel_order;
    public $deliveryman_cancel_order;
    public $earning_status_deliverman_app;
    public $admin_order_notification;
    public $customer_verfication;
    public $order_delivery_cerification;
    public $veg;
    public $store_registration;
    public $deliveryman_registration;
    public $order_slot_duration;
    public $digit_after_decimal_point;
    public $admin_commission;
    public $free_delivery_over;
    public $minimum_delivery_charges;
    public $per_km_charges;
    public $maximam_orders_deliveryman;
    public $phone;
    public $email;
    public $address;
    public $latitude;
    public $longitude;
    public $footer;
    public $logo;
    public $icon;
    public $newlogo;
    public $newicon;

    public function mount()
    {
        $setting=BusinessSetting::find(1);
        if(!$setting)
        {
            $business=new BusinessSetting();
            $business->save();
        }elseif($setting)
        {
        $this->name=$setting->name;
        $this->currency=$setting->currency;
        $this->currency_symbol=$setting->currency_symbol;
        $this->country=$setting->country;
        $this->language=$setting->language;
        $this->time_zone=$setting->time_zone;
        $this->time_format=$setting->time_format;
        $this->order_schedule=$setting->order_schedule;
        $this->order_confirmation=$setting->order_confirmation;
        $this->dm_status=$setting->dm_status;
        $this->store_cancel_order=$setting->store_cancel_order;
        $this->deliveryman_cancel_order=$setting->deliveryman_cancel_order;
        $this->earning_status_deliverman_app=$setting->earning_status_deliverman_app;
        $this->admin_order_notification=$setting->admin_order_notification;
        $this->customer_verfication=$setting->customer_verfication;
        $this->order_delivery_cerification=$setting->order_delivery_cerification;
        $this->veg=$setting->veg;
        $this->store_registration=$setting->store_registration;
        $this->deliveryman_registration=$setting->deliveryman_registration;
        $this->order_slot_duration=$setting->order_slot_duration;
        $this->digit_after_decimal_point=$setting->digit_after_decimal_point;
        $this->admin_commission=$setting->admin_commission;
        $this->free_delivery_over=$setting->free_delivery_over;
        $this->minimum_delivery_charges=$setting->minimum_delivery_charges;
        $this->per_km_charges=$setting->per_km_charges;
        $this->maximam_orders_deliveryman=$setting->maximam_orders_deliveryman;
        $this->phone=$setting->phone;
        $this->email=$setting->email;
        $this->address=$setting->address;
        $this->latitude=$setting->latitude;
        $this->longitude=$setting->longitude;
        $this->footer=$setting->footer;
        $this->logo=$setting->logo;
        $this->icon=$setting->icon;
        }else
        {

        }

    }
    public function updateBusinessSetting()
    {
        $setting=BusinessSetting::find(1);
        //dd($setting);
        $setting->name=$this->name;
        $setting->currency=$this->currency;
        $setting->currency_symbol=$this->currency_symbol;
        $setting->country=$this->country;
        $setting->language=$this->language;
        $setting->time_zone=$this->time_zone;
        $setting->time_format=$this->time_format;
        $setting->order_schedule=$this->order_schedule;
        $setting->order_confirmation=$this->order_confirmation;
        $setting->dm_status=$this->dm_status;
        $setting->store_cancel_order=$this->store_cancel_order;
        $setting->deliveryman_cancel_order=$this->deliveryman_cancel_order;
        $setting->earning_status_deliverman_app=$this->earning_status_deliverman_app;
        $setting->admin_order_notification=$this->admin_order_notification;
        $setting->customer_verfication=$this->customer_verfication;
        $setting->order_delivery_cerification=$this->order_delivery_cerification;
        $setting->veg=$this->veg;
        $setting->store_registration=$this->store_registration;
        $setting->deliveryman_registration=$this->deliveryman_registration;
        $setting->order_slot_duration=$this->order_slot_duration;
        $setting->digit_after_decimal_point=$this->digit_after_decimal_point;
        $setting->admin_commission=$this->admin_commission;
        $setting->free_delivery_over=$this->free_delivery_over;
        $setting->minimum_delivery_charges=$this->minimum_delivery_charges;
        $setting->per_km_charges=$this->per_km_charges;
        $setting->maximam_orders_deliveryman=$this->maximam_orders_deliveryman;
        $setting->phone=$this->phone;
        $setting->email=$this->email;
        $setting->address=$this->address;
        $setting->latitude=$this->latitude;
        $setting->longitude=$this->longitude;
        $setting->footer=$this->footer;
        if($this->newlogo)
        {
            if($this->logo)
            {
                unlink('assets/business',$this->logo);
            }
            $imagename=Carbon::now()->timestamp.'.'.$this->newlogo->extension();
            $this->newlogo->storeAs('assets/business',$imagename);
            $setting->logo=$imagename;
        }
        if($this->newicon)
        {
            if($this->icon)
            {
                unlink('assets/business',$this->icon);
            }
            $imagename=Carbon::now()->timestamp.'.'.$this->newicon->extension();
            $this->newicon->storeAs('assets/business',$imagename);
            $setting->icon=$imagename;
        }
        $setting->save();
        session()->flash('message','Business setting has been Updated Successfully');

    }
    public function render()
    {
        $setting=BusinessSetting::find(1);
        if(!$setting)
        {
            $business=new BusinessSetting();
            $business->save();
        }
        return view('livewire.admin.admin-business-setting-component')->layout('layouts.base');
    }
}
