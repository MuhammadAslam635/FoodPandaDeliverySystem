<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Store;
use App\Models\AddOn;
use App\Models\StoreSchedule;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $category_id;
    public $scategory_id;
    public $add_ons;
    public $price;
    public $tax;
    public $tax_type;
    public $discount;
    public $discount_type;
    public $available_time_starts;
    public $available_time_ends;
    public $veg;
    public $status;
    public $store_id;
    public $stock;
    public $unit_id;
    public $images;
    public $newimage;
    public $newimages;
    public $addons;
    public function addProduct()
    {
        $item=new Item();
        $item->name=$this->name;
        $item->description=$this->description;
        if($this->image)
        {
            $imagename=Carbon::now()->timestamp.'f'.'.'.$this->image->extension();
            $this->image->storeAs('assets/product',$imagename);
            $item->image=$imagename;
        }
        $item->category_id=$this->category_id;
        $item->scategory_id=$this->scategory_id;
        if($this->addons)
        {
            $item->add_ons = implode(',', $this->addons);
        }
        $item->price=$this->price;
        $item->tax=$this->tax;
        $item->tax_type=$this->tax_type;
        $item->discount=$this->discount;
        $item->discount_type=$this->discount_type;

            $time=StoreSchedule::where('store_id',$this->store_id)->first();
            if($time)
            {
                $item->available_time_starts=$time->opening_time;
            $item->available_time_ends=$time->closing_time;
            }


        $item->veg=$this->veg;
        $item->status=$this->status;
        $item->store_id=$this->store_id;

        $item->stock=$this->stock;
        $item->unit_id=$this->unit_id;
        if($this->images)
        {

            $imagesname='';
            foreach($this->images as $key=>$image)
            {
                $imgName =Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('assets/product',$imgName);
                $imagesname =$imagesname.','.$imgName;

            }
            $item->images=$imagesname;
        }
        $item->save();
        session()->flash('message', 'Item has been created successfully');
    }
    // public function search(Request $request){
    //     $key = explode(' ', $request['search']);
    //     $zones=Zone::withCount(['stores','deliverymen'])->where(function ($q) use ($key) {
    //         foreach ($key as $value) {
    //             $q->orWhere('name', 'like', "%{$value}%");
    //         }
    //     })->limit(50)->get();
    //     return response()->json([
    //         'view'=>view('admin-views.zone.partials._table',compact('zones'))->render(),
    //         'total'=>$zones->count()
    //     ]);
    // }

    public function render()
    {
        $categories=Category::where('parent_id',0)->get();
        $scategories=Category::where('parent_id',1)->get();
        $stores=Store::all();
        $adds=AddOn::orderBy('store_id','asc')->get();
        //dd($addons);
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories,
        'stores'=>$stores,
        'adds'=>$adds])->layout('layouts.base');
    }
}
