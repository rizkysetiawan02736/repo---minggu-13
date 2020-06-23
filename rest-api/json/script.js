// let buku = {
//     judul : "Palagan AMbarawa",
//     pengarang : "Shinigami",
//     penerbit : "Gramedia"
// }

// console.log(JSON.stringify(buku));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function (){
//     if (xhr.readyState == 4 && xhr.status == 200){
//         let buku = JSON.parse(this.responseText);
//         console.log(buku);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function (data){
    console.log(data);
});