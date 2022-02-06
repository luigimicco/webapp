const deleteButtons = document.querySelectorAll(".delete-button");
deleteButtons.forEach((form) => {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const conf = confirm("Vuoi veramente eliminare quest'elemento?");
        if (conf) this.submit();
    });
});
