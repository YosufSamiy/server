<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="slaider, Our Sections &amp; Services, Our Sections &amp; Services, Business Center">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>الرئيسة</title>
    <link rel="stylesheet" href="{{asset('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('home.css')}}" media="screen">
<!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script class="u-script" type="text/javascript" src="{{asset('jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    @if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif

    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{asset('assets/images/logoo.png')}}",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="الرئيسة">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="الرئيسة">
    <meta property="og:type" content="website">
    <link rel="icon" href="{{asset('assets/images/logoo.png')}}">

  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-02f2"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('homee')}}" class="u-image u-logo u-image-1" data-image-width="376" data-image-height="376">
          <img src="{{asset('assets/images/logoo.png')}}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="{{route('homee')}}" style="padding: 10px 20px;">{{ trans('sections.sections.home') }}</a>
</li>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px;" href="#servics">{{ trans('sections.sections') }}</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">a1</a>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-white">a2</a></li>
</ul>
</div>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px; " href="#partners" >{{ trans('sections.Partners') }}</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px;"> {{ trans('sections.ouer-Services') }}</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="{{route('about')}}" style="padding: 10px 20px;"> {{ trans('sections.about-us') }}</a>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="#contact-us" style="padding: 10px 20px;"> {{ trans('sections.contact-us') }}</a></li>
</li>
<li  class="u-nav-item">
<div class="btn-group mb-1">
    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if (App::getLocale() == 'ar')
      {{ LaravelLocalization::getCurrentLocaleName() }}
     <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
      @else
      {{ LaravelLocalization::getCurrentLocaleName() }}
      <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
      @endif
      </button>
    <div class="dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
        @endforeach
    </div>
</div>
</li>
</ul>

              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <section class="u-align-center u-clearfix u-custom-color-2 u-section-3" id="sec-045a">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
          {{-- <h1 class="u-text u-text-default u-text-palette-1-base u-text-1" id="partners">{{ trans('sections.sections') }}&nbsp;</h1> --}}
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              
              
            </div>
          </div>
        </div>


      </section>
    

     
    <section class="u-align-center u-clearfix u-section-4" id="sec-d678">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-1" id="contact-us">{{ trans('sections.contact-us') }} &nbsp;</h2>
                      <p class="u-text u-text-2">350 5th Ave, New York, NY 10118</p>
                      <p class="u-text u-text-3">1 212-736-3100</p>
                      <p class="u-text u-text-4">contacts@esbnyc.com</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                      <div class="u-form u-form-1">
                        <form action="{{route('Partners.store')}}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form-5">
                       @csrf
                          <div class="u-form-group u-form-name u-form-group-1">
                            <label for="name-5359" class="u-form-control-hidden u-label">Name</label>
                            <input type="text" placeholder="Name"  name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group u-form-group-2">
                            <label for="email-5359" class="u-form-control-hidden u-label">Email</label>
                            <input type="email" placeholder="Email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-form-phone u-form-group-3">
                            <label for="phone-2488" class="u-form-control-hidden u-label"></label>
                            <input type="tel"  placeholder="Enter your phone (e.g. +14155552675)"  name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-form-message u-form-group-4">
                            <label for="message-5359" class="u-form-control-hidden u-label">Address</label>
                            <textarea name="topic" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required=""></textarea>
                          </div>
                          <div class="form-group tm-text-right">
                            <button type="submit" class="btn btn-primary"  >Send</button>
                        </div>
                          {{-- <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                          <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                          <input type="hidden" value="" name="recaptchaResponse"> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <div class="u-expanded u-grey-light-2 u-map">
                        <div class="embed-responsive">
                          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan%2C%20New%20York&amp;z=10&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQSUyMiUyMiU3RA=="></iframe>
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
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f3fd"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">جميع الحقوق محفظة لدى شركة كليك&nbsp;</p>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.196 112.196" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-194c"></use></svg><svg class="u-svg-content" viewBox="0 0 112.196 112.196" x="0px" y="0px" id="svg-194c" style="enable-background:new 0 0 112.196 112.196;"><g><circle style="fill:currentColor;" cx="56.098" cy="56.098" r="56.098"></circle><path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
</g></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.197 112.197" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-037f"></use></svg><svg class="u-svg-content" viewBox="0 0 112.197 112.197" x="0px" y="0px" id="svg-037f" style="enable-background:new 0 0 112.197 112.197;"><g><circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"></circle><g><path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"></path>
</g>
</g></svg></span>
          </a>
          <a class="u-social-url" target="_blank" title="Instagram" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7eb4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7eb4"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" title="LinkedIn" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0e51"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0e51"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" title="Pinterest" href=""><span class="u-icon u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7a74"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7a74"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M61.1,76.9c-4.7-0.3-6.7-2.7-10.3-5c-2,10.7-4.6,20.9-11.9,26.2c-2.2-16.1,3.3-28.2,5.9-41
            c-4.4-7.5,0.6-22.5,9.9-18.8c11.6,4.6-10,27.8,4.4,30.7C74.2,72,80.3,42.8,71,33.4C57.5,19.6,31.7,33,34.9,52.6
            c0.8,4.8,5.8,6.2,2,12.9c-8.7-1.9-11.2-8.8-10.9-17.8C26.5,32.8,39.3,22.5,52.2,21c16.3-1.9,31.6,5.9,33.7,21.2
            C88.2,59.5,78.6,78.2,61.1,76.9z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>