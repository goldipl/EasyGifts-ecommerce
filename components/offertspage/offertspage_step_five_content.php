<div class="offertspage_container step_five">
  <div class="container">
    <div class="top-title-box">
      <div class="top-title-box__left">
        <h1>Ofertownik - Szczegóły oferty</h1>
      </div>
      <div class="top-title-box__right"></div>
    </div>
    <div class="offertspage-offerts-details">
      <div class="offertspage-offerts-details-container">
        <div class="offerts-details__top">
          <div class="offerts-details__top__col">
            <div class="centered-title">
              <p>Nazwa oferty</p>
            </div>
            <div class="details-content border-bottom">
              <input type="text" class="form-input">
            </div>
            <div class="centered-title">
              <p>Klient</p>
            </div>
            <div class="details-content">
              <label for="textarea-client" class="d-flex justify-content-end text-end">78/230</label>
              <textarea class="form-textarea" id="textarea-client"></textarea>
            </div>
          </div>
          <div class="offerts-details__top__col">
            <div class="centered-title">
              <p>Oferent (Agencja)</p>
            </div>
            <div class="details-content">
              <textarea class="form-textarea"></textarea>
            </div>
            <div class="centered-title">
              <p>Uwagi</p>
            </div>
            <div class="details-content">
              <label for="textarea-comments" class="d-flex justify-content-end text-end">78/230</label>
              <textarea class="form-textarea" id="textarea-comments"></textarea>
            </div>
          </div>
          <div class="offerts-details__top__col">
            <div class="centered-title">
              <p>Inne</p>
            </div>
            <div class="details-content">
              <div class="details-two-col">
                <div class="details-two-col__left">
                  <label for="valid-to">Oferta ważna do</label>
                  <input type="date" name="valid-to" id="valid-to" class="form-input">
                </div>
                <div class="details-two-col__right">
                  <label for="delivery-time">Termin dostawy</label>
                  <input type="date" name="delivery-time" id="delivery-time" class="form-input">
                </div>
              </div>
              <div class="inline-flex flex-wrap">
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchTransportIncluded">Cena zawiera koszty transportu</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchTransportIncluded" onclick="toggleExclusiveSwitch('flexSwitchTransportIncluded', 'flexSwitchTransportExcluded')" checked>
                </div>
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchTransportExcluded">Cena nie zawiera kosztów transportu</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchTransportExcluded" onclick="toggleExclusiveSwitch('flexSwitchTransportExcluded', 'flexSwitchTransportIncluded')">
                </div>
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchShowMarkingPrice">Pokaż osobno cenę za znakowanie</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchShowMarkingPrice">
                </div>
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchShowMarkingTime">Pokaż szacowany termin znakowania</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchShowMarkingTime">
                </div>
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchShowSummaryValue">Pokaż wartość oferty w podsumowaniu</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchShowSummaryValue">
                </div>
                <div class="form-check form-switch">
                  <label class="form-check-label" for="flexSwitchShowStockLevels">Pokaż stany magazynowe</label>
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchShowStockLevels">
                </div>
              </div>
              <div class="additional-info">
                <input type="text" class="form-input">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-offertspage-box-with-btn">
        <div class="bottom-offertspage-button">
          <a href="#" class="white-btn prev left-btn">
            <img src="./assets/icons/common/buttons/button_color_arrow.svg" alt="arrow icon" width="18" height="18"> Powrót </a>
        </div>
        <div class="bottom-offertspage-button right-btn">
          <a href="#" class="color-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function toggleExclusiveSwitch(checkedId, uncheckedId) {
    const checkedSwitch = document.getElementById(checkedId);
    const uncheckedSwitch = document.getElementById(uncheckedId);
    if (checkedSwitch.checked) {
      uncheckedSwitch.checked = false;
    }
  }
</script>