let menuButton = document.getElementById("mainEmblem")
let sideNav = document.getElementById("sideNav");
let isActive = false;
let sideNavController = function()
{
    if (isActive == false)
    {
        sideNav.style.display = "block";
        isActive = true;
    }
    else
    {
        sideNav.style.display = "none";
        isActive = false;
    }
}

menuButton.addEventListener("click", sideNavController);