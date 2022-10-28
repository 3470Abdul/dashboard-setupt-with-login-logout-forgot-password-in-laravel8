@extends('layouts.app')

@section('content')

        <!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<h4>LTR AND RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">LTR</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch54" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
												<label for="myonoffswitch55" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft switcher-nav">
								<h4>Navigation Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Vertical Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch34" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizantal Click Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
												<label for="myonoffswitch35" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizantal Hover Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
												<label for="myonoffswitch111" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Primary</span>
											<div class="">
												<input class="wd-25 ht-25 input-color-picker color-primary-light" value="#0162e8" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Primary</span>
											<div class="">
												<input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#0162e8" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"  data-id8="transparentcolor" name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2 mb-3">
											<span class="me-auto">Transparent Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox" >
												<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto">Transparent Primary</span>
											<div class="">
												<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#0162e8" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Background</span>
											<div class="">
												<input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#0162e8" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme"  data-id9="transparentcolor" name="transparentBackground">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Bg-Image Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">BG-Image Primary</span>
											<div class="">
												<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#0162e8" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
											</div>
										</div>
										<div class="switch-toggle">
											<a class="bg-img1 bg-img" href="javascript:void(0);"><img src="../assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
											<a class="bg-img2 bg-img" href="javascript:void(0);"><img src="../assets/img/media/bg-img2.jpg"  id="bgimage2" alt="switch-img"></a>
											<a class="bg-img3 bg-img" href="javascript:void(0);"><img src="../assets/img/media/bg-img3.jpg"  id="bgimage3" alt="switch-img"></a>
											<a class="bg-img4 bg-img" href="javascript:void(0);"><img src="../assets/img/media/bg-img4.jpg"  id="bgimage4" alt="switch-img"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft horizontal-styles">
								<h4>Leftmenu Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Default Horizontal</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch03" class="onoffswitch2-checkbox"  checked>
												<label for="myonoffswitch03" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizontal Centerlogo</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch04" class="onoffswitch2-checkbox">
												<label for="myonoffswitch04" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft leftmenu-styles">
								<h4>Leftmenu Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox"  checked>
												<label for="myonoffswitch3" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
												<label for="myonoffswitch4" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
												<label for="myonoffswitch5" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Gradient Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
												<label for="myonoffswitch25" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft header-styles">
								<h4>Header Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox"  checked>
												<label for="myonoffswitch6" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
												<label for="myonoffswitch7" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
												<label for="myonoffswitch8" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Gradient Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
												<label for="myonoffswitch26" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft vertical-images">
								<h4>Leftmenu Bg-Image</h4>
								<div class="skin-body light-pattern">
									<button type="button" id="leftmenuimage1" class="bg1 wscolorcode1 blackborder"></button>
									<button type="button" id="leftmenuimage2" class="bg2 wscolorcode1 blackborder"></button>
									<button type="button" id="leftmenuimage3" class="bg3 wscolorcode1 blackborder"></button>
									<button type="button" id="leftmenuimage4" class="bg4 wscolorcode1 blackborder"></button>
									<button type="button" id="leftmenuimage5" class="bg5 wscolorcode1 blackborder"></button>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout Width Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Full Width</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Boxed</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
												<label for="myonoffswitch10" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft switcher-layout">
								<h4>Layout Positions</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Fixed</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch11" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Scrollable</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
												<label for="myonoffswitch12" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft vertical-switcher">
								<h4>Sidemenu layout Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Default Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
												<label for="myonoffswitch13" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Closed Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
												<label for="myonoffswitch30" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon with Text</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
												<label for="myonoffswitch14" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon Overlay</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
												<label for="myonoffswitch15" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
												<label for="myonoffswitch32" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu style 1</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
												<label for="myonoffswitch33" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block" id="resetAll"
											type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->
        <!-- Page -->
		<div class="page">

			<div class="d-flex">
				<a class="demo-icon new nav-link" href="javascript:void(0);"> <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs fa-spin" width="24" height="24"
						viewBox="0 0 24 24">
						<path
							d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
						</path>
						<path
							d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
						</path>
					</svg>
				</a>
			</div>


			<div class="main-container container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="{{ url('../assets/img/media/forgot.png') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="mb-5 d-flex">
											<a href="{{ url('password/reset') }}"><img src="{{ url('../assets/img/brand/favicon.png') }}" class="sign-favicon-a ht-40" alt="logo">
											<img src="{{ url('../assets/img/brand/favicon-white.png') }}" class="sign-favicon-b ht-40" alt="logo">
											</a>
											<h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Va<span>le</span>x</h1>
										</div>
											<div class="main-card-signin d-md-flex">
											<div class="wd-100p">
												<div class="main-signin-header">
                                                    <h2>Setup New Pasword!</h2>
                                                    @if (session('resetPasswordMessage'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{ session('resetPasswordMessage') }}
                                                        </div>
                                                    @endif
                                                    @if (session('status'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif
													<form method="POST" action="{{ url('resetPasswordSet') }}">
                                                        @csrf
                                                        <div class="form-group">
															<label>{{ __('Your E-Mail Address') }}</label>
                                                            <input id="email" type="text" class="form-control @error('email') border-danger is-invalid @enderror" name="email" value="{{ Request::old('email') }}" autocomplete="email" readonly>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
														<div class="form-group">
															<label>{{ __('Your 6 digits OTP') }}</label>
                                                            <input id="otp" type="text" class="form-control @error('otp') border-danger is-invalid @enderror" name="otp" value="{{ Request::old('otp') }}" readonly>
                                                            @error('otp')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
                                                        <div class="form-group">
                                                            <label>{{ __('Enter New Password') }}</label>
                                                            <input id="password" type="password" class="form-control @error('password') border-danger is-invalid @enderror" name="password" value="{{ Request::old('password') }}" placeholder="Enter New Password" autocomplete="new-password" required autofocus>

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                                            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') border-danger is-invalid @enderror" name="password_confirmation" value="{{ Request::old('password_confirmation') }}" placeholder="Enter Confirm Password" autocomplete="new-password" required autofocus>
                                                            @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-main-primary btn-block">
                                                                {{ __('Save Password') }}
                                                            </button>
                                                        </div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
			</div>


        </div>
		<!-- End Page -->


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
