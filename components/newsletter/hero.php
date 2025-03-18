<section id="hero" class="hero container newsletter-pink">
  <div class="hero_content">
    <div class="breadcrumbs container">
      <ul>
        <li class="breadcrumb-item">
          <a href="./index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Newsletter</a>
        </li>
      </ul>
    </div>
    <h1 class="hero_content--title">Newsletter</h1>
    <p class="hero_content--text">Zapisz się do naszego newslettera i bądź na bieżąco!</p>
    <div class="col-sm-12">
      <form class="newsletter-form d-flex align-items-center mt-5" action="/newsletter/" method="post">
        <div class="row">
          <div class="newsletter-row col-sm-12 mb-4">
            <input type="email" id="newsletter-hero1" class="newsletter-hero email" placeholder="Wpisz swój adres email" name="contact--extra--email" value="" aria-hidden="true" tabindex="-1" autocomplete="new-password">
            <button class="white-btn m-0">Wyślij <img src="./assets/icons/common/buttons/button_pink_arrow.svg" alt="arrow icon" width="18" height="18">
            </button>
          </div>
          <div class="col-sm-12">
          <div class="mt-2">
            <label class="custom-checkbox-container">
                <input type="checkbox" name="newsletter_terms1" id="newsletter_terms1" value="1" class="custom_input">
                <span class="custom-checkbox-checkmark"></span>
                * Wyrażam zgodę na przetwarzanie moich danych przez PCM Sp. z o.o. EASY GIFTS Sp.k., w celu otrzymywania aktualności oraz treści marketingowych, za pomocą automatycznych wiadomości e-mail w ramach usługi „Newsletter”
            </label>
            </div>

            <div class="mt-2">
            <label class="custom-checkbox-container">
                <input type="checkbox" name="newsletter_terms2" id="newsletter_terms2" value="1" class="custom_input">
                <span class="custom-checkbox-checkmark"></span>
                * Zapoznałem/zapoznałam się z treścią 
                <a class="common" href="" rel="noindex, nofollow" target="_blank">Regulaminu Sklepu Internetowego</a>, którą przyjmuję do wiadomości i akceptuję.
            </label>
            </div>
          </div>
        </div>
        <input type="hidden" name="newsletter_send" value="1">
      </form>
    </div>
    </button>
  </div>
  <div class="hero_image">
    <img src="./assets/img/newsletter/newsletter_hero.jpg" alt="hero img" width="1928" height="638">
  </div>
</section>