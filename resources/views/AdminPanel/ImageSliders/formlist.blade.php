@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Image Sliders</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Image Sliders</li>
                        <li class="breadcrumb-item active">Edit</li>
                        {{-- <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_properties') }}">Add</a>
                        </div> --}}
                    </ol>
                </div>
            </div>
            <div id="alert"
                 class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">Edit Image Sliders</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('save_image_sliders') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Slider Image 1</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="sliderimage">
                                    </div>
                                    <div class="text-danger mt-0">
                                        @error('sliderimage')
                                        * {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                @if (!empty($imageSlider['sliderimage']))
                                    <div class="mb-2">
                                        <label for="" class="form-label">Slider 1</label>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <button id="hero" data-name="Logo Image" data-key="sliderimage"
                                                    class="mb-2 btn btn-danger btn-sm ajaxDelete"><i
                                                    class="fa fa-remove"
                                                    aria-hidden="true"></i> Remove
                                            </button>
                                        @endif
                                        <img class="form-control" style="cursor: pointer" data-fancybox="gallery"
                                             data-src="{{ asset('/storage/sliders/' . $imageSlider['sliderimage']) }}"
                                             src="{{ asset('/storage/sliders/' . $imageSlider['sliderimage']) }}"
                                             alt="Error">
                                    </div>
                                @endif
                            </div>
                            @if (session()->get('AdminUser')['type'] == 'R')
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
            $("#hero").on('click',  function (e) {
                alert("hello");
                e.preventDefault();
                var _this = $(this);
                var name = $(this).attr('data-name');
                var key = $(this).attr('data-key');
                var csrf = "{{ csrf_token() }}";

                    data = {
                        key: key,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('ajaxSliderDelete') }}",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            alert("hero")

                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                // $(_this).parent('div').attr('hidden', 'true');
                                $(_this).parent('div').html('');
                                $('#alert').addClass('alert alert-danger')
                                    .removeClass('m-0 border-0 p-0').html('Image Deleted...');
                                $('.alert').fadeOut(3000);
                            }
                        },

                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                            location.reload();
                        }
                    });

                // console.log(key, name);
            });
        });
    </script>

@endsection
