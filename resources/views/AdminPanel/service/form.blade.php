@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Service</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Service</li>
                        <li class="breadcrumb-item active">@if (!empty($service))Edit @else Add @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_service') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            {{-- <h1>This is Your Service</h1> --}}
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($service))Edit @else Add @endif Service</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($service)){{ route('service_edited', $service->id) }}@else{{ route('service_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col">



                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="@if (!empty($service)){{ $service->title }}@else{{ old('title') }}@endif"
                                           required>
                                    <div class="text-danger">* @error('description') {{ $message }} @enderror</div>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="description">Post Description</label>
                                        <textarea id="description" name="description" class="ckeditor">
                                                    @if (!empty($service))
                                                {{ $service->description }}
                                            @else
                                                {{ old('description') }}
                                            @endif</textarea>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <label for="" class="form-label">Service Image</label>
                                    <p class="text-muted form-label">for best output upload [400 x 225] Image</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="service_image" id=""
                                        @if (empty($service)) @endif>
                                    </div>
                                    <div class="text-danger mt-0">* @error('image') {{ $message }} @enderror</div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                @if (!empty($service))
                                    <label for="" class="form-label">Old Image</label>
                                    <img class="form-control"  src="{{ asset('/public/images/uploads/services') .'/'. $service->service_image }}"
                                        alt="Error">
                                @endif
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($service)) btn-success @else btn-primary @endif" type="submit">@if (!empty($service)) Update @else Submit @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
