let requestURL = 'movies.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function ExtractData(data){
    document.write(`<h1 style="text-align: center;">Now Showing</h1>`);
    document.write(`<body style="background-image: linear-gradient(to bottom right, rgba(168,0,34,255), rgba(6,7,21,255)); color: #f8ffff;">`)
    document.write(`<div style="display: flex; justify-content: center; align-items: center;">`);
    for (let i=0; i<data.movies.showing.length; i++){
        document.write(`<div style="position: relative; border: 2px solid #eee; margin: 30px 5px; padding: 0px 10px 7.5px 10px; max-width: 170px; min-height: 350px">\
        <img src="${data.movies.showing[i].poster}" style="position: absolute; left: 10%; width:150px; top: -5%;">\
        <div style="width: 160px; height: 200px; margin-bottom: 5px;"></div>\
        <div style="text-align: center; justify-content: center; font-size: 18px;"><h5>${data.movies.showing[i].title_th}</h5></div>\
        <div style="text-align: center; justify-content: center;"><p style="font-size: 14px;">Release date : ${data.movies.showing[i].releasedate}</p></div>\
        <button type="button" style="margin-left:28px; padding: 5px; background-color:#007bff;color:white; border: 0px; border-radius: 10px;">เช็ครอบภาพยนต์</button></div>`);
    }
    document.write("</div>")

    document.write(`<h1 style="text-align: center;">Coming Soon</h1>`);
    document.write(`<div style="display: flex; justify-content: center; align-items: center;">`);
    for (let i=0; i<data.movies.comingsoon.length; i++){
        document.write(`<div style="position: relative; border: 2px solid #eee; margin: 30px 5px; padding: 0px 10px 7.5px 10px; max-width: 170px; min-height: 350px">\
        <img src="${data.movies.comingsoon[i].poster}" style="position: absolute; left: 10%; width:150px; top: -5%;">\
        <div style="width: 160px; height: 200px; margin-bottom: 5px;"></div>\
        <div style="text-align: center; justify-content: center; font-size: 18px;"><h5>${data.movies.comingsoon[i].title_th}</h5></div>\
        <div style="text-align: center; justify-content: center;"><p style="font-size: 14px;">Release date : ${data.movies.comingsoon[i].releasedate}</p></div>\
        <button type="button" style="margin-left:28px; padding: 5px; background-color:#007bff;color:white; border: 0px; border-radius: 10px;">เช็ครอบภาพยนต์</button></div>`);
    }
    document.write("</div>")
    document.write(`</body>`)
}