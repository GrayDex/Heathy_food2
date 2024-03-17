
document.addEventListener('DOMContentLoaded', function () {

    // common init
    const deskForm = document.querySelector('.catalog-hero__activity');
    const mobForm = document.querySelector('.popup-filters');
    const deskSelects = document.querySelectorAll('.catalog-hero__activity .select__select');
    const deskCheckBox = document.querySelector('.catalog-check-desktop');
    console.log(deskCheckBox);
    // submit changes of filter selects
    const config = { attributes: true };
    let deskSelectData = {};

    const selectsDeskMut = function (mutationList, observer) {
        mutationList.forEach(mutation => {
            if (mutation.attributeName == 'data-select2-id') {

                const filterName = mutation.target.getAttribute('name');
                const filterValue = GetActiveSelectVal(mutation.target);
                //console.log(filterValue)

                if (!deskSelectData.hasOwnProperty(filterName)) { // if not init
                    deskSelectData[filterName] = filterValue;
                    console.log(deskSelectData);

                } else if (filterValue && deskSelectData[filterName] != filterValue) { // if new valid value

                    deskSelectData[filterName] = filterValue;
                    observer.disconnect();
                    if (filterName == 'sort') { // if select is 'sort', then set up cookie
                        let data = {};
                        data[filterName] = deskSelectData[filterName];
                        sendAjaxRequest(data).then(function () {
                            deskForm.submit();
                        });
                    } else {
                        deskForm.submit();
                    }
                } else {
                    //console.log('already was set up');
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

    deskSelects.forEach(select => {
        const observer = new MutationObserver(selectsDeskMut);
        observer.observe(select, config);
    })


    // submit changes of checkbox top (desktop)
    const checkBoxLabel = document.querySelector('#top_desktop');
    checkBoxLabel.addEventListener('click', () => {
        if (deskCheckBox.checked) {
            deskCheckBox.checked = false;
        } else {
            deskCheckBox.checked = true;
        }
        deskForm.submit();
    })


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
    mobSubmitBut.addEventListener('click', () => {
        mobForm.submit();
    })
});
