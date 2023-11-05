<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\zone;

class AdminEditZoneComponent extends Component
{
    public $name;
    public $coordinates;
    public $zone_id;
    public $zone;

    public function mount($id)
    {
        if(env('APP_MODE')=='demo' && $id == 1)
        {
            Toastr::warning(translate('messages.you_can_not_edit_this_zone_please_add_a_new_zone_to_edit'));
            return back();
        }
        $this->zone=Zone::selectRaw("*,ST_AsText(ST_Centroid(`coordinates`)) as center")->findOrFail($id);
        // $zone=Zone::find($id);
        // $this->name=$zone->name;
        // $this->coordinates=$zone->coordinates;
    }
    public function get_all_zone_cordinates($id = 0)
    {
        $zones = Zone::where('id', '<>', $id)->active()->get();
        $data = [];
        foreach($zones as $zone)
        {
            $data[] = Helpers::format_coordiantes($zone->coordinates[0]);
        }
        return response()->json($data,200);
    }
    public function render()
    {

        return view('livewire.admin.admin-edit-zone-component')->layout('layouts.base');
    }
}
