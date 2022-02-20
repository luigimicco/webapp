window.onload = function() {

    const deleteButtons = document.querySelectorAll(".delete-button");
    deleteButtons.forEach((form) => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

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
                    form.submit();
                }
            }) 

        });
    });

};

