@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex align-items-center">
        @if ($dataHome->isEmpty())
            <p>No data available</p>
        @else
            @foreach ($dataHome as $item)
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                            data-aos="fade-up" data-aos-delay="200">
                            <h1>{{ $item->title }}</h1>
                            <h2>
                                {{ $item->desc }}
                            </h2>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('img/' . $item->icon) }}" class="img-fluid animated" alt="" />
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="why-us section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    @if ($dataAboutAtas->isEmpty())
                        <p>No data available</p>
                    @else
                        @foreach ($dataAboutAtas as $item)
                            <div class="col-lg-12 mb-1 text-center">
                                <p>
                                    {{ $item->title }}
                                </p>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-5 align-items-stretch align-content-center" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('img/why-us.png') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h4>
                                Ada beberapa jenis proctoring system, termasuk :
                            </h4>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                @if ($dataAboutKonten->isEmpty())
                                    <p>No data available</p>
                                @else
                                    @foreach ($dataAboutKonten as $index => $item)
                                        <li>
                                            <a data-bs-toggle="collapse" class="collapse"
                                                data-bs-target="#accordion-list-{{ $index + 1 }}">
                                                <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                                {{ $item->title }}
                                                <i class="bx bx-chevron-down icon-show"></i>
                                                <i class="bx bx-chevron-up icon-close"></i>
                                            </a>
                                            <div id="accordion-list-{{ $index + 1 }}"
                                                class="collapse {{ $loop->first ? 'show' : '' }}"
                                                data-bs-parent=".accordion-list">
                                                <p>{{ $item->desc }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    @if ($dataAboutBawah->isEmpty())
                        <p>No data available</p>
                    @else
                        @foreach ($dataAboutBawah as $index => $item)
                            {!! $item->desc !!}
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Study Case Section ======= -->
        <section id="case" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Studi case</h2>
                </div>
                @if ($dataCase->isEmpty())
                    <p>No data available</p>
                @else
                    @foreach ($dataCase as $index => $item)
                        @if ($index % 2 == 0)
                            <div class="row text-center align-center">
                        @endif

                        <div class="col-xl-6 col-md-6 mt-4" data-aos="zoom-in"
                            data-aos-delay="{{ 100 * (($index % 4) + 1) }}">
                            <div class="icon-box">
                                <div class="icon"><i class="bx {{ $item->icon }}"></i></div>
                                <h4><a href="">{{ $item->title }}</a></h4>
                            </div>
                        </div>

                        @if ($index % 2 == 1 || $index == $dataCase->count() - 1)
            </div>
            @endif
            @endforeach
            @endif
            </div>
        </section>
        <!-- End Study Case Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Features</h2>
                </div>

                <div class="row">
                    @if ($dataFeature->isEmpty())
                        <p>No data available</p>
                    @else
                        @foreach ($dataFeature as $index => $item)
                            @php
                                $colClass = $item->baris == 1 ? 'col-lg-6' : 'col-lg-4';
                                $delay = 100 * (($index % 4) + 1);
                            @endphp
                            <div class="{{ $colClass }} mt-4" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
                                <div class="member d-flex align-items-start">
                                    <div class="member-info">
                                        <h4>{{ $item->title }}</h4>
                                        {!! $item->desc !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- End Features Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricelist" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pricelist</h2>
                </div>

                <div class="row">
                    @if ($dataPrice->isEmpty())
                        <p>No data available</p>
                    @else
                        @foreach ($dataPrice as $index => $item)
                            <div class="col-lg-3 mt-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="box">
                                    <h3>{{ $item->title }}</h3>
                                    <h4>{!! $item->price !!}</h4>
                                    {!! $item->desc !!}
                                    <a href="{{ $item->link }}" class="buy-btn">Get Started</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->


        <!-- ======= Syarat Section ======= -->
        <section id="term" class="term section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Syarat & Kondisi</h2>
                    <p>
                        Kebijakan Privasi :
                    </p>
                    <p>
                        Selamat datang di website Proctor.Web.ID
                    </p>
                    <p>
                        Kebijakan ini mengatur penggunaan dan akses Anda ke platform kami. Dengan menggunakan
                        aplikasi ini, Anda dianggap telah membaca, memahami, dan menyetujui semua ketentuan
                        yang tercantum di bawah ini. Jika Anda tidak setuju dengan kebijakan ini, harap berhenti
                        menggunakan website/aplikasi kami.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Syarat Section -->

        <!-- ======= Akses dan Penggunaan Section ======= -->
        <section id="akses" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Akses dan Penggunaan</h2>
                </div>
                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Peserta
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Untuk mengakses teknologi proctoring kami, Anda harus mendaftar sebagai peserta pada
                                    penyelenggara yang terdaftar di dalam system. dengan mengikuti proses pendaftaran yang
                                    ditentukan. Informasi yang Anda berikan harus akurat, lengkap, dan terkini.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapse">Penggunaan yang
                                Sah
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Anda diperbolehkan menggunakan website ini untuk tujuan pribadi, non-komersial, dan
                                    sesuai dengan hukum yang berlaku. Dilarang menggunakan website/aplikasi kami untuk
                                    tujuan yang melanggar hukum, merugikan orang lain, atau melanggar hak kekayaan
                                    intelektual
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapse">Ketersediaan
                                Layanan
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-3" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Kami berupaya menjaga ketersediaan dan keandalan website kami. Namun, terkadang
                                    mungkin terjadi gangguan teknis atau pemeliharaan yang dapat memengaruhi aksesibilitas
                                    situs. Kami tidak bertanggung jawab atas kerugian atau gangguan yang disebabkan oleh
                                    ketidaktersediaan sementara.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Akses dan Penggunaan Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 888 1234 4321</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection
