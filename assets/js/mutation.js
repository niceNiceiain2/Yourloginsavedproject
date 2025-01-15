// Declare Variables
var elList, addLink, newEl, newText, counter, listItems;
elList = document.getElementById('list'); // Location for newly added list items.
addLink = document.getElementById('addToList'); // Bind element for event to add item to list.
counter = document.getElementById('counter'); // Place to update items in list.

function addItem(e) { 
    e.preventDefault(); 
    
    // Get item name from input field
    var itemName = document.getElementById('itemName').value.trim();

    // Prevent empty input
    if (itemName === '') {
        alert("Please enter a valid item name");
        return;
    }

    // Create new div with item
    newEl = document.createElement('div');
    newText = document.createTextNode(itemName); // Use input value as item name
    newEl.classList.add('alert', 'alert-info');
    newEl.appendChild(newText); 

    // Add click event listener to remove item when clicked
    newEl.addEventListener('click', removeItem, false);

    elList.appendChild(newEl); // Add item to list
    document.getElementById('itemName').value = ''; // Clear input field

    updateCount(); // Update the count
}

function removeItem(e) { 
    elList.removeChild(e.target); // Remove clicked item
    updateCount(); // Update count
}

function updateCount() { 
    listItems = elList.getElementsByTagName('div').length; 
    counter.innerHTML = listItems; // Update item count
}

// Listen for add button click
addLink.addEventListener('click', addItem, false);

// Add click listeners to initial items
var initialItems = elList.getElementsByTagName('div');
for (var i = 0; i < initialItems.length; i++) {
    initialItems[i].addEventListener('click', removeItem, false);
}