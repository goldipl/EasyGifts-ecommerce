<form class="shopcreator-content container">
  <h3>Ustal narzut na ceny</h3>
  <div class="textbox">
    <p>Poniżej znajdują się ustawienia umożliwiające zmianę cen na Twojej stronie. Możesz samodzielnie ustalać politykę cenowąpoprzez dodawanie lub odejmowanie narzutu w %.</p>
  </div>
  <div class="shopcreator-prices">
    <div class="shopcreator-prices__slot">
      <label for="products-prices"><img src="./assets/img/common/topbar/PL-flag.png" alt="Polish Flag" class="flag-img">Zmiana cen produktów (PL): Rabat/Narzut %</label>
      <div class="d-flex mt-2">
        <select name="products-prices-select" id="products-prices-select-pl-one">
          <option value="+">+</option>
          <option value="-">-</option>
        </select>
        <input class="form-input" type="text" name="products-prices" id="products-prices">
      </div>
    </div>
    <div class="shopcreator-prices__slot">
      <label for="products-prices"><img src="./assets/img/common/topbar/PL-flag.png" alt="Polish Flag" class="flag-img"> Zmiana cen oznakowań (PL): Rabat/Narzut %</label>
      <div class="d-flex mt-2">
        <select name="products-branding-select" id="products-branding-select-pl-two">
          <option value="+">+</option>
          <option value="-">-</option>
        </select>
        <input class="form-input" type="text" name="products-branding" id="products-branding">
      </div>
    </div>
  </div>
  <div class="shopcreator-prices">
    <div class="shopcreator-prices__slot">
      <label for="products-prices"><img src="./assets/img/common/topbar/EN-flag.png" alt="Polish Flag" class="flag-img">Zmiana cen produktów (EN): Rabat/Narzut %</label>
      <div class="d-flex mt-2">
        <select name="products-prices-select" id="products-prices-select-en-one">
          <option value="+">+</option>
          <option value="-">-</option>
        </select>
        <input class="form-input" type="text" name="products-prices" id="products-prices">
      </div>
    </div>
    <div class="shopcreator-prices__slot">
      <label for="products-prices"><img src="./assets/img/common/topbar/EN-flag.png" alt="Polish Flag" class="flag-img"> Zmiana cen oznakowań (EN): Rabat/Narzut %</label>
      <div class="d-flex mt-2">
        <select name="products-branding-select" id="products-branding-select-en-two">
          <option value="+">+</option>
          <option value="-">-</option>
        </select>
        <input class="form-input" type="text" name="products-branding" id="products-branding">
      </div>
    </div>
  </div>
  <div class="shopprices-info-text">
    <p>
      <strong>Ceny oferty podstawowej:</strong> Widoczne na Twojej stronie, to ceny katalogowe bez rabatu agencyjnego.
    </p>
    <p>
      <strong>Ceny oferty markowej (Pierre Cardin, Schwarzwolf):</strong> Widoczne na Twojej stronie, to ceny zakupu, które mają ustawiony automatyczny narzut +50%.
    </p>
    <p>
      <strong>Uwaga:</strong> Ceny znakowania są zgodne z aktualnym cennikiem nadruków. Jeśli chcesz, możesz dodać własny narzut w %.
    </p>
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
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot active"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
    <div class="shopcreator-dots__dot"></div>
  </div>
</form>