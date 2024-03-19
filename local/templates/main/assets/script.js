
document.addEventListener('DOMContentLoaded', function () {

    // common init
    const deskForm = document.querySelector('.catalog-hero__activity');
    const mobForm = document.querySelector('.popup-filters');
    const deskSelects = document.querySelectorAll('.catalog-hero__activity .select__select');
    const deskCheckBox = document.querySelector('.catalog-check-desktop');


    // submit changes of filter selects
    const config = { attributes: true };
    let deskSelectData = {};

    const selectsDeskMut = function (mutationList, observer) {
        mutationList.forEach(mutation => {
            if (mutation.attributeName == 'data-select2-id') {

                const filterName = mutation.target.getAttribute('name');
                const filterValue = GetActiveSelectVal(mutation.target);

                if (!deskSelectData.hasOwnProperty(filterName)) { // if not init
                    deskSelectData[filterName] = filterValue;
                    console.log(deskSelectData);

                } else if (filterValue && deskSelectData[filterName] != filterValue) { // if new valid value

                    deskSelectData[filterName] = filterValue;
                    observer.disconnect();
                    if (filterName == 'sort') { // if select is 'sort', then set up cookie
                        let data = {};
                        data[filterName] = deskSelectData[filterName];
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '/local/templates/main/include/ajax/catalog/cookie_sort.php', false);
                        xhr.setRequestHeader('Content-Type', 'application/json');
                        xhr.send(JSON.stringify(data));
                        deskForm.submit();
                    } else {
                        deskForm.submit();
                    }
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



    deskSelects.forEach(select => {
        const observer = new MutationObserver(selectsDeskMut);
        observer.observe(select, config);
    })


    // submit changes of checkbox top (desktop)
    const checkBoxLabel = document.querySelector('#top_desktop');
    if (checkBoxLabel && deskCheckBox) {
        checkBoxLabel.addEventListener('change', () => {
            if (deskCheckBox.checked) {
                deskCheckBox.checked = false;
            } else {
                deskCheckBox.checked = true;
            }
            deskForm.submit();
        })
    }


    // reset buttons (desktop, mobile)
    const resetButtons = document.querySelectorAll('.catalog-hero__reset-text')
    resetButtons.forEach(resetButton => {
        resetButton.addEventListener('click', () => {
            deskSelects.forEach(select => {
                select.selectedIndex = -1;
            });
            deskCheckBox.removeAttribute('checked');
            deskForm.submit(); // send only one of them
        })
    })


    // submit button (mobile)
    const mobSubmitBut = document.querySelector('.popup-filters__bot-btn');
    if (mobSubmitBut) {
        mobSubmitBut.addEventListener('click', () => {
            mobForm.submit();
        })
    }

    // submit feedback form from catalog detail
    const feedCatalogForm = document.querySelector('[js_form_feed]');
    const feedSubmit = document.querySelector('[js_form_feed_but]');
    const respContainer = document.querySelector('#response');

    feedSubmit.addEventListener('click', (event) => {
        event.preventDefault();
        const formData = new FormData(feedCatalogForm);
        const jsonData = JSON.stringify(Object.fromEntries(formData));

        const request = BX.ajax({
            url: '/local/templates/main/include/ajax/catalog/form_catalog.php',
            method: 'POST',
            data: jsonData,
            dataType: 'json',
            timeout: 60,
            async: false,
            onsuccess: function(response) {
                console.log(response);
                //respContainer.innerHTML = response.html;
            },
            onfailure: function(error) {
                console.log(error);
            }
        });
    })

});
