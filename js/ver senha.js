function togglePasswordVisibility() {
  var senhaInput = document.getElementById("senha");
  var toggleIcon = document.querySelector(".toggle-password");

  if (senhaInput.type === "password") {
    senhaInput.type = "text";
    toggleIcon.textContent = "👁️";
  } else {
    senhaInput.type = "password";
    toggleIcon.textContent = "👁️";
  }
}