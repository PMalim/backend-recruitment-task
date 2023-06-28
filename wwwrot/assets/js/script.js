// Add your custom scripts here

console.log('Good luck 👌');

function removeUser(id, url) {
    const xhr = new XMLHttpRequest();
    const method = 'POST';
    xhr.open(method, url + "?id=" + id, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                const row = document.getElementById('userRow_' + id);
                if (row) {
                    row.remove();
                }
            } else {
                console.log('Error: ' + response.message);
            }
        } else {
            console.log('Error: ' + xhr.status);
        }
    };

    xhr.send();
}