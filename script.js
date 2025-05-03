// Script for toggling password visibility
function togglePassword(id) {
    const field = document.getElementById(id);
    if (field.type === "password") {
        field.type = "text";
    } else {
        field.type = "password";
    }
}

// Basic form validation
function validateRegisterForm() {
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirm = document.getElementById("confirm_password").value.trim();

    if (!username || !email || !password || !confirm) {
        alert("Please fill in all required fields.");
        return false;
    }

    if (password !== confirm) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function validateLoginForm() {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (!email || !password) {
        alert("Both email and password are required.");
        return false;
    }

    return true;
}

// Display success or error message from server (optional enhancement)
function showMessage(message, type = "success") {
    const msgBox = document.getElementById("message-box");
    msgBox.innerText = message;
    msgBox.className = type === "error" ? "alert alert-danger" : "alert alert-success";
    msgBox.style.display = "block";
    setTimeout(() => {
        msgBox.style.display = "none";
    }, 4000);
}
