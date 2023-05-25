console.log(fetch("items.json") //nalazi json fajl
.then((response) => response.json() //stavlja json fajl u "response" parametar, pretvara json fajl u objekat
.then((data) => //response sve predaje 
{
    for (item of data) //for loop prelazi preko "data" niza i ispisuje sve na sajt
    {
        displayItem(item);
    }
})
));

let container = document.getElementById("itemsContainer");

function displayItem(item)
{
    let itemContainer = document.createElement("div");
    itemContainer.classList.add("itemContainer");

    let itemName = document.createElement("p");
    itemName.textContent = item.name;
    itemName.classList.add("itemName");
    itemContainer.appendChild(itemName);

    let itemPrice = document.createElement("p");
    itemPrice.textContent = item.price;
    itemPrice.classList.add("itemPrice");
    itemContainer.appendChild(itemPrice);

    let imgDiv = document.createElement("div");
    imgDiv.classList.add("imgDiv");
    itemContainer.appendChild(imgDiv);

    let itemImage = document.createElement("img");
    itemImage.src = item.picture;
    itemImage.classList.add("itemImage");
    imgDiv.appendChild(itemImage);

    container.appendChild(itemContainer);
}