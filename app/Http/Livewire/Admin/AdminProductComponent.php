<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $sortBy='desc';
    public $perPage=12;
    public $search;
    public function render()
    {
        $products=Item::search($this->search)->orderBy('id',$this->sortBy)->paginate($this->perPage);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
