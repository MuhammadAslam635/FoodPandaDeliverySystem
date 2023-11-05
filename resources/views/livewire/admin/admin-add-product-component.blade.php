<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add/</span> Product</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add New Product</h5>
            <small class="text-muted float-end">Merged input group</small>
            @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
          </div>
          <div class="card-body">
            <form  id="product_form"
            enctype="multipart/form-data" wire:submit.prevent="addProduct">
            @csrf

              <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Name</label>
                <div class="input-group input-group-merge">

                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Item Name"
                    aria-label="Item Name"
                    aria-describedby="basic-icon-default-fullname2"
                    name="name" required wire:model="name"
                  />
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-company">Category</label>
                <div class="input-group input-group-merge">
                 <select name="category_id" id="category_id" class="form-control" wire:model="category_id">
                  <option value="0">Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}" >
                      {{ $category->name }}
                  </option>
                  @endforeach
                 </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-company">SubCategory</label>
                <div class="input-group input-group-merge">
                 <select name="scategory_id" id="scategory_id" class="form-control" wire:model="scategory_id">
                  <option value="">Select SubCategory</option>
                  @foreach($scategories as $scategory)
                  <option value="{{$scategory->id}}">
                      {{ $scategory->name }}
                  </option>
                  @endforeach
                 </select>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="basic-icon-default-email">Price</label>
                <div class="input-group input-group-merge">

                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="0.00"
                    name="price"
                   required
                   wire:model="price"

                  />

                </div>

              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="basic-icon-default-email">Discount</label>
                <div class="input-group input-group-merge">

                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="0.00"
                    name="discount"
                    wire:model="discount"


                  />

                </div>

              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="basic-icon-default-email">Discount Type</label>
                <div class="input-group input-group-merge">

                  <select name="discount_type"class="form-control" id="discount_type" wire:model="discount_type">
                      <option value="">Select Discount Type</option>
                      <option value="percent" >
                      Percent
                  </option>
                      <option  value="fixed">Fixed</option>
                  </select>

                </div>

              </div>
              <div class="col-md-12 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Description</label>
                <div class="input-group input-group-merge" wire:ignore>
                  <textarea name="description" id="description" class="form-control" wire:model="description"></textarea>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Item type</label>
                <div class="input-group input-group-merge">
                <select name="veg"class="form-control" id="veg" wire:model="veg">
                      <option value="">Select Item Type</option>
                      <option value="0">Veg</option>
                      <option value="1">Non Veg</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label" for="basic-icon-default-phone">AddOn</label>
                <div class="input-group input-group-merge" wire:ignore>
                <select name="addons"class="form-control addons"  multiple="multiple" wire:model="addons">
                      <option value="">Select Item AddOn</option>
                      @forelse($adds as $key=>$add)
                      <option value="{{$add->id}}">{{$add->name}}&nbsp;{{$add->store->name}}</option>
                      @empty

                      @endforelse
                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Store</label>
                <div class="input-group input-group-merge">
                <select name="store_id"class="form-control" wire:model="store_id">
                      <option value="">Select Store</option>
                      @foreach($stores as $store)
                      <option value="{{$store->id}}">{{$store->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Tax</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="tax" id="start_ends" class="form-control" wire:model="tax">
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Tax  Type</label>
                <div class="input-group input-group-merge">
                <select name="tax_type"class="form-control" id="tax_type" wire:model="tax_type">
                      <option value="">Select Tax Type</option>
                      <option value="percent" >Percent</option>
                      <option  value="fixed">Fixed</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Stock</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="stock" id="start_ends" class="form-control" wire:model="stock">
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Status</label>
                <div class="input-group input-group-merge">
                <select name="status"class="form-control" id="status" wire:model="status">
                      <option value="">Select Status</option>
                      <option value="1" >Active</option>
                      <option value="0" >In-Active</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="form-label" for="basic-icon-default-phone">Unit</label>
                <div class="input-group input-group-merge">
                <select name="unit_id"class="form-control" id="unit_id" wire:model="unit_id">
                      <option value="">Select Status</option>
                      <option value="1" >KG</option>
                      <option value="2" >GM</option>
                      <option value="3" >LG</option>
                      <option value="4" >SM</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">

              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Image</label>
              <input name="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" wire:model="image">

              </div>
              <div class="mb-3">

              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload gallery</label>
              <input name="images[]"class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="images" type="file" multiple wire:model="images"/>
              </div>
              </div>
              <button type="submit" class="btn btn-primary bg-danger float-right">Add Item</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@push('scripts')
<script>
$(function(){

tinymce.init({
    selector:'#description',
    setup:function(editor){
        editor.on('Change',function(e){
            tinyMCE.triggerSave();
             var d_data=$('#description').val();
             @this.set('description',d_data);
        });
    }
});
});
$(document).ready(function(){
        $('.addons').select2();
        $('.addons').on('change',function(e){
            var data=$('.addons').select2("val");
            @this.set('addons',data);
        });
    });
</script>
@endpush
