document.addEventListener("DOMContentLoaded", () => {
    // Mobile menu toggle
    const menuToggle = document.querySelector(".menu-toggle")
    const navLinks = document.querySelector(".nav-links")
  
    if (menuToggle && navLinks) {
      menuToggle.addEventListener("click", () => {
        navLinks.classList.toggle("active")
      })
    }
  
    // Animation on scroll
    const fadeElements = document.querySelectorAll(".fadeUp")
  
    function checkFade() {
      fadeElements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top
        const windowHeight = window.innerHeight
  
        if (elementTop < windowHeight - 100) {
          element.style.opacity = "1"
          element.style.transform = "translate(0, 0)"
        }
      })
    }
  
    // Initial check
    checkFade()
  
    // Check on scroll
    window.addEventListener("scroll", checkFade)
  
    // Category filter for veille page
    const filterButtons = document.querySelectorAll(".filter-btn")
    const articleCards = document.querySelectorAll(".article-card")
  
    if (filterButtons.length > 0 && articleCards.length > 0) {
      filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
          const category = this.getAttribute("data-category")
  
          // Update active button
          filterButtons.forEach((btn) => btn.classList.remove("active"))
          this.classList.add("active")
  
          // Filter articles
          articleCards.forEach((card) => {
            if (category === "all" || card.getAttribute("data-category") === category) {
              card.style.display = "block"
            } else {
              card.style.display = "none"
            }
          })
        })
      })
    }
  })
  
  