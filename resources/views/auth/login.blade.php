

<x-guest-layout>

    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />


                                <form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>
									</fieldset>
                                    <fieldset class="wrap-input">
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label for="remember_me" class="remember-field">
                                            <x-jet-checkbox class="frm-input " id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a  class="link-function left-position" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </fieldset>


                                        <x-jet-button class="btn btn-submit">
                                            {{ __('Log in') }}
                                        </x-jet-button>
                                </form>
							</div>
						</div>
					</div><!--end main products area-->
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>

</x-guest-layout>
