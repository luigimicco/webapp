window.addEventListener("load",function () {
    
    var popup = document.getElementById('popup_message');
    if (popup) {
        // show a message in a toast
        Swal.fire({
            toast: true,
            animation: false,
            title: popup.dataset.message,
            type: popup.dataset.type,
            position: 'top-right',
            timer: 3000,
            showConfirmButton: false,
        });
    }
}, false);

