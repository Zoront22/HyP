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
                                <h5 class="dlab-tilte">
                                    <span class="icon-sm text-primary"><i class="ti-location-pin"></i></span>
                                    Horarios y Oficina
                                </h5>
                                <p>Blvd. Fundadores 3751 Bodega 5 Col. Valle de las Flores C.P. 25150 / Saltillo
                                    Coahuila / Mexico</p>
                                <h6 class="m-b15 font-weight-400"><i class="ti-alarm-clock"></i> Office Hours</h6>
                                <p class="m-b0">Lun a Vier - 9:00 a. m. - 6:00 p. m.</p>
                                <p>Sab - Dom - Close</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                            <div class="icon-content">
                                <h5 class="dlab-tilte">
                                    <span class="icon-sm text-primary"><i class="ti-email"></i></span>
                                    Contacto
                                </h5>
                                <p class="m-b0"><a href="mailto:someone@example.com" class="text-white">HYP Solutuion
                                        Facilitators
                                    </a></p>
                                <p class="m-b0"><a href="mailto:someone@example.com" class="text-white">Ing. Heber
                                        Gaona
                                    </a></p>
                                <p class="m-b0"><a href="mailto:someone@example.com"
                                        class="text-white">heber.gaona@hypsolution.com.mx</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                            <div class="icon-content">
                                <h5 class="dlab-tilte">
                                    <span class="icon-sm text-primary"><i class="ti-mobile"></i></span>
                                    Numero Telefónico
                                </h5>
                                <p class="m-b0"><a href="tel:+4733378901" class="text-white">Tel. 8446797552</a></p>
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
                    <h3 class="title-box font-weight-300 m-t0 m-b10">Convirtamos tu idea en realidad <span
                            class="bg-primary"></span></h3>
                    <p>¡Contáctanos hoy mismo por email y trabajemos juntos en proyectos que generen un impacto positivo
                        y sostenible!</p>
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
