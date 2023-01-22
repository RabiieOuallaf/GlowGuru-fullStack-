const popUpTrigger = document.getElementById("pop-up");
const popUpForm = document.getElementById("product-form");

popUpTrigger.addEventListener("click", _ => {
    popUpForm.style.display = "block"; 
});