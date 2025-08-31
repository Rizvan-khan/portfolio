<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$setting->title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('uploads/logo/' . $setting->logo) }}" rel="icon">
  <link href="{{asset('theme/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/" rel="preconnect">
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('theme/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('theme/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    @foreach ($personal as $alldata)
      
   
    <div class="profile-img">
      <img src="{{$alldata->image}}" alt="" class="img-fluid rounded-circle">
    </div>
 @endforeach
    <a href="dashboard" class="logo d-flex align-items-center justify-content-center">
    
      <h1 class="sitename">Rizvan Khan</h1>
    </a>

    <div class="social-links text-center">
      
      <a href="{{$setting->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="{{$setting->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
      
      <a href="{{$setting->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Dashboard</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
      
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
 @foreach ($personal as $all)
      <img src="{{$all->image}}" alt="" data-aos="fade-in" class="">
@endforeach
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Rizvan Khan</h2>
        <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Laravel">Laravel Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{$about->heading}}</h2>
        <p> {{$about->about}}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($personal as $personal)
          
       
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{$personal->image}}" class="img-fluid" alt="{{$personal->designation}}">
          </div>



          <div class="col-lg-8 content">
            <h2>{{$personal->designation}}</h2>
            <p class="fst-italic py-3">
             {{$personal->paragraph}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span> {{ \Carbon\Carbon::parse($personal->dob)->format('d F Y') }}
</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span> {{$personal->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span> {{$personal->mobile}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span> {{$personal->city}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span> {{$personal->age}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span> {{$personal->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span> {{$personal->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
           
          </div>
        </div>
 @endforeach
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
    @foreach ($counter as $counter)
      
    
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0"  
               data-purecounter-end="{{(int)$counter->client ?? 0}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Client</strong> <span></span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0"   data-purecounter-suffix="+" data-purecounter-end="{{ (int) $counter->project ?? 0 }}"
 data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>Completed</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ (int) $counter->support ?? 0}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>Available</span></p>
            </div>
          </div><!-- End Stats Item -->


        </div>
@endforeach
      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>This is my Skills Section</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">



          <div class="col-lg-6">
            @foreach ($data as $language)
              
           
            <div class="progress">
              <span class="skill"><span>{{$language->language}}</span> <i class="val">{{$language->percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->
 @endforeach
          

          </div>

          <div class="col-lg-6">
           @foreach ($data5rows as $language)
            <div class="progress">
              <span class="skill"><span>{{ $language->language }}</span> <i class="val">{{ $language->percentage }}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            @endforeach

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>I am a good service provider on pan india.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

        @foreach ($service as $service)
          
      

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">{{$service->name}}</a></h4>
              <p class="description">{{$service->paragraph}}</p>
            </div>
          </div>
            @endforeach
          <!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What Our Client Says</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

          @foreach ($testimonial as $testi)
            
         

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{$testi->review}}</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>{{$testi->name}}</h3>
                <h4>{{$testi->profile}}</h4>
              </div>
            </div><!-- End testimonial item -->
 @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>You Can Contact with me.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>{{$setting->address}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>{{$setting->mobile}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>{{$setting->email}}</p>
                </div>
              </div><!-- End Info Item -->
             {!! $setting->map !!}
              </div>
          </div>

          <div class="col-lg-7">
            <form action="{{ route('contact.store') }}"  method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            @csrf  
            <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Rizvan Khan Portfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
      
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('theme/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('theme/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from themewagon.github.io/iPortfolio/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Aug 2025 18:40:57 GMT -->
</html>