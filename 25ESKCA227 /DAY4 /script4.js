const darkBtn = document.getElementById("darkBtn");

darkBtn.addEventListener("click", function () {
    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {
        darkBtn.textContent = "☀️ Light Mode";
    } else {
        darkBtn.textContent = "🌙 Dark Mode";
    }
});

// Click Counter
let count = 0;

const clickBtn = document.getElementById("clickBtn");
const resetBtn = document.getElementById("resetBtn");
const countDisplay = document.getElementById("count");

clickBtn.addEventListener("click", function () {
    count++;
    countDisplay.textContent = count;
});

resetBtn.addEventListener("click", function () {
    count = 0;
    countDisplay.textContent = count;
});

// Form Validation
const form = document.getElementById("myForm");

form.addEventListener("submit", function (event) {

    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();

    const error = document.getElementById("error");
    const greeting = document.getElementById("greeting");

    error.textContent = "";
    greeting.textContent = "";

    if (name === "") {
        error.textContent = "Please enter your name.";
        return;
    }

    if (email === "") {
        error.textContent = "Please enter your email.";
        return;
    }

    if (!email.includes("@")) {
        error.textContent = "Please enter a valid email.";
        return;
    }

    greeting.textContent = "Welcome, " + name + "! Registration Successful 🎉";

    form.reset();
});
