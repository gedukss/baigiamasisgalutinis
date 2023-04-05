const app = (() => {
    const ajax = (url, callback, method = "get", data = {}) => {
        const options = {
            method: method,
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                "Content-Type": "application/json",
            },
        };

        fetch(url, options)
            .then((response) => response.json)
            .then((result) => {
                callback();
            });
    };

    const deleteRecord = () => {
        document.addEventListener("click", function(e) {
            if (e.target && e.target.classList.contains("delete")) {
                e.preventDefault();

                const callback = () => {
                    const row = e.target.closest('tr');
                    if (row.classList.contains('child')) {
                        const previousRow = row.previousElementSibling;
                        if (previousRow.classList.contains('dt-hasChild')) {
                            previousRow.remove();
                        }
                    } 
                    row.remove();
                };
                ajax(e.target.href, callback, "delete");
            }
        });
    };

    const dataTable = () => {
        $("#example1")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example1_wrapper .col-md-6:eq(0)");
    };

    const select2 = () => {
        //Initialize Select2 Elements
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });
    }

    const inputInit = () => {
        bsCustomFileInput.init();
    };

    const removeImage = () => {
        const removes = document.querySelectorAll('.remove-image');

        removes.forEach(function (remove, index) {
            remove.addEventListener('click', function (e) {
                e.target.closest('.old-images-block').remove();
            })
        })
    };

    return {
        init: () => {
            deleteRecord(), dataTable(), select2(), inputInit(), removeImage()
        },
    };
})();

app.init();
