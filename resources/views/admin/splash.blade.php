<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title> تسجيل الدخول | Login</title>
    <meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->


		<!--end::Page Custom Styles -->

		<!--begin::Page Vendors Styles(used by this page) -->


		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->


		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->



		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/admin/css/demo1/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('assets/admin/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />


		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{asset('assets/admin/media/logos/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
				{{-- style="background-image: url({{ $settings['back_ground'] }});background-size: cover;" --}} >

					<div class="container" style="padding-top: 80px;">
							<div class="row justify-content-md-center" style="text-align : center;">
                  <div class="col-lg-12 col-sm-12">
                      <div class="kt-demo-icon__preview">
    												<i class="flaticon-presentation-1" style="font-size: 120px;color : #1abc9c"></i>
    									</div>
                  </div>
              </div>
              <div class="row justify-content-md-center" style="text-align : center;">
								<div class="col-lg-12 col-sm-12">
									<span class="align-middle" style="font-size: 30px;color: #1abc9c;">{{ __('project.vision_all') }}</span>
								</div>
              </div>


              <div class="row justify-content-md-center" style="text-align : center;">
                <div class="col-lg-12 col-sm-12" style="padding: 20px;font-size: 20px;">{!! $visionAll['vision'.$genderLocal] !!}</div>
								<div class="col-lg-12 col-sm-12" style="padding: 20px;font-size: 20px;">{!! $visionAll['message'.$genderLocal] !!}</div>
								<div class="col-lg-12 col-sm-12" style="padding: 20px;font-size: 20px;">{!! $visionAll['values'.$genderLocal] !!}</div>
              </div>


              <div class="row justify-content-md-center" style="text-align : center;">
                <div class="col-lg-12 col-sm-12">
                  <a href="{{ route('admin.home')}}" class="btn btn-brand btn-pill kt-login__btn-primary" style="background-color: #74b934;padding: 15px 60px 15px 60px;border: none;">{{ __('project.skip') }}</a>
                </div>
              </div>
					</div>





					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper" style="padding-top: 40px;">
						<div class="kt-login__container">


						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->





		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('assets/admin/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('assets/admin/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>

		<script src="{{ asset('assets/admin/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>

		<script src="{{ asset('assets/admin/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>

		<script src="{{ asset('assets/admin/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset('assets/admin/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>






		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{asset('assets/admin/vendors/global/vendors.bundle.js')}}" type="text/javascript"></script>


		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{asset('assets/admin/js/demo1/pages/login/login-general.js')}}" type="text/javascript"></script>


		<script src="{{asset('assets/admin/js/demo1/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/admin/js/demo1/pages/components/extended/toastr.js')}}" type="text/javascript"></script>

		<x-FlashAlertJs/>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
