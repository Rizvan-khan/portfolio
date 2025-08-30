@extends('admin.layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="mt-1 text-center">Add Personal Detail</h5>
                    </div>
                    {{-- ✅ Validation Errors --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.product.add-product') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>
                        </div>

                        <!-- Product Price -->
                        <div class="mb-3">
                            <label class="form-label">Some Paragraph</label>
                            <textarea class="form-control" name="paragraph" rows="3" placeholder="Enter Paragraph" required></textarea>
                        </div>


                        <!-- Product Price -->
                        <div class="mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" required>
                        </div>

                        <!-- Product Price -->
                        <div class="mb-3">
                            <label class="form-label">Degree</label>
                            <input type="text" class="form-control" name="degree" placeholder="Enter Degree" required>
                        </div>

                          <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter Age" required>
                        </div>

                        <!-- Product Description -->
                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <textarea class="form-control" name="mobile" rows="3" placeholder="Enter Mobile Number"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email </label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>


                        <!-- single product image -->

                        <div class="mb-3">
                            <label class="form-label">Profile Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>


                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.getElementById('add-color').addEventListener('click', function() {
        const container = document.getElementById('color-container');
        const html = `
        <div class="d-flex gap-2 mb-2">
            <input type="color" name="colors[][code]" class="form-control form-control-color" value="#000000">
            <input type="text" name="colors[][name]" class="form-control" placeholder="Color Name">
            <button type="button" class="btn btn-danger btn-sm remove-color">X</button>
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('remove-color')) {
            e.target.parentElement.remove();
        }
    });
</script>
@endsection