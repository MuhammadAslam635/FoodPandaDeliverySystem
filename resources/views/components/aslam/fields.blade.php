
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit/</span> {{$product->name}}</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Edit Product</h5>
                      <small class="text-muted float-end">Merged input group</small>
                      @if(Session::has('message'))
                      <div class="alert alert-success">{{Session::get('message')}}</div>
                      @endif
                    </div>
                    <div class="card-body">
                      <form method="post" id="product_form"
                      enctype="multipart/form-data" action="{{route('admin.update.product',['id'=>$product->id])}}">
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
                              name="name" value="{{  isset($product) ? $product->name : old('name') }}"
                            />
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="basic-icon-default-company">Category</label>
                          <div class="input-group input-group-merge">
                           <select name="category_id" id="category_id" class="form-control">
                            
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id', $product->category_id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                           </select>
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="basic-icon-default-company">SubCategory</label>
                          <div class="input-group input-group-merge">
                           <select name="scategory_id" id="scategory_id" class="form-control">
                            <option value="">Select SubCategory</option>
                            @foreach($scategories as $scategory)
                            <option value="{{$scategory->id}}" {{ $scategory->id == old('scategory_id', $product->scategory_id) ? 'selected' : '' }}>
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
                              value="{{  isset($product) ? $product->price : old('price') }}"
                              
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
                              value="{{  isset($product) ? $product->discount : old('discount') }}"
                              
                            />
                            
                          </div>
                          
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="form-label" for="basic-icon-default-email">Discount Type</label>
                          <div class="input-group input-group-merge">
                            
                            <select name="discount_type"class="form-control" id="discount_type">
                                <option value="">Select Discount Type</option>
                                <option value="percent" {{ 'percent' === old('discount_type', $product->discount_type) ? 'selected' : '' }}>
                                Percent
                            </option>
                                <option  value="fixed" {{ 'fixed' === old('discount_type', $product->discount_type) ? 'selected' : '' }}>Fixed</option>
                            </select>
                            
                          </div>
                          
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Description</label>
                          <div class="input-group input-group-merge">
                          
                            <textarea name="description" id="description" class="form-control" >{{$product->description}}</textarea>
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Item type</label>
                          <div class="input-group input-group-merge">
                          <select name="veg"class="form-control" id="veg">
                                <option value="">Select Item Type</option>
                                <option value="0" {{ 0 == old( 'veg', $product->veg) ? 'selected' : '' }}>Veg</option>
                                <option value="1" {{ 1 == old( 'veg', $product->veg) ? 'selected' : '' }}>Non Veg</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">AddOn</label>
                          <div class="input-group input-group-merge">
                          <select name="addons[]"class="form-control addons"  multiple="multiple">
                                <option value="">Select Item AddOn</option>
                                @php
                                $addons=DB::table('add_ons')->where('store_id',$product->store_id)->get();
                                $add_ons=explode(",",$product->addons);
                                @endphp
                                @forelse($addons as $addon)
                                
                                <option value="{{$addon->id}}">{{$addon->name}}</option>
                                @empty
                                @endforelse
                                
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Store</label>
                          <div class="input-group input-group-merge">
                          <input type="text" name="store_id" id="store_id" class="form-control" value="{{  isset($product) ? $product->store_id : old('store_id') }}">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Available time starts</label>
                          <div class="input-group input-group-merge">
                           <input type="text" name="available_time_starts" id="start_time" class="form-control" value="{{  isset($product) ? $product->available_time_starts : old('available_time_starts') }}">
                          </div>
                        </div>
                     
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Available time ends</label>
                          <div class="input-group input-group-merge">
                           <input type="text" name="available_time_ends" id="start_ends" class="form-control" value="{{  isset($product) ? $product->available_time_ends : old('available_time_ends') }}">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Tax</label>
                          <div class="input-group input-group-merge">
                           <input type="text" name="tax" id="start_ends" class="form-control" value="{{  isset($product) ? $product->tax : old('tax') }}">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Tax  Type</label>
                          <div class="input-group input-group-merge">
                           <input type="text" name="tax_type" id="start_ends" class="form-control" value="{{  isset($product) ? $product->tax_type : old('tax_type') }}">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Stock</label>
                          <div class="input-group input-group-merge">
                           <input type="text" name="stock" id="start_ends" class="form-control" value="{{  isset($product) ? $product->stock : old('stock') }}">
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Status</label>
                          <div class="input-group input-group-merge">
                          <select name="status"class="form-control" id="status">
                                <option value="">Select Status</option>
                                <option value="1" {{ 1 == old( 'status', $product->status) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ 0 == old( 'status', $product->status) ? 'selected' : '' }}>In-Active</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Unit</label>
                          <div class="input-group input-group-merge">
                          <select name="unit_id"class="form-control" id="unit_id">
                                <option value="">Select Status</option>
                                <option value="1" {{ 1 == old( 'unit_id', $product->unit_id) ? 'selected' : '' }}>KG</option>
                                <option value="2" {{ 2 == old( 'unit_id', $product->unit_id) ? 'selected' : '' }}>GM</option>
                                <option value="3" {{ 3 == old( 'unit_id', $product->unit_id) ? 'selected' : '' }}>LG</option>
                                <option value="4" {{ 4 == old( 'unit_id', $product->unit_id) ? 'selected' : '' }}>SM</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                            
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Image</label>
                        <input name="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                         @if($product->image)
                         <img src="{{asset('assets/product')}}/{{$product->image}}" alt="" class="w-36 h-36 rounded m-1">
                         @endif
                        </div>
                        <div class="mb-3">
                            
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload gallery</label>
                        <input name="images[]"class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="images" type="file" multiple/>
                      
                        </div>
                        @if($product->images)
                        @php
                        $images=explode(",",$product->images);
                        @endphp
                         <div class="row d-flex" >
                            <div class="col-md-2" style="display:flex;flex-direction:row;">
                            @foreach($images as $image)
                         @if($image)
                         <img src="{{asset('assets/product')}}/{{$image}}" alt="" class="w-36 h-36 rounded m-1" >
                         @endif
                         @endforeach
                            </div>
                         </div>
                         @endif
                    
                        </div>
                        <button type="submit" class="btn btn-primary bg-danger float-right">Update Item</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@push('scripts')
<script>
  tinymce.init({
    selector: '#description'
  });
  $(document).ready(function() {
    $('.addons').select2();
});
  </script>
@endpush