import './bootstrap';
import Swal from 'sweetalert2';

let userId = window.authUserId;
Echo.private('App.Models.User.' + userId)
    .notification((notification) => {
        console.log(notification);
        Swal.fire({
            title: 'New Contact Notification',
            html: `You've received a new contact notification from <strong>${notification.name}</strong>.`,
            icon: 'info',
            confirmButtonText: 'OK',
            showCloseButton: true,
            customClass: {
                confirmButton: 'btn btn-primary',
                title: 'swal-title-custom'
            }
        });
    });


