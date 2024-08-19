// Obtener el botón del menú desplegable
let dropdownBtn = document.querySelector(".dropdownbtn");

// Agregar un evento de clic al botón
dropdownBtn.addEventListener("click", function() {
  let dropdownMenu = this.nextElementSibling;
  
  // Alternar la clase "show" para mostrar u ocultar el menú desplegable
  dropdownMenu.classList.toggle("show");
});

// Cerrar el menú desplegable cuando se hace clic fuera de él
window.addEventListener("click", function(event) {
  if (!event.target.matches(".dropdownbtn")) {
    var dropdownMenus = document.querySelectorAll(".dropdown-content");
    for (var i = 0; i < dropdownMenus.length; i++) {
      var openDropdownMenu = dropdownMenus[i];
      if (openDropdownMenu.classList.contains("show")) {
        openDropdownMenu.classList.remove("show");
      }
    }
  }
});
