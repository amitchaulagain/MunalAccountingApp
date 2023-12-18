@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Gallary</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Gallary</li>
                        <li class="breadcrumb-item active">@if (!empty($gal))Edit @else Add @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_gallary') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            {{-- <h1>This is Your Gallary</h1> --}}
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($gal))Edit @else Add @endif Gallary</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($gal)){{ route('gallary_edited', $gal->id) }}@else{{ route('gallary_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col">


                                <div class="col-md-12">
                                    <label for="" class="form-label">Gallary Image</label>
                                    <p class="text-muted form-label">for best output upload [400 x 225] Image</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="gal_image" id=""
                                            @if (empty($gal))required @endif>
                                    </div>
                                    <div class="text-danger mt-0">* @error('image') {{ $message }} @enderror</div>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Gallary Description</label>
                                    <input type="text" class="form-control" name="description" value="@if (!empty($gal)){{ $gal->description }}@else{{ old('description') }}@endif"
                                           required>
                                    <div class="text-danger">* @error('description') {{ $message }} @enderror</div>
                                </div>



                            </div>
                            <div class="col-md-4">
                                @if (!empty($gal))
                                    <label for="" class="form-label">Old Image</label>
                                    <img class="form-control"  src="{{ asset('/images/uploads/home/sliders') .'/'. $gal->gal_image }}"
                                         alt="Error">
                                @endif
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($gal)) btn-success @else btn-primary @endif" type="submit">@if (!empty($gal)) Update @else Submit @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
