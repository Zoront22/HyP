@extends('layouts.front')

@section('content')
    <!-- Contact Form -->
    @foreach ($images as $image)
        @if ($image->id === 10)
            <div class="section-full content-inner contact-page-9 overlay-black-dark"
                style="background-image: url({{ asset('storage/theme/images/background-06.') }}png); background-position: 30% 100%">
        @endif
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 text-white">
                <div class="row">
                    <div class="col-lg-12 col-md-12 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                            <div class="icon-content">
                                @foreach ($texts as $text)
                                    @if ($text->id === 2)
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-location-pin"></i></span>
                                            {{ $text->title }}
                                        </h5>
                                        <p> {{ $text->content }} </p>
                                    @endif
                                @endforeach
                                @foreach ($texts as $text)
                                    @if ($text->id === 3)
                                        <h6 class="m-b15 font-weight-400"><i class="ti-alarm-clock"></i> {{ $text->title }}
                                        </h6>
                                        <p class="m-b0"> {{ $text->content }} </p>
                                        <p> {{ $text->others }} </p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                            <div class="icon-content">
                                @foreach ($texts as $text)
                                    @if ($text->id === 4)
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-email"></i></span>
                                            {{ $text->title }}
                                        </h5>
                                        <p class="m-b0"><a href="mailto:someone@example.com" class="text-white">
                                                {{ $text->subtitle }} </a></p>
                                        <p class="m-b0"><a href="mailto:someone@example.com" class="text-white">
                                                {{ $text->content }} </a></p>
                                        <p class="m-b0"><a href="mailto:someone@example.com" class="text-white">
                                                {{ $text->others }} </a></p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                            <div class="icon-content">
                                @foreach ($texts as $text)
                                    @if ($text->id === 5)
                                        <h5 class="dlab-tilte">
                                            <span class="icon-sm text-primary"><i class="ti-mobile"></i></span>
                                            {{ $text->title }}
                                        </h5>
                                        <p class="m-b0"><a href="tel:+4733378901" class="text-white">
                                                {{ $text->content }} </a></p>
                                    @endif
                                @endforeach
                                {{-- <p class="m-b0"><a href="tel:+4733378901" class="text-white">+00 1234 5678 90</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 m-b30">
                <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data"
                    class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s">
                    @csrf
                    @foreach ($texts as $text)
                        @if ($text->id === 1)
                            <h3 class="title-box font-weight-300 m-t0 m-b10"> {{ $text->title }} <span
                                    class="bg-primary"></span></h3>
                            <p> {{ $text->content }} </p>
                        @endif
                    @endforeach
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="ti-user text-primary"></i></span>
                                    <input name="name" type="text" required class="form-control" placeholder="Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
                                    <input name="phone" type="text" required class="form-control dz-number"
                                        placeholder="Télefono">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="ti-email text-primary"></i></span>
                                    <input name="email" type="email" class="form-control" required placeholder="Correo">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-addon"><i class="ti-check-box text-primary"></i></span>
                                        <select class="">
                                            <option>Select Industry</option>
                                            <option>Oil/Gas Plant</option>
                                            <option>Steel Plant</option>
                                            <option>Factory</option>
                                            <option>Construct</option>
                                            <option>Solar Plant</option>
                                            <option>Food Industry</option>
                                            <option>Agriculture</option>
                                            <option>Ship Industry</option>
                                            <option>Leather Industry</option>
                                            <option>Nuclear Plant</option>
                                            <option>Beer Factory</option>
                                            <option>Mining Industry</option>
                                            <option>Car Industry</option>
                                            <option>Plastic Industry</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="ti-file text-primary"></i></span>
                                    <input name="file" type="file" class="form-control" placeholder="Sube un archivo">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
                                    <textarea name="msg" rows="4" class="form-control" required placeholder="Cuentanos tu idea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button name="submit" type="submit" value="Submit" class="site-button button-md">
                                <span>Enviar</span> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact Form END -->
@endsection
