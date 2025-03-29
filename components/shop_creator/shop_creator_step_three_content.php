<form class="shopcreator-content container">
  <h3>Wprowadź dane teleadresowe Twojej firmy.</h3>
  <div class="textbox">
    <p>Pojawią się one jako wizytówka firmy w stopce strony.</p>
  </div>
  <div class="shopcreator-labels d-flex flex-row flex-wrap gap-3">
    <div class="d-flex flex-column label-box">
      <label for="shop-name">Nazwa sklepu/katalogu lub firmy</label>
      <input class="form-input" type="text" name="shop-name" id="shop-name-pl" placeholder="🇵🇱 Gadżety reklamowe">
      <input class="form-input" type="text" name="shop-name" id="shop-name-en" placeholder="🇬🇧 Promotional gifts">
    </div>
  </div>
  <div class="shopcreator-labels d-flex flex-row flex-wrap gap-3">
    <div class="d-flex flex-column label-box">
      <label for="shop-desc">Opis Firmy (PL):</label>
      <textarea class="form-textarea" name="shop-desc" id="shop-desc-pl" placeholder="🇵🇱"></textarea>
      <label for="shop-desc">Opis Firmy (EN):</label>
      <textarea class="form-textarea" name="shop-desc" id="shop-desc-en" placeholder="🇬🇧"></textarea>
      <p>Opis firmy lub sklepu. Będzie widoczny w sklepie no-name w zakładce “Kontakt” oraz jako opis strony podczasudostępniania jej np. w mediach społecznościowych.</p>
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-email">Adres email:</label>
      <input class="form-input" type="email" name="shop-email" id="shop-email">
      <p>Wpisz swój adres e-mail do kontaktu dla klientów. Będziesz otrzymywać na tą skrzynkę zapytania ofertowe od klientów. <strong>UWAGA: Jeśli pozostawisz to pole puste, formularze kontaktowe i zapytania o produkt nie będą widoczne.</strong></p>
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-contactdata">Dane kontaktowe (PL):</label>
      <textarea class="form-textarea" name="shop-contactdata-pl" id="shop-contactdata" placeholder="🇵🇱"></textarea>
      <label for="shop-contactdata">Dane kontaktowe (EN):</label>
      <textarea class="form-textarea" name="shop-contactdata-en" id="shop-contactdata" placeholder="🇬🇧"></textarea>
      <p>Dane teleadresowe firmy. Wpisane dane będą widoczne na stronie głównej oraz w stopce w mailach automatycznych,które będą otrzymywać Twoi klienci po wysłaniu zapytania lub złożeniu zamówienia (tylko dla sklepów internetowych).</p>
    </div>
    <div class="d-flex flex-column label-box">
      <span class="logo-label">Logo:</span>
      <label for="files" class="upload-files-box">
        <img src="./assets/icons/upload-icon.svg" alt="upload icon" width="21" height="14">
        <p>Przeciągnij i upuść albo <br>
          <span>Dodaj plik</span>
        </p>
        <input class="file file-block" type="file" id="files02">
      </label>
      <p>Dozwolone typy plików: JPEG, PNG.<br>Maksymalny rozmiar pliku: 5MB.<br>Optymalna wysokość: 70 pikseli.</p>
    </div>
  </div>
  <strong>Szablon kolorystyczny:</strong>
  <p class="mt-2">Wybierz szablon kolorystyczny Twojej strony. Dzięki niemu Twoja strona będzie spójna wizualnie.</p>
  <div class="shopcreator-checks d-flex flex-row flex-wrap gap-3">
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>beżowy</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: beige"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>niebieski</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: lightblue"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>czarny</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: black"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>pomarańczowy</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: orange"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>czerwony</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: red"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>różowy</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: pink"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>fioletowy</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: violet"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>szary</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: grey"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>granatowy</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: blue"></span>
      </label>
    </div>
    <div class="shopcreator-checks__slot short-slot">
      <label class="custom-checkbox-container">
        <strong>zielony</strong>
        <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark" style="background-color: green"></span>
      </label>
    </div>
  </div>
  <strong>Media społecznościowe:</strong>
  <p class="mt-2">Wpisz adresy kierujące do Twoich profili w mediach społecznościowych, wówczas na stronie głównej pojawią się ikony wybranych portali wraz z linkami kierującymi do nich. </p>
  <div class="shopcreator-labels d-flex flex-row flex-wrap gap-3">
    <div class="d-flex flex-column label-box">
      <label for="shop-fb">Facebook</label>
      <input class="form-input" type="text" name="shop-fb" id="shop-fb">
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-YouTube">YouTube</label>
      <input class="form-input" type="text" name="shop-YouTube" id="shop-YouTube">
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-Instagram">Instagram</label>
      <input class="form-input" type="text" name="shop-Instagram " id="shop-fb">
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-Tiktok">Tiktok</label>
      <input class="form-input" type="text" name="shop-Tiktok" id="shop-Tiktok">
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-Pinterest">Pinterest</label>
      <input class="form-input" type="text" name="shop-Pinterest" id="shop-Pinterest">
    </div>
    <div class="d-flex flex-column label-box">
      <label for="shop-LindkedIn">LindkedIn</label>
      <input class="form-input" type="text" name="shop-LindkedIn" id="shop-LindkedIn">
    </div>
  </div>
  <div class="bottom-button right-btn justify-content-between">
    <button class="white-btn prev">
      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 18C13.9628 18 18 13.9628 18 9C18 4.03729 13.9628 3.52947e-07 9 7.86805e-07C4.03729 1.22066e-06 -1.22066e-06 4.0373 -7.86805e-07 9C-3.52947e-07 13.9628 4.03729 18 9 18ZM6.21974 8.46974L9.96975 4.71971C10.116 4.57346 10.308 4.5 10.5 4.5C10.692 4.5 10.884 4.57346 11.0303 4.71971C11.3235 5.013 11.3235 5.48701 11.0303 5.78025L7.81049 9L11.0302 12.2198C11.3235 12.513 11.3235 12.987 11.0302 13.2802C10.737 13.5735 10.263 13.5735 9.96975 13.2802L6.21974 9.53023C5.9265 9.23699 5.9265 8.76301 6.21974 8.46974Z" fill="#374957" />
      </svg>Powrót </button>
    <button class="white-btn next">Dalej <img src="./assets/icons/common/buttons/button_pink_arrow.svg" alt="arrow icon" width="18" height="18">
    </button>
  </div>
  <div class="shopcreator-dots">
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot active"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
  </div>
</form>