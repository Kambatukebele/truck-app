const fetchDataButton = document.getElementById("fetchDataButton");

console.log(1);

// fetch("http://127.0.0.1:8000/account/broker-dashboard/loads/create")
//     .then(function (response) {
//         return response.text();
//     })
//     .then(function (body) {
//         console.log(body);
//     });

// let xhr = new XMLHttpRequest();
// xhr.open(
//     "GET",
//     "http://127.0.0.1:8000/account/broker-dashboard/loads/create",
//     true
// );
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         var responseData = JSON.parse(xhr.responseText);
//         console.log(responseData);
//     } else {
//         console.log("nothing");
//     }
// };
// xhr.send();

// const WhenClickedBtn = () => {

//     // fetchDataButton.addEventListener("click", function () {
//     //     let xhr = new XMLHttpRequest();
//     //     xhr.open("GET", "/account/broker-dashboard/loads/createdata", true);
//     //     xhr.onreadystatechange = function () {
//     //         if (xhr.readyState === 4 && xhr.status === 200) {
//     //             console.log(xhr.responseText);
//     //         }
//     //     };
//     //     xhr.send();
//     // });
// };

// WhenClickedBtn();

// const WhenClickedBtn = () => {
//     fetchDataButton.addEventListener("click", () => {
//         fetch("/account/broker-dashboard/loads/create")
//             .then((response) => response.json())
//             .then((data) => {
//                 console.log(1);
//             })
//             .catch((error) => {
//                 console.error("Error fetching data:", error);
//             });
//     });
// };

// WhenClickedBtn();
