const CHECKQUEUE = {
    checked_email: {
        presence: true,
        email: true,
    }
};

$(() => {
    $('#checkQueueNumber').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.currentTarget);
        let submitButton = form.find('input[type=submit]:disabled');
        let values = handleFormSubmit(form, CHECKQUEUE);

        if (values) {
            axios.post('/intl/check-queue-number', values).then((results) => {
                submitButton.prop("disabled", false);
                if(results.errors) {
                    errorsField.html(results.errors);
                } else if (!results.success) {
                    form.find("input[type=text], textarea").val("");
                    form[0].reset();
                } else if (results.success) {
                    if (results.lists.length == 2) {
                        window.location.href = '/intl/access-share';
                    } else {
                        if (results.lists.indexOf('wait') >= 0) {
                            window.location.href = '/intl/early-access-share';
                        } else {
                            window.location.href = '/intl/privileged-access-share'
                        }
                    }
                }
            });
        } else {
            submitButton.prop("disabled", false)
        }
    });

    $('.access-link-share-button').on('click', (e) => {
        let target = $(e.currentTarget);

        axios.post('/intl/add-network-share-count', {
            list: target.data('list'),
            socialNetwork: target.data('button'),
            email: target.data('user')
        }).then((results) => {});
    })
});