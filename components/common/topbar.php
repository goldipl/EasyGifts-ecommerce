<div id="topbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex flex-row topbar-socials">
            <a href="" class="p-1" rel="nofollow" target="_blank">
                <img src="./assets/icons/common/topbar/facebook.svg" alt="facebook" width="26" height="26">
            </a>
            <a href="" class="p-1" rel="nofollow" target="_blank">
                <img src="./assets/icons/common/topbar/youtube.svg" alt="youtube" width="26" height="26">
            </a>
            <a href="" class="p-1" rel="nofollow" target="_blank">
                <img src="./assets/icons/common/topbar/instagram.svg" alt="instagram" width="26" height="26">
            </a>
            <a href="" class="p-1" rel="nofollow" target="_blank">
                <img src="./assets/icons/common/topbar/pinterest.svg" alt="pinterest" width="26" height="26">
            </a>
            <a href="" class="p-1" rel="nofollow" target="_blank">
                <img src="./assets/icons/common/topbar/linkedin.svg" alt="linkedin" width="26" height="26">
            </a>
        </div>
        <div class="d-flex">
            <div class="topbar-links d-flex flex-row align-items-center">
                <a href="./index.php#about_us" class="p-3">
                    O nas
                </a>
                <a href="./newsletter.php" class="p-3">
                    Newsletter
                </a>
                <a href="./news.php" class="p-3">
                    Aktualności
                </a>
                <a href="./blog.php" class="p-3">
                    Blog
                </a>
                <a href="./faq.php" class="p-3">
                    FAQ
                </a>
            </div>
            <div class="topbar-lang d-flex flex-row align-items-center">
                <div class="flag-toggle" onclick="toggleModal()">
                    <img src="./assets/img/common/topbar/PL-flag.png" alt="Polish Flag" class="flag-img">
                    <span class="flag-arrow">
                        <img src="./assets/icons/common/topbar/flag-arrow.svg" alt="arrow">
                    </span>
                </div>
                <div class="flag-modal" id="flag-modal">
                    <div class="flag-modal-content">
                        <img src="./assets/img/common/topbar/EN-flag.png" alt="English Flag" class="flag-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleModal() {
  const modal = document.getElementById("flag-modal");
  modal.style.display = (modal.style.display === "block") ? "none" : "block";
}
</script>