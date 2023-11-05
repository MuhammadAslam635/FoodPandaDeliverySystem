<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Item /</span> Basic Tables</h4>
    @if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="card-title">All Items</h3>
                </div>
                <div class="col-md-3">
                    <x-aslam.sortby name="sortBy" />
                </div>
                <div class="col-md-3">
                    <x-aslam.perpage name="perPage" />
                </div>
                <div class="col-md-3">
                    <x-aslam.search-box name="search" />
                </div>
            </div>

        </div>
        <div class="table-responsive text-nowrap " style="margin-bottom:20px;">
            <table class="table" style="margin-bottom:20px;">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Store</th>
                        <th>price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($products as $product)
                        <tr class="table-default">
                            <td>
                                <div class="table-avatar">
                                    <h4 class="avatar">
                                        <img src="{{ asset('assets/product') }}/{{ $product->image }}"
                                            alt="{{ $product->name }}" class="rounded-full img-round">
                                    </h4>
                                    <span class="text-danger font-bold"><strong>{{ $product->name }}</strong> <br>
                                        <p>Category:&nbsp;{{ $product->category->name }}</p>
                                    </span>
                                    <p>Stock: <span class="text-danger font-bold">{{ $product->stock }}</span></p>
                                    <p class="text-info font-bold"></p>

                                </div>

                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td><span class="badge bg-label-success me-1 text-dark">
                                    @if ($product->status == 1)
                                        Active
                                    @else
                                        In-Active
                                    @endif
                                </span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.editproduct', ['id' => $product->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>

            </table>
            <div class="float-right m-2 p-2">
                {{ $products->links() }}
            </div>
            <br>
        </div>
    </div>

</div>
