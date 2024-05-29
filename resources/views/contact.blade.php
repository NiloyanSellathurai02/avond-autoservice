<!doctype html>
<html lang="en" data-bs-theme="dark">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Contact Us – ProMotors – Car Service & Detailing Template</title>
    <link rel="shortcut icon" href="assets/images/site_logo/favourite_icon.svg">

    <!-- CSS import -->
    @include('partials.style_css');

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="fa-solid fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

      <!-- Site Header - Start
      ================================================== -->
      @include('partials.header')

      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Banner - Start
        ================================================== -->
        <section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
          <div class="container">
            <ul class="breadcrumb_nav unordered_list">
              <li><a href="index.html">Home</a></li>
              <li><a href="contact.html">Contacts</a></li>
            </ul>
            <h1 class="page_title wow" data-splitting>Contacts</h1>
          </div>
        </section>
        <!-- Page Banner - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="contact_info_box">
                  <h3 class="item_title">Address</h3>
                  <ul class="info_list unordered_list_block pe-lg-2">
                    <li>
                      <span class="info_text mb-3">
                        19 Frisk Drive, Middletown,nj, 3348  United States
                      </span>
                    </li>
                    <li>
                      <span class="info_text">
                        31 S Division Street, Montour,ia, 50133  United States
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact_info_box">
                  <h3 class="item_title">Office Hours</h3>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_text d-flex align-items-center justify-content-between">
                        <span>Monday - Thuesday</span>
                        <span>8 am - 8 pm</span>
                      </span>
                    </li>
                    <li>
                      <span class="info_text d-flex align-items-center justify-content-between">
                        <span>Friday</span>
                        <span>8 am - 6 pm</span>
                      </span>
                    </li>
                    <li>
                      <span class="info_text d-flex align-items-center justify-content-between">
                        <span>Saturday</span>
                        <span>9 am - 4 pm</span>
                      </span>
                    </li>
                    <li>
                      <span class="info_text d-flex align-items-center justify-content-between">
                        <span>Sunday</span>
                        <span>Closed</span>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact_info_box">
                  <h3 class="item_title">Customer Support</h3>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_text mb-3">
                        <span class="d-block">
                          <a href="tel:+8801680636189">+880 1680 6361 89</a>
                        </span>
                        <span class="d-block">
                          <a href="tel:+11234567890">+ 1 123 456-7890</a>
                        </span>
                      </span>
                    </li>
                    <li>
                      <span class="info_text">
                        <span class="d-block">
                          <a href="mailto:+8801680636189">promotors@email.com</a>
                        </span>
                        <span class="d-block">
                          <a href="mailto:+11234567890">contact@email.com</a>
                        </span>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-12">
                <div class="gmap_canvas">
                  <iframe src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      @include('partials.footer')

      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

<!-- Scripts JS -->
@include('partials.script')

  </body>
</html>
