// Hide session on login page after seconds
const hideSession = () => {
    const hideSession = document.getElementsByClassName("hideIn3s")[0];

    setTimeout(() => {
        hideSession.classList.remove("block");
        hideSession.classList.add("hidden");
    }, 3000);
};

hideSession();
