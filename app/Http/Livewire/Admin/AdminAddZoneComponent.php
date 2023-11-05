<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Zone;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
class AdminAddZoneComponent extends Component
{
    public $name;
    public $coordinates;
    public function addzone()
    {
     $zone=Zone::find(1);
    if($zone)
    {
        if($zone->name != $this->name)
        {



        $this->validate([
            'name' => 'required|unique:zones|max:191',
            'coordinates' => 'required',
        ]);
          //dd($this->name,$this->coordinates);
        $value = $this->coordinates;
        foreach(explode('),(',trim($value,'()')) as $index=>$single_array){
            if($index == 0)
            {
                $lastcord = explode(',',$single_array);
            }
            $coords = explode(',',$single_array);
            $polygon[] = new Point($coords[0], $coords[1]);
        }
        $zone_id=Zone::all()->count() + 1;
        $polygon[] = new Point($lastcord[0], $lastcord[1]);
        $zone = new Zone();
        $zone->name = $this->name;
        $zone->coordinates = new Polygon([new LineString($polygon)]);
        // $zone->store_wise_topic =  'zone_'.$zone_id.'_store';
        // $zone->customer_wise_topic = 'zone_'.$zone_id.'_customer';
        // $zone->deliveryman_wise_topic = 'zone_'.$zone_id.'_delivery_man';
        $zone->save();
        return redirect()->route('addmin.addzone')->with('message','Zone has been added successfully');
        }else
        return redirect()->route('addmin.addzone')->with('warning','Zone Already Exit. Please Add new zone. Zone should be unique.');
        session()->flash('message','Zone Already exit');
    }
    else
    {
        $this->validate([
            'name' => 'required|unique:zones|max:191',
            'coordinates' => 'required',
        ]);
          //dd($this->name,$this->coordinates);
        $value = $this->coordinates;
        foreach(explode('),(',trim($value,'()')) as $index=>$single_array){
            if($index == 0)
            {
                $lastcord = explode(',',$single_array);
            }
            $coords = explode(',',$single_array);
            $polygon[] = new Point($coords[0], $coords[1]);
        }
        $zone_id=Zone::all()->count() + 1;
        $polygon[] = new Point($lastcord[0], $lastcord[1]);
        $zone = new Zone();
        $zone->id=1;
        $zone->name = $this->name;
        $zone->coordinates = new Polygon([new LineString($polygon)]);
        // $zone->store_wise_topic =  'zone_'.$zone_id.'_store';
        // $zone->customer_wise_topic = 'zone_'.$zone_id.'_customer';
        // $zone->deliveryman_wise_topic = 'zone_'.$zone_id.'_delivery_man';
        $zone->save();
        session()->flash('message','Zone has been added successfully');
    }
    }


    public function render()
    {

        return view('livewire.admin.admin-add-zone-component')->layout('layouts.base');
    }
}
