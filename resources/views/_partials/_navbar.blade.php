<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="We-api" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
            <img src="{{asset('images/logo-small.png')}}" alt="We-api" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{auth()->user()->name}}</span></h1>
              @if(auth()->user()->user_type==1)
              <h3 class="welcome-sub-text">Your current merchant: <span class="text-black fw-bold">{{\App\Models\AccountKey::query()->find(session('current_merchant'))}}</span></h3>
              @endif
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Change Merchant </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3" >
                        <p class="mb-0 font-weight-medium float-left">Select merchant</p>
                    </a>
                    <div class="dropdown-divider"></div>

                    @foreach(\App\Models\AccountKey::query()->where(['user_id'=>auth()->id()])->get() as $m)
                    <a class="dropdown-item preview-item" href="{{route('changeMerchant',['id'=>$m->id])}}">
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">{{$m->name}} </p>
                            <p class="fw-light small-text mb-0">{{$m->merchant_key}}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{asset('images/avatar.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('images/avatar.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{auth()->user()->name}}</p>
                <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="{{route('profil')}}" ><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item" href="{{route('documentation')}}"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> API Documentation</a>
              <a class="dropdown-item" href="{{route('logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
