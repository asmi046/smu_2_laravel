<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="{{route('home')}}" class="logo-icon header__logo">
                <img src="{{asset('img/logo-smu2.svg')}}" alt="">
			</a>

			<ul class="main-menu header__main-menu d-flex">
				<x-menu-puncts></x-menu-puncts>
			</ul>

			<a href="tel:+7{{phone_format(config('contacts.main_phone'))}}" class="header__phone">
				<svg width="11" height="25" viewBox="0 0 11 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<use xlink:href="#phone_sprite"></use>
				</svg>
				{{config('contacts.main_phone')}}</a>

			<button type="button" class="icon-menu" aria-label="Иконка бургера">
				<span></span>
				<span></span>
				<span></span>
			</button>

		</div>
</header>
