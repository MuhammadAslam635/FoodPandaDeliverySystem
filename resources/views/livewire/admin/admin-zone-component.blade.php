<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My/</span> Available Zone's</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">My All listed Zone's</h5>

                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>

                        @elseif(Session::has('warning'))
                        <div class="alert alert-danger text-light" role="alert">{{ Session::get('warning') }}</div>

                    @endif
                </div>
                <div class="card-body">

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Zone</th>
                                    <th>Status</th>
                                    <th>Store</th>
                                    <th>Delivery Man</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                @forelse($zones as $key=>$zone)
                                    <tr>
                                        <td>{{ $zone->id }}</td>
                                        <td>{{ $zone->name }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    @if ($zone->status == 1)
                                                        <p class="btn btn-success p-1">Active</p>
                                                    @else
                                                        <p class="btn tbn-danger p-1">InActive</p>
                                                    @endif
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"
                                                        wire:click.prevent="changeStatus({{ $zone->id }},1)"><i
                                                            class="bx bx-edit-alt me-1 "></i> Active</a>
                                                    <a class="dropdown-item" href="#"
                                                        wire:click.prevent="changeStatus({{ $zone->id }},0)"><i
                                                            class="bx bx-edit-alt me-1 "></i> InActive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
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
                                                        <button type="button" wire:click="deleteZone({{ $zone->id }})"  class="btn btn-danger close-modal bg-danger" data-dismiss="modal">Yes, Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @empty
                                    <tr>
                                        <img src="{{ asset('assets/images/no-records.png') }}" class="img-fluid" alt="">
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

