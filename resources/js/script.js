function changeDropdown() {
  var displayValue = document.getElementById("typeOf").value;
  if (displayValue === "buyer") {
    document.getElementById("seller").classList.add("hide");
    document.getElementById("buyer").classList.remove("hide");
    document.getElementById("buyer").classList.add("show");
    document.getElementById("seller").classList.remove("show");
  } else if (displayValue === "seller") {
    document.getElementById("buyer").classList.add("hide");
    document.getElementById("buyer").classList.remove("show");
    document.getElementById("seller").classList.remove("hide");
    document.getElementById("seller").classList.add("show");
  } else {
    document.getElementById("buyer").classList.remove("show");
    document.getElementById("seller").classList.remove("show");
    document.getElementById("buyer").classList.add("hide");
    document.getElementById("seller").classList.add("hide");
  }
}

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});
