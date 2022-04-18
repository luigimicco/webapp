$(function () {

    // Boostrap tooltip
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });

    // pop up for messages and warnings
    var popup = document.getElementById('popup_message');
    if (popup) {
        // show a message in a toast
        Swal.fire({
            toast: true,
            animation: false,
            icon: popup.dataset.type,
            title: popup.dataset.message,
            type: popup.dataset.type,
            position: 'top-right',
            timer: 3000,
            showConfirmButton: false,
        });
    }

    // confirm on delete button
    const deleteButtons = document.querySelectorAll(".delete-button");
    deleteButtons.forEach((form) => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            var doubleconfirm = e.target.classList.contains('double-confirm');

            Swal.fire({
                title: 'Sei sicuro ?',
                text: "Questa operazione è irreversibile !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Annulla',
                confirmButtonText: 'Si, procedi !'
            }).then((result) => {
                if (result.value) {

                    // if double confirm
                    if (!doubleconfirm) 

                    Swal.fire({
                        title: 'Confermare la cancellazione',
                        html: "Per confermare la cancellazione digita la parola <b>ESEGUI</b>",
                        input: 'text',
                        type: 'warning',
                        inputPlaceholder: 'ESEGUI',
                        showCancelButton: true,
                        confirmButtonText: 'Conferma',
                        cancelButtonText: 'Annulla',
                        showLoaderOnConfirm: true,
                        allowOutsideClick: () => !Swal.isLoading(),
                        preConfirm: (txt) => {
                            return (txt.toUpperCase() == "ESEGUI");
                        },

                    }).then((result) => {
                        if (result.value) form.submit();
                    })

                }
            })

        });
    });

});

