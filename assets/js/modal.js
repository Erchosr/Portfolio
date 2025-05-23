document.addEventListener("DOMContentLoaded", () => {
    // Get all buttons that open a modal
    const modalButtons = document.querySelectorAll(".view-details")
    const closeButtons = document.querySelectorAll(".close, .close-modal")
    const modals = document.querySelectorAll(".modal")
  
    // Add click event to all modal buttons
    modalButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const modalId = "modal-" + this.getAttribute("data-id")
        const modal = document.getElementById(modalId)
  
        if (modal) {
          modal.style.display = "block"
          document.body.style.overflow = "hidden" // Prevent scrolling
        }
      })
    })
  
    // Add click event to all close buttons
    closeButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const modal = this.closest(".modal")
  
        if (modal) {
          modal.style.display = "none"
          document.body.style.overflow = "" // Enable scrolling
        }
      })
    })
  
    // Close modal when clicking outside of modal content
    window.addEventListener("click", (event) => {
      modals.forEach((modal) => {
        if (event.target === modal) {
          modal.style.display = "none"
          document.body.style.overflow = "" // Enable scrolling
        }
      })
    })
  
    // Close modal with Escape key
    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") {
        modals.forEach((modal) => {
          if (modal.style.display === "block") {
            modal.style.display = "none"
            document.body.style.overflow = "" // Enable scrolling
          }
        })
      }
    })
  })
  
  