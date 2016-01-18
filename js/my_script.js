/**
 * Created by sanek on 13.08.15.
 */
function loadPhones() {

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '/js/phones.json', true);

    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;

        button.innerHTML = 'Ready!';

        if (xhr.status != 200) {
            /*обработать ошибку*/
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            /*вывести результат*/
            alert(xhr.responseText);
        }

    }

    button.innerHTML = 'Load...';
    button.disabled = true;
}