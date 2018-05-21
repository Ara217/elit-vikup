const CHECKADDACCESSPASSFORM = {
    email : {
        presence: true,
        email: true
    },

    passwords_count: {
        presence: true,
        numericality: true
    },

    days_number: {
        presence: true,
        numericality: true
    }
};

const CHECHQUEUECONFIGFORM = {
    queue_size: {
        presence: true,
        numericality: true
    },

    factor: {
        presence: true,
        numericality: true
    },

    range_from: {
        presence: true,
        numericality: true
    },

    range_to: {
        presence: true,
        numericality: true
    },

    list: {
        presence: true,
    }
};

$(() => {
    $('.image-element').on('change', (e) => {
        let file = $(e.currentTarget).val();
        // debugger;

        $(e.currentTarget).next().html(file);
    });//todo add file name to input


    $('.accept-request').on('click', (e) => {
        let target = $(e.currentTarget).parent();

        axios.post('/intl/admin/accept-join-request', {'id' : target.data('id')}).then((results) => {
            if(results.errors) {
                errorsField.html(results.errors);
            }

            if (results.success) {
                target.closest('tr').remove();
            }
        });
    });

    // $('.change-queue-number').on('click', (e) => {
    //
    // });

    $('#addPassword').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.currentTarget);
        let submitButton = form.find('input[type=submit]:disabled');
        let values = handleFormSubmit(form, CHECKADDACCESSPASSFORM);

        if (values) {
            axios.post('/intl/admin/add-pass', values).then((results) => {
                submitButton.prop('disabled', false);
                if(results.errors) {
                    errorsField.html(results.errors);
                }

                if (results.success) {
                    form.find("input[type=text], textarea").val("");
                    form.find('input[type=submit]').prop('disabled', false);
                    form[0].reset();
                    loaderRemove();
                }
            });
        } else {
            submitButton.prop('disabled', false);
        }
    });

    $('.change-queue-configs').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.currentTarget);
        let submitButton = form.find('input[type=submit]:disabled');
        let values = handleFormSubmit(form, CHECHQUEUECONFIGFORM);

        if (values) {
            axios.post('/intl/admin/change-queue-config', values).then((results) => {
                submitButton.prop('disabled', false);
                if(results.errors) {
                    errorsField.html(results.errors);
                }

                if (results.success) {
                    form.find('input[type=submit]').prop('disabled', false);
                    loaderRemove();
                }
            });
        } else {
            submitButton.prop('disabled', false);
        }
    });
});