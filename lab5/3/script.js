let requestURL = 'countries.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();
function ExtractData(data) {
    for (let i=0; i<data.length;i++){
        document.write(`<body style="background-color:#d4d4d5;"><div style="display:flex"><div style="flex:20%">Name : <b>${data[i].name}</b><br>Capital : ${data[i].capital}<br>Population : ${data[i].population}<br>Region : ${data[i].region}<br>Location : `);
        for (let j=0; j<2; j++){
            document.write(`${data[i].latlng[j]} `);
        }
        document.write(`<br>Border :`)
        for (let k=0; k<data[i].borders.length; k++){
            document.write(`${data[i].borders[k]} `);
        }
        document.write(`</div><div style="flex: 80%;"><img src="${data[i].flag}" style="width: 240px;"></div></div><br><br>`);
    }
    document.write('</body>');
}