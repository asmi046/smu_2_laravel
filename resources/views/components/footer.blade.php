<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__top">

			<div class="footer__column">
				<h3 class="footer__title">Резвизиты</h3>
				<ul class="footer__menu">
					<li class="footer__menu-item">{{config('contacts.company_name')}}</li>
					<li class="footer__menu-item">ИНН: {{config('contacts.inn')}}</li>
					<li class="footer__menu-item">КПП: {{config('contacts.kpp')}}</li>
					<li class="footer__menu-item">ЮР.АДРЕС: {{config('contacts.bank')}}</li>
					<li class="footer__menu-item">Банк: {{config('contacts.bik')}}</li>
					<li class="footer__menu-item">БИК: {{config('contacts.bik')}}</li>
					<li class="footer__menu-item">Р/C: {{config('contacts.rs')}}</li>
				</ul>
			</div>

			<div class="footer__column">
				<h3 class="footer__title">Навигация</h3>
				<ul class="footer__menu">
                    <x-menu-puncts></x-menu-puncts>
				</ul>
			</div>

			<div class="footer__column">
				<h3 class="footer__title">Контакты</h3>
				<ul class="footer__menu">
					<li class="footer__menu-item">Телефон: <a href="tel:+7{{phone_format(config('contacts.main_phone'))}}">{{config('contacts.main_phone')}}</a></li>
					<li class="footer__menu-item">Адрес: {{config('contacts.zastr_adr')}}</li>
					<li class="footer__menu-item"><a href="mailto:{{config('contacts.email')}}" class="footer__menu-link">E-mail:
                        {{config('contacts.email')}}</a></li>
				</ul>
			</div>

			<div class="footer__column">
				<h3 class="footer__title">Посетителям</h3>
				<ul class="footer__menu">
					<li class="footer__menu-item"><a href="{{route('policy')}}"></a>Политика конфиденциальности</li>
				</ul>
			</div>

		</div>

		<div class="footer__bottom">
			<a href="{{route('home')}}" class="logo-icon footer__logo">
				<svg>
					<use xlink:href="#logo-f"></use>
				</svg>
			</a>
		</div>

	</div>
</footer>
