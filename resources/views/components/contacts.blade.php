<section id="contacts_zas" class="contacts-sec section">
    <div class="_container">

        <h2 class="contacts-sec__title title">Контакты</h2>

        <div class="contacts-sec__inner">



            <div class="contacts-sec__column">

                <div class="contacts-sec__list list-contacts-sec">

                    <h3 class="list-contacts-sec__title purple-color">Застройщик:</h3>
                    <div class="list-contacts-sec__row">
                        <div class="list-contacts-sec__item"> {{config('contacts.company_name')}}</div>
                        <div class="list-contacts-sec__item">Директор: <span>{{config('contacts.direktor')}}</span></div>
                        <div class="list-contacts-sec__item">Тел: <span><a href="tel:+7{{phone_format(config('contacts.zastr_phone'))}}">{{config('contacts.offic_phone')}}</a></span></div>
                        <div class="list-contacts-sec__item">Фактический адрес: <span>{{config('contacts.zastr_adr_fact')}}</span></div>
                        <div class="list-contacts-sec__item">Юридический адрес: <span>{{config('contacts.zastr_adr')}}</span></div>
                        <div class="list-contacts-sec__item">ИНН: <span>{{config('contacts.inn')}}</span></div>
                        <div class="list-contacts-sec__item">КПП: <span>{{config('contacts.kpp')}}</span></div>
                        <div class="list-contacts-sec__item">ОГРН: <span>{{config('contacts.ogrn')}}</span></div>
                        <div class="list-contacts-sec__item">ОКПО: <span>{{config('contacts.okpo')}}</span></div>
                    </div>


                    <h3 class="list-contacts-sec__title purple-color">Банковские реквизиты:</h3>
                    <div class="list-contacts-sec__row">
                        <div class="list-contacts-sec__item">Банк: <span>{{config('contacts.bank')}}</span></div>
                        <div class="list-contacts-sec__item">БИК: <span>{{config('contacts.bik')}}</span></div>
                        <div class="list-contacts-sec__item">р/с: <span>{{config('contacts.rs')}}</span></div>
                        <div class="list-contacts-sec__item">к/с: <span>{{config('contacts.ks')}}</span></div>
                    </div>

                </div>

            </div>

            <div class="contacts-sec__column">

                <div class="contacts-sec__list list-contacts-sec">
                    <h3 class="list-contacts-sec__title purple-color">Офисы продаж:</h3>

                    <div class="list-contacts-sec__row">
                        <div class="list-contacts-sec__item">Адрес: <span>{{config('contacts.offic_adr')}}</span></div>
                        <div class="list-contacts-sec__tel-block">
                            <div class="list-contacts-sec__item">Тел: <span><a href="tel:+7{{phone_format(config('contacts.main_phone'))}}">{{config('contacts.main_phone')}}</a></span></div>
                            <div class="list-contacts-sec__item">Тел: <span><a href="tel:+7{{phone_format(config('contacts.offic_phone'))}}">{{config('contacts.offic_phone')}}</a></span></a></div>
                        </div>
                        <div class="list-contacts-sec__item">Режим работы: <span class="purple-color">{{config('contacts.offic_rwork')}}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>
