@include('site.partials.mainPage.header')

<!-- Home Section -->
<section id="home" class="home">
    <div class="home-top-banner banner-1">
      {{-- <div id="particles-js"></div> --}}
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner-content banner-content-fullwidth">
                  <h3 class="wow slideInLeft">Hi, I'm</h3>
                  <h1 class="header-title-text type-animate wow slideInRight">
                    <a href="" class="typewrite" data-period="2000"
                      data-type='[ "Ali Rasouli", "Proffessional Web Developer", "Game Designer", "From IRAN" ]'>
                      <span class="wrap"></span> </a>&nbsp;
                  </h1>
                  <ul class="list-inline list-social">
                    <li>
                      <a href="#" class="social-icon social-icon-facebook" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="social-icon social-icon-twitter" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="social-icon social-icon-linkedin" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="social-icon social-icon-youtube" target="_blank">
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="social-icon social-icon-vimeo" target="_blank">
                        <i class="fab fa-vimeo-v"></i>
                        <i class="fab fa-vimeo-v"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="social-icon social-icon-pinterest" target="_blank">
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-pinterest-p"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End Home Section -->

<!-- About Me Section -->
<section id="about" class="about about-timeline-style">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-wrap wow zoomIn">
          <div class="section-title-box">
            <h2 class="section-title">About <strong>Me</strong></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-6">
            <div class="profile-image">
              <img src="{{ asset('site/images/profile/profile-image-1.jpg') }}" alt="Ali Rasouli Profile Photo" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-text">
              <p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like
                mine.
              </p>
              <p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart.
              </p>
              <p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like
                mine.
              </p>
              <p>
                I am so happy, my dear friend, so absorbed in the exquisite
                sense of mere tranquil existence, that I neglect my talents.
              </p>
              <div class="button-holder">
                <a class="btn btn-shutter-out-horizontal" href="#">Download Resume</a>
                <a class="btn btn-shutter-out-horizontal" href="#contact">Hire Me</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="nav-tab-menu">
          <ul class="nav nav-tabs" id="mgsAboutTab" role="tablist">
            <li>
              <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                role="tab" aria-controls="tab1" aria-selected="true">
                <i class="fas fa-paper-plane"></i>
                <span class="tab-title text-bold">Experience</span>
              </button>
            </li>
            <li>
              <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                role="tab" aria-controls="tab2" aria-selected="false">
                <i class="fas fa-graduation-cap"></i>
                <span class="tab-title text-bold">Education</span>
              </button>
            </li>
            <li>
              <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                role="tab" aria-controls="tab3" aria-selected="false">
                <i class="fas fa-trophy"></i>
                <span class="tab-title text-bold">Award</span>
              </button>
            </li>
            <li>
              <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                role="tab" aria-controls="tab4" aria-selected="false">
                <i class="fas fa-gem"></i>
                <span class="tab-title text-bold">Skills</span>
              </button>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <div class="icon-holder experience">
              <i class="fas fa-paper-plane"></i>
              <span class="tab-content-title text-bold">Experience</span>
            </div>
            <ul class="timeline">
              <li class="timeline-right">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date-inverted wow slideInLeft">
                    Dec 2019 - Current
                  </p>
                </div>
                <div class="timeline-panel wow slideInRight">
                  <div class="experience-content">
                    <h4>MGS PVT. LTD.</h4>
                    <h5>Creative Director</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-left">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date wow slideInRight">Oct 2018 - Nov 2019</p>
                </div>
                <div class="timeline-panel wow slideInLeft">
                  <div class="experience-content">
                    <h4>MGS PVT. LTD.</h4>
                    <h5>Senior Designer</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-right">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date-inverted wow slideInLeft">
                    Sep 2015 - Sep 2018
                  </p>
                </div>
                <div class="timeline-panel wow slideInRight">
                  <div class="experience-content">
                    <h4>MGS PVT. LTD.</h4>
                    <h5>Designer</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="icon-holder education">
              <i class="fas fa-graduation-cap"></i>
              <span class="tab-content-title text-bold">Education</span>
            </div>
            <ul class="timeline">
              <li class="timeline-left">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date">2014 - 2015</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>Master's Degree</h4>
                    <h5>College Name here</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-right">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date-inverted">2010 - 2014</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>Bachelor's Degree</h4>
                    <h5>Institute Name here</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-left">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date">2009 - 2010</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>School Education</h4>
                    <h5>School Name here</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <div class="icon-holder education">
              <i class="fas fa-trophy"></i>
              <span class="tab-content-title text-bold">Award</span>
            </div>
            <ul class="timeline">
              <li class="timeline-right">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date-inverted">May 2019</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>People Awards</h4>
                    <h5>Institute Name</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-left">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date">April 2018</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>People Awards</h4>
                    <h5>Institute Name</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-right">
                <div class="timeline-badge">
                  <i class="fas fa-calendar-alt"></i>
                  <p class="date-inverted">August 2017</p>
                </div>
                <div class="timeline-panel">
                  <div class="experience-content">
                    <h4>People Awards</h4>
                    <h5>Institute Name</h5>
                    <p>
                      The Big Oxmox advised her not to do so, because there
                      were thousands of bad Commas, wild Question Marks.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
            <div class="progressbar-wrap">
              <div class="row">
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="98.7" data-color="#04b962">
                      <div></div>
                      <p>HTML5</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="95.8" data-color="#04b962">
                      <div></div>
                      <p>CSS3</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="90.5" data-color="#04b962">
                      <div></div>
                      <p>PHP</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="78.2" data-color="#04b962">
                      <div></div>
                      <p>Jquery</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="70" data-color="#04b962">
                      <div></div>
                      <p>Laravel</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="80" data-color="#04b962">
                      <div></div>
                      <p>React Js</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Me Section -->

@include('site.partials.mainPage.footer')