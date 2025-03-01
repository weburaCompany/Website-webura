import './bootstrap';

let userId = window.authUserId;
Echo.private('App.Models.User.' + userId)
    .notification((notification) => {
        console.log(notification);
    });


