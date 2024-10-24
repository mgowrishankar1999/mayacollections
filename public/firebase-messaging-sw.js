importScripts('https://www.gstatic.com/firebasejs/6.2.3/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/6.2.3/firebase-messaging.js');

var config = {
    messagingSenderId: "600104612393",
    apiKey: "AIzaSyAbs3EVEj_Jtn1_vP9G3hAGsi8g90VT-zQ",
    authDomain: "uthecom-6c6b6.firebaseapp.com",
    projectId: "uthecom-6c6b6",
};
firebase.initializeApp(config);

var messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    var dataFromServer = JSON.parse(payload.data.notification);
    var notificationTitle = dataFromServer.title;
    var notificationOptions = {
        body: dataFromServer.body,
        icon: dataFromServer.icon,
        data: {
            url: dataFromServer.url
        }
    };
    return self.registration.showNotification(notificationTitle, notificationOptions);
});

self.addEventListener("notificationclick", function (event) {
    var urlToRedirect = event.notification.data.url;
    event.notification.close();
    event.waitUntil(self.clients.openWindow(urlToRedirect));
});