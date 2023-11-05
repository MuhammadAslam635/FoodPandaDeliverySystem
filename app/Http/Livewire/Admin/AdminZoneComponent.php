<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Zone;
use Livewire\WithPagination;

class AdminZoneComponent extends Component
{
    use WithPagination;
    public function changeStatus($id,$status)
    {
        //dd($id,$status);
        $zone=Zone::find($id);
        // if($zone->status == 1)
        // {
        //     $zone->status=0;
        // }
        // else
        // {
        //     $zone->status=1;
        // }
        $zone->status=$status;
        $zone->save();
        session()->flash('message', 'Zone status has been updated');
    }
    public function deleteZone($id)
    {
        $zone=Zone::find($id);
        $zone->delete();
        session()->flash('warning', 'Zone has been deleted');
    }
    public function render()
    {
        $zones=Zone::paginate(12);
        return view('livewire.admin.admin-zone-component',['zones'=>$zones])->layout('layouts.base');
    }
}
