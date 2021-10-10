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
		<link href="{{asset('assets/admin/css/demo1/pages/login/login-4.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('assets/admin/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('assets/admin/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('assets/admin/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/admin/css/demo1/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

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
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ $settings['back_ground'] }});background-size: cover;background-repeat: no-repeat;background-position-x: center;background-attachment: fixed;webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;height: 100%;width: 100%;">

					<!-- 01 -->
					{{--
					<div class="container" style="padding-top: 80px;">
							<div class="row justify-content-md-center" style="text-align : center;">
								<div class="col col-lg-2">
									<img  style="width: 100%; height:auto" src="{{asset('storage/app/settings/royaa_logo.png')}}">
								</div>
								<div class="col col-lg-8">
									<span class="align-middle" style="font-size: 2.4vw;color: white;">المملكة العربية السعودية</span>
									<br>
									<span class="align-middle" style="font-size: 1.7vw;color: white;">وزارة التعليم</span>
								</div>
								<div class="col col-lg-2">
									<img  style="width: 100%; height:auto" src="{{asset('storage/app/settings/edu_logo.png')}}">
								</div>
							</div>
					</div>
					--}}

					<!-- 02 -->
					{{--
					<div class="container" style="padding-top: 10px;">
							<div class="row justify-content-md-center" style="text-align : center;">

								<div class="col col-lg-12">
									<span style="font-size: 20px;color: white;">{{ $settings['app_title'] }}</span>
								</div>

							</div>
					</div>
					--}}


					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper" style="padding-top: 350px;">
						<div class="kt-login__container" >

							{{--
							<div class="kt-login__logo">
                <a href="#">
								    @inject('Setting','App\Setting')
									<img  style="width:400px; height:219px" src="{{asset('Upload/Setting/'.$Setting->find(1)->img)}}">
								</a>
							</div>
							--}}


							<x-FlashAlert/>


							<div class="kt-login__signin">
								{{--
								<div class="kt-login__head">
									<h3 class="kt-login__title" style="font-size: 25px;color: white;">{{ $settings['app_title'] }}{{ __('auth.login') }}</h3>
								</div>
								--}}

								<!-- 02 -->
								<div class="kt-login__logo">
									{{--
	                <a href="#">
										<img  style="width:auto; height:100px" src="{{ $settings['logo'] }}">
									</a>
									--}}
								</div>

								<div class="kt-login__head" style="padding: 10px;color: #13c3c8;font-size: 20px;background-color: white;border-radius: 15px;margin-top: 0px !important;margin-bottom: 0px !important;">
									<!-- <x-admin.LanguageBar currentView='notInBar'/> -->
									تسجيل الدخول
								</div>

                <form  class="kt-form" method="POST" action="{{ route('admin.login') }}"
								style="direction: rtl;padding: 10px;border-radius: 12px;background-color: #02989c;">
                    @csrf

									{{--
									<div class="input-group">
                    <input id="email" type="email" placeholder="{{ __('words.email') }}" autocomplete="off"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
									</div>
									--}}


									<div class="input-group">
										<input id="user_name" type="text" placeholder="{{ __('user.user_name') }}" autocomplete="off"  class="form-control @error('user_name') is-invalid @enderror"
										name="user_name" value="{{ old('user_name') }}" required autofocus style="background-color: white;">
										@error('user_name')
												<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
										@enderror
									</div>


									<div class="input-group">
                    <input id="password" type="password" placeholder="{{ __('words.password') }}" class="form-control @error('password') is-invalid @enderror" name="password"
										required autocomplete="current-password" autofocus style="background-color: white;">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

									</div>

									{{--
									<div class="kt-login__actions">
										<x-recaptcha._field/>
									</div>
									--}}

									<div class="kt-login__actions">
										<button  type="submit" class="btn btn-brand btn-pill kt-login__btn-primary" style="background-color: #075557;padding: 15px 160px 15px 160px;border: none;">{{ __('auth.login') }} </button>
									</div>


									<div class="row kt-login__extra">

										<div class="col-lg-6">
											<label class="kt-checkbox" style="color: white;">
												<input type="checkbox" name="remember">{{ __('auth.remember_me') }}<span></span>
											</label>
										</div>

										<div class="col-lg-6"><a href="{{ route('password.email.request') }}" style="color: #fff">{{ __('auth.forgot_password_question') }} </a></div>
										<div class="col-lg-12" style="color: #beffce;">&nbsp;{{ $settings['phone_1'] }} &nbsp;-&nbsp;{{ $settings['mail'] }}</div>

									</div>


								</form>
							</div>


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
		<script src="{{ asset('assets/admin/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('assets/admin/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/admin/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
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

		<x-recaptcha.js/>

		<x-FlashAlertJs/>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
