let requestURL = 'data.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function ExtractData(data) {
    for (let i = 0; i < 9; i++) {
        document.write(`${i+1} <b> ${data.members[i].firstname} ${data.members[i].lastname} </b> (${(data.members[i].gender)}) is a ${data.members[i].position}, ${data.members[i].address}<br>`);
    }
}