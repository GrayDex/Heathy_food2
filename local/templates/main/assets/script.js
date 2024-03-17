
document.addEventListener('DOMContentLoaded', function () {
    const descForm = document.querySelector('.catalog-hero__activity');

    const descSelects = document.querySelectorAll('.catalog-hero__activity .select__select');
    const config = { attributes: true };
    let descSelectData = {};

    const selectsDeskMut = function (mutationList, observer) {
        mutationList.forEach(mutation => {
            if (mutation.attributeName == 'data-select2-id') {

                const filterName = mutation.target.getAttribute('name');
                const filterValue = GetActiveSelectVal(mutation.target);
                console.log(filterValue)

                if (!descSelectData.hasOwnProperty(filterName)) { // if not init
                    descSelectData[filterName] = filterValue;
                    console.log(descSelectData);

                } else if (filterValue && descSelectData[filterName] != filterValue) {

                    descSelectData[filterName] = filterValue;
                    observer.disconnect();
                    if (filterName == 'sort') {
                        let data = {};
                        data[filterName] = descSelectData[filterName];
                        sendAjaxRequest(data).then(function () {
                            descForm.submit(); // Submit the form when the AJAX request is successful
                        });
                    } else {
                        descForm.submit();
                    }
                } else {
                    console.log('already was set up');
                }
            }
        });
    }

    function GetActiveSelectVal(target) {
        const options = target.querySelectorAll('option');
        for (const option of options) {
            if (option.hasAttribute('data-select2-id')) {
                return option.value;
            }
        }
        return '';
    }

    const sendAjaxRequest = async data => {
        const response = await fetch('/local/templates/main/include/ajax/catalog/cookie_sort.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data),
        });
        console.log(response.status);
    };

    for (let Select of descSelects) {
        const observer = new MutationObserver(selectsDeskMut);
        observer.observe(Select, config);
    };
});
