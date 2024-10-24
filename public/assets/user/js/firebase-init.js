import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.1/firebase-app.js";
import { getMessaging, getToken } from "https://www.gstatic.com/firebasejs/10.3.1/firebase-messaging.js";
// Initialize Firebase with your project's configuration
const firebaseConfig = {
    apiKey: "AIzaSyAbs3EVEj_Jtn1_vP9G3hAGsi8g90VT-zQ",
    authDomain: "uthecom-6c6b6.firebaseapp.com",
    projectId: "uthecom-6c6b6",
    storageBucket: "uthecom-6c6b6.appspot.com",
    messagingSenderId: "152954835579",
    appId: "1:152954835579:web:88c2c022e23c0eaf0008de",
    measurementId: "G-B2TYYWG6FJ"
};

firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();

// Request for permission
Notification.requestPermission()
    .then((permission) => {


        console.log('Notification permission granted.');
        console.log(permission);
        //code stops running here on google chrome
        messaging.getToken()
            .then((currentToken) => {
                if (currentToken) {
                    console.log('Token: ' + currentToken);
                    document.getElementById('dtoken').value = currentToken;

                } else {
                    //doesn't reach here
                    console.log('No Instance ID token available. Request permission to generate one.');
                }
            })
            .catch(function (err) {
                //doesn't reach here either
                console.log('An error occurred while retrieving token. ', err);
            });
    })
    .catch(function (err) {
        console.log('Unable to get permission to notify.', err);
    });
