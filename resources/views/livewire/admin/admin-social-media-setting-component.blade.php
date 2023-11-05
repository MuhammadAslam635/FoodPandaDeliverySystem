<div class="container-xxl flex-grow-1 container-p-y" wire:ignore.self>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add/</span> Social Media Settings</h4>
    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @elseif(Session::has('warning'))
    <div class="alert alert-danger text-light" role="alert">{{Session::get('warning')}}</div>
    @endif
    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">My Social Media Setting</h5>


          </div>
          <div class="card-body">
            <form
                  enctype="multipart/form-data" wire:submit.prevent="addMedia">
                  @csrf


              <div class="row">
              <div class="col-md-12 mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Social Media</label>
                <div class="input-group input-group-merge">

                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Social Media"
                    aria-label="Social Media"
                    aria-describedby="basic-icon-default-fullname2"
                    name="name" wire:model="name"
                  />
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label class="form-label" for="basic-icon-default-company">Link</label>
                <div class="input-group input-group-merge">
                 <input type="text" name="link" id="link" placeholder="link" class="form-control" wire:model="link">
                </div>
              </div>
              </div>
              <button type="submit" class="btn btn-primary bg-success">Add social Media Links</button>
            </form>

            <div class="row mt-2">

              <div class="col-md-12">
              <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Social Media</th>
              <th>Link</th>
              <th>Status</th>
              <th>Created</th>
              <th>Update Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse($medias as $media)
            <tr class="table-default">
              <td>
                  <div class="table-avatar">
                  <span class="text-danger font-bold"><strong>{{$media->name}}</strong></span>
                  </div>
              </td>
              <td>{{$media->link}}</td>
              <td>
                @if($media->status == 1)
                <div class="badge alert-success">Active</div>
                @else
                <div class="badge alert-danger">In-Active</div>
                @endif
              </td>
                <td>{{$media->created_at}}</td>
                <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    Status Change
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"
                       wire:click.prevent="changeStatus({{$media->id}},1)"> Active</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                    wire:click.prevent="changeStatus({{$media->id}},0)"> InActive</a
                    >
                  </div>
                </div>
              </td>
              <td>
                <button type="button"   class="btn btn-danger bg-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
              </td>
              <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn bg-info" data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="deleteMedia({{$media->id}})" class="btn btn-danger close-modal bg-danger" data-dismiss="modal">Yes, Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            </tr>
            @empty
            <tr>
              <img src="{{asset('assets/images/no-records.png')}}" class="img-fluid" alt="">
            </tr>
            @endforelse

          </tbody>
          {{ $medias->links() }}
        </table>

        <br>
      </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
