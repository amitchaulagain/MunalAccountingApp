@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Blogs</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Blogs</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_post') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            {{-- <h1>This is Your Service</h1> --}}
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Excerpt</th>
                        <th scope="col">Body</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <th scope="row"><img height="40rem" class="rounded" style="cursor: pointer"
                                                 data-fancybox="gallery"
                                                 data-src="{{ asset('/public/images/uploads/posts') .'/' . $item->post_image}}"
                                                 src="{{ asset('/public/images/uploads/posts') .'/'. $item->post_image }}"
                                                 alt="Error"></th>
                            <th scope="row">{{ $item->title }}</th>
                            <th scope="row">{{ $item->slug }}</th>
                            <th scope="row">{{ $item->excerpt }}</th>
                            <th scope="row">{{ $item->body }}</th>

                            <th scope="row">
                                <a class="btn btn-success btn-sm" href="{{ route('edit_post', $item->id) }}"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                @if (session()->get('AdminUser')['type'] == 'R')
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                       href="{{ route('del_post', $item->id) }}"><i class="fa fa-trash"
                                                                                       aria-hidden="true"></i></a>
                                @endif
                            </th>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
        });
    </script>
@endsection
