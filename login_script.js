document.getElementById("loginForm").addEventListener("submit", function(event) {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  if (email === "" || password === "") {
    alert("Both email and password are required!");
    event.preventDefault();
  }
});
