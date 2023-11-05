<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SocialMedia;
use Livewire\WithPagination;
class AdminSocialMediaSettingComponent extends Component
{
    use WithPagination;
    public $link;
    public $name;
    public $status;
    public function addMedia()
    {
        $media=new SocialMedia();
        $media->name=$this->name;
        $media->link=$this->link;
        $media->status=1;
        $media->save();
        session()->flash('message','Media has been added');
    }
    public function changeStatus($id,$status)
    {
        $media=SocialMedia::find($id);
        $media->status=$status;
        $media->save();
        session()->flash('message','status has been change successfully');
    }
    public function deleteMedia($id)
    {
        $media=SocialMedia::find($id);
        $media->delete();
        session()->flash('warning','Social Media Deleted Successfully');
    }
    public function render()
    {
        $medias=SocialMedia::paginate(5);
        return view('livewire.admin.admin-social-media-setting-component',['medias'=>$medias])->layout('layouts.base');
    }
}
