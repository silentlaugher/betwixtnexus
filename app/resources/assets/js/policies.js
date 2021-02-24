const policyContainer = document.querySelector(".policy-container");
const policyButton = document.querySelector(".policy-btn");

policyButton.addEventListener("click", () => {
    policyContainer.classList.remove("active");
    localStorage.setItem("policyBannerDisplayed", "true")
});

setTimeout(() => {
    if(!localStorage.getItem("policyBannerDisplayed")){
        policyContainer.classList.add("active");
    }
}, 2000);