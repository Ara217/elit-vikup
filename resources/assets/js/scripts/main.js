$(() => {
    $('#sendEmail').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.currentTarget);
        let submitButton = form.find('input[type=submit]');

        axios.post('/sendEmail', form.serialize()).then((results) => {
            submitButton.prop("disabled", false);
            form.find("input[type=text], textarea").val("");
            form[0].reset();

            if (!results.errors) {
                toastr.success('Ваше письмо отправлено.');
            }
        });
    });

    $('#orderCall').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.currentTarget);
        let submitButton = form.find('input[type=submit]');

        axios.post('/orderCall', form.serialize()).then((results) => {
            submitButton.prop("disabled", false);
            form.find("input[type=text], textarea").val("");
            form[0].reset();

            if (!results.errors) {
                toastr.success('Вы заказали звонок.');
            }

        });
    });

    $('#sidebarCollapse').on('click', () => {
        $('#sidebar').toggleClass('active');
    });
});