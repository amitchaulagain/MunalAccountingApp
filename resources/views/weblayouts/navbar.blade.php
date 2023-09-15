<!-- Header Bootstrap -->
<header class="py-1 bg-dark sticky-top text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                @if (!empty($logo_image->value))
                    <a class="navbar-brand" href="{{ route('userHome') }}">
                        <img style="height: 40px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                            alt="{{ $brand_title->value ?? 'Munal Accounting Services' }}">
                    </a>
                @endif
                <a class="navbar-brand" href="{{ route('userHome') }}">{{ $brand_title->value ?? 'MUNAL ACCOUNTING SERVICES' }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if ($menu == 'home') active @endif" aria-current="page"
                                href="{{ route('userHome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($menu == 'home') active @endif" aria-current="page"
                               href="{{ route('userHome') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($menu == 'home') active @endif" aria-current="page"
                               href="{{ route('userHome') }}"> Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'purpose') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'sale') }}">Accounting and Bookkeeping Services</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'rent') }}">Starting a new business</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">Tax Returns And Tax Planning</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">BusinessPlan/Cash Flow For Financing</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">Business Consulting Services</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">Self Managed Super Fund</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">External Examination Of Trust Accounts</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">Outsourcing And Other Services</a></li>

                            </ul>
                        </li>

                    </ul>
                 </div>
            </div>
        </nav>
    </div>
</header>
