//Target the set address as default
const fetchDefaultAddressBtn = document.getElementById("fetchDefaultAddress");
//target the remove default address
const removeDefaultAddressBtn = document.getElementById("removeDefaultAddress");
//Fetch Data
fetchDefaultAddressBtn.addEventListener("click", () => {
    // Hide the button when it's clicked
    fetchDefaultAddressBtn.style.display = "none";
    removeDefaultAddressBtn.style.display = "block";

    const xhr = new XMLHttpRequest();
    xhr.open(
        "GET",
        "http://127.0.0.1:8000/account/broker-dashboard/loads/get-data",
        true
    );
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onload = function () {
        if (xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);
            console.log(data);
            document.getElementById("pickup_company_name").value =
                data.company_name;
            document.getElementById("pickup_company_phone").value =
                data.company_phone;
            document.getElementById("pickup_company_address").value =
                data.company_address;
            document.getElementById("pickup_company_address2").value =
                data.company_address_2;
            document.getElementById("pickup_company_city").value =
                data.company_city;
            document.getElementById("pickup_company_state").value =
                data.company_state;
            document.getElementById("pickup_company_zipcode").value =
                data.company_zipcode;
        } else {
            console.error("Error fetching data:", xhr.statusText);
        }
    };

    xhr.onerror = function () {
        console.error("Network error occurred");
        // Handle network errors here
    };

    xhr.send();
});

//Remove default Address
removeDefaultAddressBtn.addEventListener("click", () => {
    removeDefaultAddressBtn.style.display = "none";
    fetchDefaultAddressBtn.style.display = "block";
    document.getElementById("pickup_company_name").value = " ";
    document.getElementById("pickup_company_phone").value = " ";
    document.getElementById("pickup_company_address").value = " ";
    document.getElementById("pickup_company_address2").value = " ";
    document.getElementById("pickup_company_city").value = " ";
    document.getElementById("pickup_company_state").value = " ";
    document.getElementById("pickup_company_zipcode").value = " ";
});
