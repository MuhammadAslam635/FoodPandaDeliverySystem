<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Category;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
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

    public function  mount($id)
    {
        $this->product_id=$id;
        $item=Item::find($id);
        $this->name=$item->name;
        $this->description=$item->description;
        $this->image=$item->image;
        $this->category_id=$item->category_id;
        $this->scategory_id=$item->scategory_id;
        $this->add_ons=$item->add_ons;
        $this->price=$item->price;
        $this->tax=$item->tax;
        $this->tax_type=$item->tax_type;
        $this->discount=$item->discount;
        $this->discount_type=$item->discount_type;
        $this->available_time_starts=$item->available_time_starts;
        $this->available_time_ends=$item->available_time_ends;
        $this->veg=$item->veg;
        $this->status=$item->status;
        $this->store_id=$item->store_id;
        $this->stock=$item->stock;
        $this->unit_id=$item->unit_id;
        $this->images=$item->images;


    }
    public function updateProduct()
    {
        $item=Item::find($this->product_id);
        $item->name=$this->name;
        $item->description=$this->description;
        if($this->newimage)
        {

            $imagename=Carbon::now()->timestamp.'f'.'.'.$this->newimage->extension();
            $this->newimage->storeAs('assets/product',$imagename);
            unlink('assets/product'.'/'.$item->image);
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
        $item->available_time_starts=$this->available_time_starts;
        $item->available_time_ends=$this->available_time_ends;
        $item->veg=$this->veg;
        $item->status=$this->status;
        $item->store_id=$this->store_id;
        $item->stock=$this->stock;
        $item->unit_id=$this->unit_id;
        if($this->newimages)
        {
            if($item->images)
           {
                $images=explode(",",$item->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('assets/product'.'/'.$image);
                    }

                }

           }
            $imagesname='';
            foreach($this->newimages as $key=>$image)
            {
                $imgName =Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('assets/product',$imgName);
                $imagesname =$imagesname.','.$imgName;

            }
            $item->images=$imagesname;
        }
        $item->save();
        return redirect()->route('admin.products')->with('message','product edit successfully');
        // session()->flash('message','Item Has been updated');
    }
    public function render()
    {
       $product=Item::find($this->product_id);
       $categories=Category::where('parent_id',0)->get();
       $scategories=Category::where('parent_id',1)->get();
        return view('livewire.admin.admin-edit-product-component',['product'=>$product,'categories'=>$categories,'scategories'=>$scategories])->layout('layouts.base');
    }
}
