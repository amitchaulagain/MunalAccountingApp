@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>CMS</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">CMS</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div id="alert"
                 class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <form action="{{ route('save_cms') }}" method="POST" enctype="multipart/form-data">
                        <nav class="card-header fs-5">
                            {{-- <h4 class="">Edit Site Settings</h4> --}}
                            <div class="d-flex">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Home
                                    </button>
                                   {{-- <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-about" type="button" role="tab"
                                            aria-controls="nav-about"
                                            aria-selected="false">About
                                    </button>
                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq"
                                            aria-selected="false">FAQ
                                    </button>
                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-services" type="button" role="tab"
                                            aria-controls="nav-faq"
                                            aria-selected="false">Services
                                    </button>
                                    <button class="nav-link" id="nav-ssss-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab"
                                            aria-controls="nav-terms"
                                            aria-selected="false">Terms
                                    </button>--}}
                                    <button class="nav-link" id="nav-individual-tax-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-individual-tax" type="button" role="tab"
                                            aria-controls="nav-individual-tax"
                                            aria-selected="false">Individual Tax
                                    </button>
                                    <button class="nav-link" id="nav-lodge-in-person-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-lodge-in-person" type="button" role="tab"
                                            aria-controls="nav-lodge-in-person"
                                            aria-selected="false">Shares & Cryptocurrency
                                    </button>
                                    <button class="nav-link" id="nav-online-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-online" type="button" role="tab"
                                            aria-controls="nav-online"
                                            aria-selected="false">Property Investors
                                    </button>
                                    <button class="nav-link" id="nav-tax-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-tax-review" type="button" role="tab"
                                            aria-controls="nav-tax-review"
                                            aria-selected="false">Tax Review
                                    </button>

                                    <button class="nav-link" id="nav-business-services-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-business-services" type="button" role="tab"
                                            aria-controls="nav-business-services"
                                            aria-selected="false">Business Services
                                    </button>

                                    <button class="nav-link" id="nav-small-business-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-small-business" type="button" role="tab"
                                            aria-controls="nav-small-business"
                                            aria-selected="false"> Sole Trader & Uber
                                    </button>
                                    <button class="nav-link" id="company-accounting-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-company-accounting" type="button" role="tab"
                                            aria-controls="nav-company-accounting"
                                            aria-selected="false"> Company & Trust
                                    </button>
                                    <button class="nav-link" id="bas-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-bas" type="button" role="tab"
                                            aria-controls="nav-bas"
                                            aria-selected="false"> Payroll & BAS
                                    </button>



                                    <button class="nav-link" id="bookkeeping-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-bookkeeping" type="button" role="tab"
                                            aria-controls="nav-bookkeeping"
                                            aria-selected="false"> Bookkeeping
                                    </button>

                                    <button class="nav-link" id="smsf-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-smsf" type="button" role="tab"
                                            aria-controls="nav-smsf"
                                            aria-selected="false"> Software Installation And Training
                                    </button>

                                    <button class="nav-link" id="financial-services-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-financial-services" type="button" role="tab"
                                            aria-controls="nav-financial-services"
                                            aria-selected="false"> Financial Services
                                    </button>
                                    <button class="nav-link" id="smsf-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-smsf" type="button" role="tab"
                                            aria-controls="nav-smsf"
                                            aria-selected="false"> Super Fund
                                    </button>

                                    <button class="nav-link" id="financial-planning-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-financial-planning" type="button" role="tab"
                                            aria-controls="nav-financial-planning"
                                            aria-selected="false"> Financial Planning
                                    </button>


                                    {{--<button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Second Look Assessment</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Business Services</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Sole Trading And Partnership</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Sole Trader BASt</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Company & Trust</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Book-keeping</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Financial Services</button>

                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Super Fund</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Financial Planning & Advice</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Resources</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Tax Calculator</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                            aria-selected="false">Tax Checklist</button>--}}


                                    {{-- <button class="nav-link" id="nav-test-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-test" type="button" role="tab" aria-controls="nav-test"
                                        aria-selected="false">Test</button> --}}
                                </div>
                                @if (session()->get('AdminUser')['type'] == 'R')
                                    <div class="ms-auto">
                                        <button class="btn btn-success h-100" type="submit">Update</button>
                                    </div>
                                @endif
                            </div>
                        </nav>
                        <div class="card-body">
                            @csrf
                            <div class="tab-content" id="nav-tabContent">
                                {{--Home--}}
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="home_header1"
                                                   value="{{ $cms['home_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="home_content1" id="home_content1"
                                                      class="ckeditor">{{ $cms['home_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('home_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="home_header2"
                                                   value="{{ $cms['home_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="home_content2" id="home_content2"
                                                      class="ckeditor">{{ $cms['home_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="home_header3"
                                                   value="{{ $cms['home_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="home_content3" id="home_content3"
                                                      class="ckeditor">{{ $cms['home_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('home_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="home_header4"
                                                   value="{{ $cms['home_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="home_content4" id="home_content4"
                                                      class="ckeditor">{{ $cms['home_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="home_header5"
                                                   value="{{ $cms['home_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="home_content5" id="home_content5"
                                                      class="ckeditor">{{ $cms['home_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('home_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image1</label>
                                            <input type="file" class="form-control" name="home_image1">
                                            <div class="text-danger">
                                                @error('home_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['home_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="home_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['home_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['home_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image2</label>
                                            <input type="file" class="form-control" name="home_image2">
                                            <div class="text-danger">
                                                @error('home_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['home_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="home_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['home_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['home_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="home_content" id="home_content"
                                                      class="ckeditor">{{ $cms['home_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--About--}}
                             {{--   <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                     aria-labelledby="nav-about-tab">
                                    <div class="row">
                                        <h5 class="card-title">About Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="about_title"
                                                   value="{{ $cms['about_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('about_title')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="about_meta"
                                                   value="{{ $cms['about_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('about_meta')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="about_image">
                                            <div class="text-danger">
                                                @error('about_image')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['about_image']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="About Image" data-key="about_image"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('public/images/uploads/cms/' . $cms['about_image']) }}"
                                                     src="{{ asset('public/images/uploads/cms/' . $cms['about_image']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            --}}{{-- <textarea name="about_content" class="ckeditor" id=""></textarea> --}}{{--
                                            <textarea name="about_content" class="ckeditor"
                                                      id="about_content">{{ $cms['about_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                --}}{{--FAQ--}}{{--
                                <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                    <div class="row">
                                        <h5 class="card-title">FAQ Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="faq_title"
                                                   value="{{ $cms['faq_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('faq_title')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="faq_meta"
                                                   value="{{ $cms['faq_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('faq_meta')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">FAQ Content</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="faq_content" class="ckeditor"
                                                      id="faq_content">{{ $cms['faq_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                --}}{{--Services--}}{{--
                                <div class="tab-pane fade" id="nav-services" role="tabpanel"
                                     aria-labelledby="nav-services-tab">
                                    <div class="row">
                                        <h5 class="card-title">Services Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="services_title"
                                                   value="{{ $cms['services_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('services_title')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="services_meta"
                                                   value="{{ $cms['services_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('services_meta')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">Services Content</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="services_content" class="ckeditor"
                                                      id="services_content">{{ $cms['services_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                --}}{{--Terms--}}{{--
                                <div class="tab-pane fade" id="nav-terms" role="tabpanel"
                                     aria-labelledby="nav-ssss-tab">
                                    <div class="row">
                                        <h5 class="card-title">Terms Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="terms_title"
                                                   value="{{ $cms['terms_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tems_title')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="terms_meta"
                                                   value="{{ $cms['terms_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('terms_meta')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">Terms Content</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="terms_content" class="ckeditor"
                                                      id="terms_content">{{ $cms['terms_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
--}}
                                {{--Individual tax--}}
                                <div class="tab-pane fade " id="nav-individual-tax" role="tabpanel"
                                     aria-labelledby="nav-individual-tax-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="individual_tax_header1"
                                                   value="{{ $cms['individual_tax_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('individual_tax_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="individual_tax_content1" id="individual_tax_content1"
                                                      class="ckeditor">{{ $cms['individual_tax_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('individual_tax_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="individual_tax_header2"
                                                   value="{{ $cms['individual_tax_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('individual_tax_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="individual_tax_content2" id="individual_tax_content2"
                                                      class="ckeditor">{{ $cms['individual_tax_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('individual_tax_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="individual_tax_header3"
                                                   value="{{ $cms['individual_tax_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('individual_tax_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="individual_tax_content3" id="individual_tax_content3"
                                                      class="ckeditor">{{ $cms['individual_tax_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('individual_tax_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="individual_tax_header4"
                                                   value="{{ $cms['individual_tax_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('individual_tax_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="individual_tax_content4" id="individual_tax_content4"
                                                      class="ckeditor">{{ $cms['individual_tax_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('individual_tax_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="individual_tax_header5"
                                                   value="{{ $cms['individual_tax_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('individual_tax_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="individual_tax_content5" id="individual_tax_content5"
                                                      class="ckeditor">{{ $cms['individual_tax_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('individual_tax_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="individual_tax_image1">
                                            <div class="text-danger">
                                                @error('individual_tax_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['individual_tax_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="individual_tax_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['individual_tax_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['individual_tax_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="individual_tax_image2">
                                            <div class="text-danger">
                                                @error('individual_tax_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['individual_tax_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="individual_tax_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['individual_tax_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['individual_tax_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="tab-pane fade " id="nav-lodge-in-person" role="tabpanel"
                                     aria-labelledby="nav-lodge-in-person-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="lodge_in_person_header1"
                                                   value="{{ $cms['lodge_in_person_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('lodge_in_person_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="lodge_in_person_content1" id="lodge_in_person_content1"
                                                      class="ckeditor">{{ $cms['lodge_in_person_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('lodge_in_person_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="lodge_in_person_header2"
                                                   value="{{ $cms['lodge_in_person_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('lodge_in_person_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="lodge_in_person_content2" id="lodge_in_person_content2"
                                                      class="ckeditor">{{ $cms['lodge_in_person_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('lodge_in_person_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="lodge_in_person_header3"
                                                   value="{{ $cms['lodge_in_person_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('lodge_in_person_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="lodge_in_person_content3" id="lodge_in_person_content3"
                                                      class="ckeditor">{{ $cms['lodge_in_person_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('lodge_in_person_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="lodge_in_person_header4"
                                                   value="{{ $cms['lodge_in_person_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('lodge_in_person_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="lodge_in_person_content4" id="lodge_in_person_content4"
                                                      class="ckeditor">{{ $cms['lodge_in_person_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('lodge_in_person_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="lodge_in_person_header5"
                                                   value="{{ $cms['lodge_in_person_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('lodge_in_person_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="lodge_in_person_content5" id="lodge_in_person_content5"
                                                      class="ckeditor">{{ $cms['lodge_in_person_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('lodge_in_person_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="lodge_in_person_image1">
                                            <div class="text-danger">
                                                @error('lodge_in_person_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['lodge_in_person_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="lodge_in_person_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['lodge_in_person_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['lodge_in_person_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="lodge_in_person_image2">
                                            <div class="text-danger">
                                                @error('lodge_in_person_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['lodge_in_person_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="lodge_in_person_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['lodge_in_person_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['lodge_in_person_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="tab-pane fade " id="nav-online" role="tabpanel"
                                     aria-labelledby="nav-online-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="online_header1"
                                                   value="{{ $cms['online_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('online_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="online_content1" id="online_content1"
                                                      class="ckeditor">{{ $cms['online_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('online_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="online_header2"
                                                   value="{{ $cms['online_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('online_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="online_content2" id="online_content2"
                                                      class="ckeditor">{{ $cms['online_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('online_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="online_header3"
                                                   value="{{ $cms['online_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('online_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="online_content3" id="online_content3"
                                                      class="ckeditor">{{ $cms['online_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('online_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="online_header4"
                                                   value="{{ $cms['online_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('online_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="online_content4" id="online_content4"
                                                      class="ckeditor">{{ $cms['online_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('online_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="online_header5"
                                                   value="{{ $cms['online_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('online_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="online_content5" id="online_content5"
                                                      class="ckeditor">{{ $cms['online_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('online_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="online_image1">
                                            <div class="text-danger">
                                                @error('online_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['online_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="online_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['online_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['online_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="online_image2">
                                            <div class="text-danger">
                                                @error('online_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['online_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="online_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['online_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['online_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>



                                <div class="tab-pane fade " id="nav-tax-review" role="tabpanel"
                                     aria-labelledby="nav-tax-review-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="tax_review_header1"
                                                   value="{{ $cms['tax_review_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tax_review_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="tax_review_content1" id="tax_review_content1"
                                                      class="ckeditor">{{ $cms['tax_review_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('tax_review_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="tax_review_header2"
                                                   value="{{ $cms['tax_review_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tax_review_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="tax_review_content2" id="tax_review_content2"
                                                      class="ckeditor">{{ $cms['tax_review_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="tax_review_header3"
                                                   value="{{ $cms['tax_review_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tax_review_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="tax_review_content3" id="tax_review_content3"
                                                      class="ckeditor">{{ $cms['tax_review_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="tax_review_header4"
                                                   value="{{ $cms['tax_review_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tax_review_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="tax_review_content4" id="tax_review_content4"
                                                      class="ckeditor">{{ $cms['tax_review_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="tax_review_header5"
                                                   value="{{ $cms['tax_review_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tax_review_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="tax_review_content5" id="tax_review_content5"
                                                      class="ckeditor">{{ $cms['tax_review_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="tax_review_content6" id="tax_review_content6"
                                                      class="ckeditor">{{ $cms['tax_review_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="tax_review_content7" id="tax_review_content7"
                                                      class="ckeditor">{{ $cms['tax_review_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('tax_review_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="tax_review_image1">
                                            <div class="text-danger">
                                                @error('tax_review_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['tax_review_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="tax_review_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['tax_review_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['tax_review_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="tax_review_image2">
                                            <div class="text-danger">
                                                @error('tax_review_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['tax_review_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="tax_review_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['tax_review_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['tax_review_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-business-services" role="tabpanel"
                                     aria-labelledby="nav-business-services-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="business_services_header1"
                                                   value="{{ $cms['business_services_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('business_services_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="business_services_content1" id="business_services_content1"
                                                      class="ckeditor">{{ $cms['business_services_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('business_services_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="business_services_header2"
                                                   value="{{ $cms['business_services_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('business_services_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="business_services_content2" id="business_services_content2"
                                                      class="ckeditor">{{ $cms['business_services_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('business_services_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="business_services_header3"
                                                   value="{{ $cms['business_services_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('business_services_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="business_services_content3" id="business_services_content3"
                                                      class="ckeditor">{{ $cms['business_services_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('business_services_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="business_services_header4"
                                                   value="{{ $cms['business_services_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('business_services_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="business_services_content4" id="business_services_content4"
                                                      class="ckeditor">{{ $cms['business_services_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('business_services_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="business_services_image1">
                                            <div class="text-danger">
                                                @error('business_services_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['business_services_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="business_services_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="business_services_image2">
                                            <div class="text-danger">
                                                @error('business_services_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['business_services_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="business_services_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 3</label>
                                            <input type="file" class="form-control" name="business_services_image3">
                                            <div class="text-danger">
                                                @error('business_services_image3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['business_services_image3']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="business_services_image3"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image3']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['business_services_image3']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-small-business" role="tabpanel"
                                     aria-labelledby="nav-small-business-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="small_business_header1"
                                                   value="{{ $cms['small_business_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="small_business_content1" id="small_business_content1"
                                                      class="ckeditor">{{ $cms['small_business_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('small_business_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="small_business_header2"
                                                   value="{{ $cms['small_business_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="small_business_content2" id="small_business_content2"
                                                      class="ckeditor">{{ $cms['small_business_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="small_business_header3"
                                                   value="{{ $cms['small_business_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="small_business_content3" id="small_business_content3"
                                                      class="ckeditor">{{ $cms['small_business_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('small_business_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="small_business_header4"
                                                   value="{{ $cms['small_business_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="small_business_content4" id="small_business_content4"
                                                      class="ckeditor">{{ $cms['small_business_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="small_business_header5"
                                                   value="{{ $cms['small_business_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="small_business_content5" id="small_business_content5"
                                                      class="ckeditor">{{ $cms['small_business_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="small_business_header6"
                                                   value="{{ $cms['small_business_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="small_business_content6" id="small_business_content6"
                                                      class="ckeditor">{{ $cms['small_business_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="small_business_header7"
                                                   value="{{ $cms['small_business_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="small_business_content7" id="small_business_content7"
                                                      class="ckeditor">{{ $cms['small_business_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="small_business_header8"
                                                   value="{{ $cms['small_business_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('small_business_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 8</label>
                                            <textarea name="small_business_content8" id="small_business_content8"
                                                      class="ckeditor">{{ $cms['small_business_content8'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('small_business_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>




                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="small_business_image1">
                                            <div class="text-danger">
                                                @error('small_business_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['small_business_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="small_business_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['small_business_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['small_business_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-bas" role="tabpanel"
                                     aria-labelledby="nav-bas-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="bas_header1"
                                                   value="{{ $cms['bas_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="bas_content1" id="bas_content1"
                                                      class="ckeditor">{{ $cms['bas_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('bas_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="bas_header2"
                                                   value="{{ $cms['bas_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="bas_content2" id="bas_content2"
                                                      class="ckeditor">{{ $cms['bas_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="bas_header3"
                                                   value="{{ $cms['bas_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>
                                            <textarea name="bas_content3" id="bas_content3"
                                                      class="ckeditor">{{ $cms['bas_content3'] ?? '' }}</textarea>
                                            </textarea>
                                            <div class="text-danger">
                                                @error('bas_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="bas_header4"
                                                   value="{{ $cms['bas_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>
                                            <textarea name="bas_content4" id="bas_content4"
                                                      class="ckeditor">{{ $cms['bas_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="bas_header5"
                                                   value="{{ $cms['bas_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>
                                            <textarea name="bas_content5" id="bas_content5"
                                                      class="ckeditor">{{ $cms['bas_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="bas_header6"
                                                   value="{{ $cms['bas_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>
                                            <textarea name="bas_content6" id="bas_content6"
                                                      class="ckeditor">{{ $cms['bas_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="bas_header7"
                                                   value="{{ $cms['bas_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>
                                            <textarea name="bas_content7" id="bas_content7"
                                                      class="ckeditor">{{ $cms['bas_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="bas_header8"
                                                   value="{{ $cms['bas_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bas_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 8</label>
                                            <textarea name="bas_content8" id="bas_content8"
                                                      class="ckeditor">{{ $cms['bas_content8'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bas_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>




                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="bas_image1">
                                            <div class="text-danger">
                                                @error('bas_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['bas_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="bas_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['bas_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['bas_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-company-accounting" role="tabpanel"
                                     aria-labelledby="nav-company-accounting-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="company_accounting_header1"
                                                   value="{{ $cms['company_accounting_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="company_accounting_content1" id="company_accounting_content1"
                                                      class="ckeditor">{{ $cms['company_accounting_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('company_accounting_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="company_accounting_header2"
                                                   value="{{ $cms['company_accounting_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="company_accounting_content2" id="company_accounting_content2"
                                                      class="ckeditor">{{ $cms['company_accounting_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('company_accounting_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="company_accounting_header3"
                                                   value="{{ $cms['company_accounting_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="company_accounting_header4"
                                                   value="{{ $cms['company_accounting_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="company_accounting_header5"
                                                   value="{{ $cms['company_accounting_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="company_accounting_header6"
                                                   value="{{ $cms['company_accounting_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="company_accounting_header7"
                                                   value="{{ $cms['company_accounting_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="company_accounting_header8"
                                                   value="{{ $cms['company_accounting_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 9</label>
                                            <input type="text" class="form-control" name="company_accounting_header9"
                                                   value="{{ $cms['company_accounting_header9'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header9')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 10</label>
                                            <input type="text" class="form-control" name="company_accounting_header10"
                                                   value="{{ $cms['company_accounting_header10'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('company_accounting_header10')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="company_accounting_image1">
                                            <div class="text-danger">
                                                @error('company_accounting_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['company_accounting_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="company_accounting_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['company_accounting_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['company_accounting_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-bookkeeping" role="tabpanel"
                                     aria-labelledby="nav-bookkeeping-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="bookkeeping_header1"
                                                   value="{{ $cms['bookkeeping_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="bookkeeping_content1" id="bookkeeping_content1"
                                                      class="ckeditor">{{ $cms['bookkeeping_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('bookkeeping_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="bookkeeping_header2"
                                                   value="{{ $cms['bookkeeping_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="bookkeeping_content2" id="bookkeeping_content2"
                                                      class="ckeditor">{{ $cms['bookkeeping_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('bookkeeping_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="bookkeeping_header3"
                                                   value="{{ $cms['bookkeeping_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="bookkeeping_header4"
                                                   value="{{ $cms['bookkeeping_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="bookkeeping_header5"
                                                   value="{{ $cms['bookkeeping_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="bookkeeping_header6"
                                                   value="{{ $cms['bookkeeping_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="bookkeeping_header7"
                                                   value="{{ $cms['bookkeeping_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="bookkeeping_header8"
                                                   value="{{ $cms['bookkeeping_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 9</label>
                                            <input type="text" class="form-control" name="bookkeeping_header9"
                                                   value="{{ $cms['bookkeeping_header9'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header9')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 10</label>
                                            <input type="text" class="form-control" name="bookkeeping_header10"
                                                   value="{{ $cms['bookkeeping_header10'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('bookkeeping_header10')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>


                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="bookkeeping_image1">
                                            <div class="text-danger">
                                                @error('bookkeeping_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['bookkeeping_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="bookkeeping_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['bookkeeping_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['bookkeeping_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-smsf" role="tabpanel"
                                     aria-labelledby="nav-smsf-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="smsf_header1"
                                                   value="{{ $cms['smsf_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="smsf_content1" id="smsf_content1"
                                                      class="ckeditor">{{ $cms['smsf_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('smsf_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="smsf_header2"
                                                   value="{{ $cms['smsf_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="smsf_content2" id="smsf_content2"
                                                      class="ckeditor">{{ $cms['smsf_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="smsf_header3"
                                                   value="{{ $cms['smsf_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>

                                            <textarea name="smsf_content3" id="smsf_content3"
                                                      class="ckeditor">{{ $cms['smsf_content3'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="smsf_header4"
                                                   value="{{ $cms['smsf_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 4</label>

                                            <textarea name="smsf_content4" id="smsf_content4"
                                                      class="ckeditor">{{ $cms['smsf_content4'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="smsf_header5"
                                                   value="{{ $cms['smsf_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 5</label>

                                            <textarea name="smsf_content5" id="smsf_content5"
                                                      class="ckeditor">{{ $cms['smsf_content5'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="smsf_header6"
                                                   value="{{ $cms['smsf_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 6</label>

                                            <textarea name="smsf_content6" id="smsf_content6"
                                                      class="ckeditor">{{ $cms['smsf_content6'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="smsf_header7"
                                                   value="{{ $cms['smsf_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 7</label>

                                            <textarea name="smsf_content7" id="smsf_content7"
                                                      class="ckeditor">{{ $cms['smsf_content7'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content7')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="smsf_header8"
                                                   value="{{ $cms['smsf_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header8')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 8</label>

                                            <textarea name="smsf_content8" id="smsf_content8"
                                                      class="ckeditor">{{ $cms['smsf_content8'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content8')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 9</label>
                                            <input type="text" class="form-control" name="smsf_header9"
                                                   value="{{ $cms['smsf_header9'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header9')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 9</label>

                                            <textarea name="smsf_content9" id="smsf_content9"
                                                      class="ckeditor">{{ $cms['smsf_content9'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content9')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 10</label>
                                            <input type="text" class="form-control" name="smsf_header10"
                                                   value="{{ $cms['smsf_header10'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header10')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 10</label>

                                            <textarea name="smsf_content10" id="smsf_content10"
                                                      class="ckeditor">{{ $cms['smsf_content10'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content10')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 11</label>
                                            <input type="text" class="form-control" name="smsf_header11"
                                                   value="{{ $cms['smsf_header11'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header11')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 11</label>

                                            <textarea name="smsf_content11" id="smsf_content11"
                                                      class="ckeditor">{{ $cms['smsf_content11'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content11')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 12</label>
                                            <input type="text" class="form-control" name="smsf_header12"
                                                   value="{{ $cms['smsf_header12'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('smsf_header12')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 12</label>

                                            <textarea name="smsf_content12" id="smsf_content12"
                                                      class="ckeditor">{{ $cms['smsf_content12'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('smsf_content12')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="smsf_image1">
                                            <div class="text-danger">
                                                @error('smsf_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['smsf_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="smsf_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['smsf_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['smsf_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-financial-services" role="tabpanel"
                                     aria-labelledby="nav-financial-services-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="financial_services_header1"
                                                   value="{{ $cms['financial_services_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_services_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="financial_services_content1" id="financial_services_content1"
                                                      class="ckeditor">{{ $cms['financial_services_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('financial_services_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="financial_services_header2"
                                                   value="{{ $cms['financial_services_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_services_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="financial_services_content2" id="financial_services_content2"
                                                      class="ckeditor">{{ $cms['financial_services_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_services_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="financial_services_header3"
                                                   value="{{ $cms['financial_services_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_services_header3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>

                                            <textarea name="financial_services_content3" id="financial_services_content3"
                                                      class="ckeditor">{{ $cms['financial_services_content3'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_services_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>



                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="financial_services_image1">
                                            <div class="text-danger">
                                                @error('financial_services_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial_services_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial_services_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial_services_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial_services_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="financial_services_image2">
                                            <div class="text-danger">
                                                @error('financial_services_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial_services_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial_services_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial_services_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial_services_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="nav-financial-planning" role="tabpanel"
                                     aria-labelledby="nav-financial-planning-tab">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 1</label>
                                            <input type="text" class="form-control" name="financial_planning_header1"
                                                   value="{{ $cms['financial_planning_header1'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 1</label>
                                            <textarea name="financial_planning_content1" id="financial_planning_content1"
                                                      class="ckeditor">{{ $cms['financial_planning_content1'] ?? '' }}</textarea>


                                            <div class="text-danger">
                                                @error('financial_planning_content1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 2</label>
                                            <input type="text" class="form-control" name="financial_planning_header2"
                                                   value="{{ $cms['financial_planning_header2'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 2</label>

                                            <textarea name="financial_planning_content2" id="financial_planning_content2"
                                                      class="ckeditor">{{ $cms['financial_planning_content2'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_planning_content2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 3</label>
                                            <input type="text" class="form-control" name="financial_planning_header3"
                                                   value="{{ $cms['financial_planning_header3'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Content 3</label>

                                            <textarea name="financial_planning_content2" id="financial_planning_content3"
                                                      class="ckeditor">{{ $cms['financial_planning_content3'] ?? '' }}</textarea>
                                            <div class="text-danger">
                                                @error('financial_planning_content3')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 4</label>
                                            <input type="text" class="form-control" name="financial_planning_header4"
                                                   value="{{ $cms['financial_planning_header4'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header4')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 5</label>
                                            <input type="text" class="form-control" name="financial_planning_header5"
                                                   value="{{ $cms['financial_planning_header5'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header5')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 6</label>
                                            <input type="text" class="form-control" name="financial_planning_header6"
                                                   value="{{ $cms['financial_planning_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 7</label>
                                            <input type="text" class="form-control" name="financial_planning_header7"
                                                   value="{{ $cms['financial_planning_header7'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 8</label>
                                            <input type="text" class="form-control" name="financial_planning_header8"
                                                   value="{{ $cms['financial_planning_header8'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header6')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Header 9</label>
                                            <input type="text" class="form-control" name="financial_planning_header6"
                                                   value="{{ $cms['financial_planning_header6'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('financial_planning_header9')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        </div>

                                        <h5 class="card-title">Images</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 1</label>
                                            <input type="file" class="form-control" name="financial_planning_image1">
                                            <div class="text-danger">
                                                @error('financial_planning_image1')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial_planning_image1']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial_planning_image1"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial_planning_image1']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial_planning_image1']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" name="financial_planning_image2">
                                            <div class="text-danger">
                                                @error('financial_planning_image2')
                                                * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['financial_planning_image2']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="financial_planning_image2"
                                                            class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                     data-fancybox="gallery"
                                                     data-src="{{ asset('/public/images/uploads/cms/' . $cms['financial_planning_image2']) }}"
                                                     src="{{ asset('/public/images/uploads/cms/' . $cms['financial_planning_image2']) }}"
                                                     alt="Error">
                                            @endif
                                        </div>

                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>






                            </div>
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
        $(document).ready(function () {
            $('.alert').fadeOut(3000);

            Fancybox.bind("gallery", {});
            // var ckeditor = new CKEDITOR
            $(window).on('load', function () {
                $('.ckeditor').ckeditor();
            });
            // CKEDITOR.replaceAll('ckeditor');

            $(document).on('click', '.ajaxDelete', function (e) {
                e.preventDefault();
                var _this = $(this);
                var name = $(this).attr('data-name');
                var key = $(this).attr('data-key');
                var csrf = "{{ csrf_token() }}";

                if (confirm('Are you sure to delete current ' + name + ' ?')) {
                    data = {
                        key: key,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('cmsajaxDelete') }}",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                // $(_this).parent('div').attr('hidden', 'true');
                                $(_this).parent('div').html('');
                                $('#alert').addClass('alert alert-danger')
                                    .removeClass('m-0 border-0 p-0').html('Image Deleted...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                }
                // console.log(key, name);
            });

            var $textareas = $('textarea');
            $textareas.each(function() { // to avoid the shrinking
                this.style.minHeight = this.offsetHeight + 'px';
            });

            $textareas.on('input', function() {
                this.style.height = '';
                this.style.height = this.scrollHeight + 'px';
            });
        });
    </script>
@endsection

