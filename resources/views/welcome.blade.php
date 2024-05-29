<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Avond Autoservice</title>
    <link rel="shortcut icon" href="{{ asset('/images/site_logo/logo_blue.svg') }}">

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

      <!-- Site Header - Start -->
      @include('partials.header')
      <!-- Site Header - End -->

      <!-- Hero Section - Start -->
      <section class="hero_section hero_section_3">
        <div class="container">
          <div class="row justify-content-lg-between">
            <div class="col-lg-5">
              <div class="hero_section_content">
                <h1 class="hero_title wow" data-splitting>Welkom bij Avond Autoservice</h1>
                <p>
                  Rijd zorgeloos, wij doen de rest. Uw vertrouwde autogarage voor elk kilometer.
                </p>
                <a class="btn btn-primary" href="service_details.html">
                  <span class="btn_text">Ontdek onze diensten</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="recommendations_area">
                <h2 class="area_title">Recommendations</h2>
                <div class="workprocess_item">
                  <h3 class="item_title">
                    <span class="serial_number">01</span>
                    <span class="title_text">Interim Service</span>
                  </h3>
                  <p class="mb-0 p-0">
                    Every 6 months or 6,000 miles (whichever comes first)
                  </p>
                </div>
                <div class="workprocess_item">
                  <h3 class="item_title">
                    <span class="serial_number">02</span>
                    <span class="title_text">Full Service</span>
                  </h3>
                  <p class="mb-0 p-0">
                    Every 12 months or 12,000 miles (whichever comes first)
                  </p>
                </div>
              </div>
              <div class="video_wrap text-center" style="background-image: url('{{ asset('/images/video/video_poster_7.jpg') }}');">
                <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                  <i class="fa-duotone fa-play"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="hero_section_image">
            <img src="{{ asset('/images/hero/hero_image_3.png') }}" alt="ProMotors Car Service Image">
            <map name="image_map">
              <area target="_blank" data-text="Car Front Cover" alt="Hello" href="#!" coords="106,307,228,302,346,307,374,321,378,359,372,391,322,423,132,418,110,415,92,370" shape="poly">
              <area target="_blank" data-text="Car Front Glass" alt="Hello 2" href="#!" coords="434,210,522,138,620,84,768,56,961,64,902,130,852,204" shape="poly">
              <area target="_blank" data-text="Car Oil Gate Cover" alt="Hello 3" href="#!" coords="1418,240,1457,239,1464,263,1465,296,1426,295,1416,270" shape="poly">
              <area target="_blank" data-text="Car Door" alt="Hello 4" href="#!" coords="1191,483,985,507,950,495,926,476,897,218,938,126,1015,66,1105,56,1123,61,1151,134,1196,258" shape="poly">
              <area target="_blank" data-text="Alloy Wheels" alt="Hello 5" href="#!" coords="719,462,776,433,838,465,856,560,829,641,765,683,688,606,690,520" shape="poly">
            </map>
          </div>
        </div>
        <div class="outline_text" data-parallax='{"x" : 200, "smoothness": 8}'>Promotors</div>
      </section>
      <!-- Hero Section - End -->

      <!-- Brand Logo Section - Start -->
      <div class="brand_logo_section text-center">
        <div class="brand_logo_carousel brand_logo_blur_effect row align-items-center" data-slick='{"dots":false, "arrows": false}'>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_1.png') }}" alt="ProMotors - TOYOTA Logo">
            </a>
          </div>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_2.png') }}" alt="ProMotors - Ford Logo">
            </a>
          </div>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_3.png') }}" alt="ProMotors - DODGE Logo">
            </a>
          </div>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_4.png') }}" alt="ProMotors - JAGUAR Logo">
            </a>
          </div>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_7.png') }}" alt="ProMotors - HONDA Logo">
            </a>
          </div>
          <div class="col-">
            <a class="brand_logo_item" href="#!">
              <img src="{{ asset('/images/brands/brand_logo_img_6.png') }}" alt="ProMotors - BMW Logo">
            </a>
          </div>
        </div>
      </div>
      <!-- Brand Logo Section - End -->

      <!-- About Section - Start -->
      <section class="about_section section_space_lg pb-0">
        <div class="container">
          <div class="section_heading text-center">
            <h2 class="heading_text wow mb-0" data-splitting>
              Auto Care, It's What We're All About
            </h2>
          </div>

          <ul class="nav tab_nav unordered_list_center" role="tablist">
            <li role="presentation">
              <button class="active" data-bs-toggle="tab" data-bs-target="#tab_cooling_system" type="button" role="tab" aria-selected="true">
                <span class="btn_icon">
                  <img src="{{ asset('/images/icons/icon_oil.svg') }}" alt="ProMotors - Cooling System Icon">
                </span>
                <span class="btn_text">
                  Cooling System
                </span>
              </button>
            </li>
            <li role="presentation">
              <button data-bs-toggle="tab" data-bs-target="#tab_tire_repair" type="button" role="tab" aria-selected="false">
                <span class="btn_icon">
                  <img src="{{ asset('/images/icons/icone_tire.svg') }}" alt="ProMotors - Tire Repair Icon">
                </span>
                <span class="btn_text">
                  Tire Repair
                </span>
              </button>
            </li>
            <li role="presentation">
              <button data-bs-toggle="tab" data-bs-target="#tab_steering_repair" type="button" role="tab" aria-selected="false">
                <span class="btn_icon">
                  <img src="{{ asset('/images/icons/icon_break.svg') }}" alt="ProMotors - Steering Repair Icon">
                </span>
                <span class="btn_text">
                  Steering Repair
                </span>
              </button>
            </li>
            <li role="presentation">
              <button data-bs-toggle="tab" data-bs-target="#Tab_engine_repair" type="button" role="tab" aria-selected="false">
                <span class="btn_icon">
                  <img src="{{ asset('/images/icons/icon_steering.svg') }}" alt="ProMotors - Engine Repair Icon">
                </span>
                <span class="btn_text">
                  Engine Repair
                </span>
              </button>
            </li>
          </ul>
          <div class="tab-content" style="background-image: url('{{ asset('/images/shapes/tyre_print_5.svg') }}');">
            <div class="tab-pane fade show active" id="tab_cooling_system" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="item_content">
                    <h3 class="title_text">Flat Tire Repair, Tire Patches, And More</h3>
                    <p>
                      Amet commodo nulla facilisi nullam vehicula. Purus in mollis nunc sed. Accumsan tortor posuere ac ut consequat semper viverra nam
                    </p>
                    <h4 class="list_title">Whats Included:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Repair & Patching/Plug</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Rotations & Balancing</span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Replacement</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Flat Repair</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item_image">
                    <img src="{{ asset('/images/products/tab_image_1.png') }}" alt="ProMotors - Tire Image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab_tire_repair" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="item_content">
                    <h3 class="title_text">Flat Tire Repair, Tire Patches, And More</h3>
                    <p>
                      Amet commodo nulla facilisi nullam vehicula. Purus in mollis nunc sed. Accumsan tortor posuere ac ut consequat semper viverra nam
                    </p>
                    <h4 class="list_title">Whats Included:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Repair & Patching/Plug</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Rotations & Balancing</span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Replacement</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Flat Repair</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item_image">
                    <img src="{{ asset('/images/products/tab_image_1.png') }}" alt="ProMotors - Tire Image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab_steering_repair" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="item_content">
                    <h3 class="title_text">Flat Tire Repair, Tire Patches, And More</h3>
                    <p>
                      Amet commodo nulla facilisi nullam vehicula. Purus in mollis nunc sed. Accumsan tortor posuere ac ut consequat semper viverra nam
                    </p>
                    <h4 class="list_title">Whats Included:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>


 <span class="info_text">Tire Repair & Patching/Plug</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Rotations & Balancing</span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Replacement</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Flat Repair</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item_image">
                    <img src="{{ asset('/images/products/tab_image_1.png') }}" alt="ProMotors - Tire Image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Tab_engine_repair" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="item_content">
                    <h3 class="title_text">Flat Tire Repair, Tire Patches, And More</h3>
                    <p>
                      Amet commodo nulla facilisi nullam vehicula. Purus in mollis nunc sed. Accumsan tortor posuere ac ut consequat semper viverra nam
                    </p>
                    <h4 class="list_title">Whats Included:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Repair & Patching/Plug</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Rotations & Balancing</span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="info_list unordered_list_block text-uppercase">
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Tire Replacement</span>
                          </li>
                          <li>
                            <span class="info_icon">
                              <i class="fa-light fa-minus"></i>
                            </span>
                            <span class="info_text">Flat Repair</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item_image">
                    <img src="{{ asset('/images/products/tab_image_1.png') }}" alt="ProMotors - Tire Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Section - End -->

      <!-- Work Process Section - Start -->
      <section class="workprocess_section section_space_lg pb-0">
        <div class="container">
          <div class="row justify-content-lg-between">
            <div class="col-lg-4">
              <div class="section_heading">
                <h2 class="heading_text wow mb-lg-0" data-splitting>We keep your vehicle driving</h2>
                <p class="heading_description mb-0 d-lg-none">
                  Fringilla urna porttitor rhoncus dolor purus non enim praesent. Faucibus nisl tincidunt eget nullam non nisi est sit amet. Morbi blandit cursus risus at. Sit amet facilisis magna etiam. Sit amet venenatis urna cursus
                </p>
              </div>
              <div class="workprocess_item">
                <h3 class="item_title">
                  <span class="serial_number">01</span>
                  <span class="title_text">Select service</span>
                </h3>
                <p class="mb-0">
                  Tempor id eu nisl nunc mi ipsum faucibus. Ac feugiat sed lectus vestibulum
                </p>
              </div>
              <div class="workprocess_item">
                <h3 class="item_title">
                  <span class="serial_number">02</span>
                  <span class="title_text">make an appointment</span>
                </h3>
                <p class="mb-0">
                  Pretium quam vulputate dignissim suspendisse in est ante
                </p>
              </div>
              <div class="workprocess_item">
                <h3 class="item_title">
                  <span class="serial_number">03</span>
                  <span class="title_text">get your car</span>
                </h3>
                <p class="mb-0">
                  Faucibus ornare suspendisse sed nisi lacus sed viverra tellus pretium viverra
                </p>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="section_heading">
                <p class="heading_description d-none d-lg-block">
                  Fringilla urna porttitor rhoncus dolor purus non enim praesent. Faucibus nisl tincidunt eget nullam non nisi est sit amet. Morbi blandit cursus risus at. Sit amet facilisis magna etiam. Sit amet venenatis urna cursus
                </p>
                <div class="funfact_wrapper bg_primary">
                  <div class="funfact_item d-flex">
                    <div class="counter_value">
                      <span class="odometer" data-count="500">0</span>
                      <span>+</span>
                    </div>
                    <p class="counter_description mb-0">
                      Happy Clients commodo amet
                    </p>
                  </div>
                  <div class="funfact_item d-flex">
                    <div class="counter_value">
                      <span class="odometer" data-count="99">0</span>
                      <span>%</span>
                    </div>
                    <p class="counter_description mb-0">
                      Customer Satisfaction
                    </p>
                  </div>
                </div>
              </div>
              <div class="image_widget">
                <img src="{{ asset('/images/about/about_image_4.jpg') }}" alt="ProMotors - About Image">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Work Process Section - End -->

      <!-- Testimonial Section - Start -->
      <section class="testimonial_section section_space_sm">
        <div class="container">
          <div class="section_heading">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="outline_text">Wat klanten zeggen:</div>
                <h2 class="heading_text mb-0 wow" data-splitting>Recensies</h2>
              </div>
              <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                <ul class="carousel_arrow unordered_list">
                  <li>
                    <button type="button" class="c3c_arrow_left">
                      <i class="fa-regular fa-angle-left"></i>
                      <i class="fa-regular fa-angle-left"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="c3c_arrow_right">
                      <i class="fa-regular fa-angle-right"></i>
                      <i class="fa-regular fa-angle-right"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="testimonial_carousel">
            <div class="testimonial_item_boxed carousel_3col row" data-slick='{"dots": false}'>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">Much satisfied with promotors</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    My car was not used for a long time. The AC of the car started blowing dust from its vents. I booked my service with Lorem and they told lorem me the air filter
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Aaron Almaraz</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">First-class Service</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    Dis parturient montes nascetur ridiculus mus mauris. Tincidunt ornare massa eget egestas purus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Julie Feest</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">Highly Recommended</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    Volutpat diam ut venenatis tellus in. Commodo odio aenean sed adipiscing diam donec. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Elementum facilisis
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Derrick Kohler</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">Much satisfied with promotors</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    My car was not used for a long time. The AC of the car started blowing dust from its vents. I booked my service with Lorem and they told lorem me the air filter
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Aaron Almaraz</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">First-class Service</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    Dis parturient montes nascetur ridiculus mus mauris. Tincidunt ornare massa eget egestas purus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Julie Feest</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="testimonial_item bg-transparent">
                  <h3 class="item_title">
                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                    <span class="title_text">Highly Recommended</span>
                  </h3>
                  <p class="testimonial_content mb-0">
                    Volutpat diam ut venenatis tellus in. Commodo odio aenean sed adipiscing diam donec. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Elementum facilisis
                  </p>
                  <div class="admin_wrap">
                    <h4 class="admin_name">Derrick Kohler</h4>
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="btn_wrap text-center d-lg-none d-block">
            <ul class="carousel_arrow unordered_list_center">
              <li>
                <button type="button" class="c3c_arrow_left">
                  <i class="fa-regular fa-angle-left"></i>
                  <i class="fa-regular fa-angle-left"></i>
                </button>
              </li>
              <li>
                <button type="button" class="c3c_arrow_right">
                  <i class="fa-regular fa-angle-right"></i>
                  <i class="fa-regular fa-angle-right"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Testimonial Section - End -->

      <!-- Contact Section - Start -->
      <section class="contact_section section_space_sm">
        <div class="container">
          <div class="section_heading">
            <h3 class="heading_text mb-0 wow" data-splitting>Contact</h3>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="contact_info_box">
                <h3 class="item_title">Adres</h3>
                <ul class="info_list unordered_list_block pe-lg-2">
                  <li>
                    <span class="info_text mb-3">
                      Markerkant 12 29, 1314 AJ Almere
                    </span>
                  </li>
                  <li>
                    <span class="info_text mb-3">
                      <span class="d-block">
                        <a href="tel:+06 39565379"> Tel +06 39565379</a>
                      </span>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact_info_box">
                <h3 class="item_title">Openingstijden overdag</h3>
                <ul class="info_list unordered_list_block">
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Maandag - Vrijdag</span>
                      <span>9:00 - 17:00 </span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Zaterdag</span>
                      <span>Op afspraak</span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Zondag</span>
                      <span>Gesloten</span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Feestdagen*</span>
                      <span>Op afspraak</span>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact_info_box">
                <h3 class="item_title">Openingstijden 's avonds</h3>
                <ul class="info_list unordered_list_block">
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Maandag - Vrijdag</span>
                      <span>20:00 - 22:00 </span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Zaterdag</span>
                      <span>Op afspraak</span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between"><span>Zondag</span>
                      <span>Gesloten</span>
                    </span>
                  </li>
                  <li>
                    <span class="info_text d-flex align-items-center justify-content-between">
                      <span>Feestdagen*</span>
                      <span>Op afspraak</span>
                    </span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-12">
              <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=Avond+Auto+Service,+Markerkant+12+29,+1314+AJ+Almere,+Netherlands&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Section - End -->

      <!-- Site Footer - Start -->
            @include('partials.footer')
      <!-- Site Footer - End -->
    </div>
    <!-- Body Wrap - End -->

    <!-- Scripts JS -->
    @include('partials.script')

  </body>
</html>
