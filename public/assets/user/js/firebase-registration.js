
// $(document).ready(function () {
//     // Attach a click event handler to the button
//     alert("This is a jQuery alert message!");

// });

import { initializeApp } from '/firebase/app';
import { getAuth, createUserWithEmailAndPassword } from '/firebase/auth';
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
// Handle form submission
document.getElementById("registration-form").addEventListener("submit", (e) => {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Create a new user with email and password
    auth.createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // User registered successfully
            const user = userCredential.user;
            console.log("User registered:", user);

            // You can redirect to a different page or perform other actions here
        })
        .catch((error) => {
            // Handle registration errors
            console.error("Error registering user:", error);
        });
});
