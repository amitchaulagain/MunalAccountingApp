@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Blog</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
                        <li class="breadcrumb-item active">@if (!empty($post))
                                Edit
                            @else
                                Add
                            @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_service') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            {{-- <h1>This is Your Blog</h1> --}}
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($post))
                                Edit
                            @else
                                Add
                            @endif Blog </h4>
                    </div>
                    <div class="card-body">

                        <form class="row g-3"
                              action="@if (!empty($post)){{ route('post_edited', $post->id) }}@else{{ route('post_added') }}@endif"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                       value="@if (!empty($post)){{ $post->featured }}@else{{ old('featured') }}@endif"
                                                       @if (!empty($post))
                                                           @if ($post->featured)
                                                               checked
                                                    @endif
                                                @endif>
                                                <label class="form-check-label" name="featured" for="exampleCheck1">Featured
                                                    Blog</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Post Title </label>
                                                <input type="text" class="form-control" name="title"
                                                       value="@if (!empty($post)){{ $post->title }}@else{{ old('title') }}@endif"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="excerpt">Post Excerpt</label>
                                                <input type="text" name="excerpt" class="form-control"
                                                       value="@if (!empty($post)){{ $post->excerpt }}@else{{ old('excerpt') }}@endif">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Post Description</label>
                                                <textarea id="description" name="body" class="ckeditor">
                                                    @if (!empty($post))
                                                        {{ $post->body }}
                                                    @else
                                                        {{ old('description') }}
                                                    @endif</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Post Image</label>
                                                <input type="file" class="form-control" name="service_image" id=""
                                                @if (empty($post)) @endif>
                                            </div>
                                            <div class="text-danger mt-0">
                                                * @error('image') {{ $message }} @enderror</div>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn @if (!empty($service)) btn-success @else btn-primary @endif"
                                            type="submit">@if (!empty($service))
                                            Update
                                        @else
                                            Submit
                                        @endif</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
