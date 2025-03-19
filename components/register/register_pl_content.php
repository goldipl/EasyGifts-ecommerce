<div class="grey-background">
    <div class="register container">
        <h2>Jestem nowym klientem <span>EasyGifts</span></h2>
        <form class="inputs-form-container-wrapper">
            <div class="title">
                <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane<span class="orange">Pola oznaczone * są wymagane.</span></p>
            </div>
            <div class="inputs-wrapper">
                <div class="inputs-wrapper__slot">
                    <label for="name-surname">Twoje imię i nazwisko<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="name-surname" id="name-surname" required="" placeholder="Jan Kowalski">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="telephone">Telefon<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="telephone" id="telephone" required="" placeholder="604 222 774">
                </div>
                <div class="inputs-wrapper__slot pre">
                    <label for="select01">Skąd dowiedziałeś/aś się o EasyGifts?<span class="orange">*</span></label>
                    <select class="form-select" name="select01" id="select01" required="">
                        <option value="Facebook">Facebook</option>
                        <option value="Google">Google</option>
                    </select>
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="from-other">Inne</label>
                    <input class="form-input" type="text" name="from-other" id="from-other" placeholder="lub wpisz inne">
                </div>
            </div>
            <div class="title">
                <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane logowania</p>
            </div>
            <div class="inputs-wrapper">
                <div class="d-flex flex-column input-column">      
                    <div class="inputs-wrapper__slot">
                        <label for="login">Login<span class="orange">*</span></label>
                        <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="login" id="login" required="" placeholder="mail@gmail.com">
                    </div>
                    <div class="inputs-wrapper__slot">
                        <label class="custom-checkbox-container newsletter">Zapisz się do naszego newslettera<input type="checkbox" class="custom_input" required="">
                            <span class="custom-checkbox-checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="inputs-wrapper__slot">
                    <label class="custom-checkbox-container marketing-consents">Wyrażam zgodę na przetwarzanie moich danych przez PCM Sp. z o.o. EASY GIFTS  Sp.k. (NIP: 8961447858) w celu otrzymywania aktualności oraz treści marketingowych, za pomocą automatycznych wiadomości e-mail w ramach usługi „Newsletter”, zgodnie z art. 10 ust. 2 ustawy o świadczeniu usług drogą elektroniczną oraz art. 172 ust. 1 ustawy Prawo telekomunikacyjne.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="password">Hasło<span class="orange">*</span></label>
                    <input class="form-input" type="password" name="password" id="password" required="" placeholder="••••••••••••••••••••••">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="repeat-password">Powtórz hasło<span class="orange">*</span></label>
                    <input class="form-input" type="password" name="repeat-password" id="repeat-password" required="" placeholder="••••••••••••••••••••••">
                </div>
            </div>
            <div class="title">
                <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane firmowe</p>
            </div>
            <div class="inputs-wrapper">
                <div class="inputs-wrapper__slot">
                    <label for="company">Firma<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="company" id="company" required="" placeholder="Firma1">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="street">Ulica<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="street" id="street" required="" placeholder="Krakowska 4c/14">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="zipcode">Kod pocztowy<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="zipcode" id="zipcode" required="" placeholder="35-582">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="city">Miasto<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="city" id="city" required="" placeholder="Rzeszów">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="nip">NIP<span class="orange">*</span><small>Masz nowy NIP? Poinformuj o tym swojego opiekuna handlowego.</small></label>
                    <input class="form-input" type="text" name="nip" id="nip" required="" placeholder="441065228541">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="tel2">Telefon<span class="orange">*</span></label>
                    <input class="form-input" type="text" name="tel2" id="tel2" required="" placeholder="604 222 774">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="email">E-mail<span class="orange">*</span><small>Podaj adres email, na który będziesz otrzymywać e -faktury</small></label>
                    <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" required="" placeholder="remail@gmail.pl">
                </div>
            </div>
            <div class="checkboxes-box">
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Regulaminu Sklepu Internetowego EasyGifts, jego treść jest dla mnie zrozumiała i w całości go akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Polityki prywatności, jej treść jest dla mnie zrozumiała i w całości ją akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Polityki wykorzystywania plików cookies, jej treść jest dla mnie zrozumiała i w całości ją akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="button-box">
                <button class="white-pink-btn">Wyślij <img src="./assets/icons/common/buttons/button_pink_arrow.svg" alt="save btn icon" width="18" height="18"></button>
            </div>
        </form>
    </div>
</div>