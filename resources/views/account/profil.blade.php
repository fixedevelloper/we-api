@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profil</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="bg-picture">
                                    <div class="d-flex align-items-top">
                                        <img src="{{asset('storage/uploads/'.$user->image)}}"
                                             class="flex-shrink-0 rounded-circle avatar-xl img-thumbnail float-start me-3"
                                             alt="profile-image">
                                    </div>
                                    <form method="post" action="{{route('changeimage')}}" enctype="multipart/form-data">
                                       @csrf
                                        <div class="mt-3 d-grid text-center">
                                            <input required name="photo" type="file" placeholder="Changer image">
                                        </div>
                                        <div class="mt-3 d-grid text-center">
                                            <button class="btn btn-success" type="submit"> Changer image</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills navtab-bg nav-justified">
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true"
                                           class="nav-link active">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#messages1" data-bs-toggle="tab" aria-expanded="false"
                                           class="nav-link">
                                            Changer mot de passe
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="profile1">
                                        <form method="post">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name" class="form-label">Nom</label>
                                                    <input value="{{$user->name}}" class="form-control" name="name"
                                                           type="text" id="name" required=""
                                                           placeholder="Enter your name">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="lastname" class="form-label">Email</label>
                                                    <input value="{{$user->email}}" class="form-control"
                                                           type="email" required=""
                                                           id="lastname" name="email"
                                                           placeholder="Enter your lastName">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input value="{{$user->phone}}" class="form-control" name="phone"
                                                           type="text" id="name" required=""
                                                           placeholder="Enter your Telephone">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="adressepostale" class="form-label">Adress
                                                        postal</label>
                                                    <input value="{{$user->address}}" class="form-control"
                                                           name="address" type="text" required=""
                                                           id="adressepostale">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label">API KEY</label>
                                                    <input value="{{$user->api_key}}" readonly class="form-control"
                                                          type="text" id="name" required=""
                                                           placeholder="Enter your Adresse">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="commune" class="form-label">SECRET KEY</label>
                                                    <input value="{{$user->api_secret}}" class="form-control"
                                                           name="api_secret" type="text" required="" id="commune"
                                                          >
                                                </div>
                                            </div>

                                            <div class="mb-3 d-grid text-center">
                                                <button class="btn btn-success" type="submit"> Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="messages1">
                                        <form method="POST" action="{{route('changepassword')}}">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="oldpassword" class="form-label">Ancien mot de
                                                        passe</label>
                                                    <input class="form-control" name="oldpassword" type="password"
                                                           id="oldpassword" required="" placeholder="">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="password" class="form-label">Nouveau mot de
                                                        passe</label>
                                                    <input class="form-control" name="password" type="password"
                                                           required="" id="password" placeholder="">
                                                </div>
                                            </div>
                                            <div class="mb-3 d-grid text-center">
                                                <button class="btn btn-outline-dark" type="submit"> Changer le mot de
                                                    passe
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection

