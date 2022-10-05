//
// <>-------------------------------------------<> DROPDOWN FUNCTIONS <>----------------------------------------------------------------------------------------<>
//
// These functions are used to mentain dropdown menus with only css configuration on html file.
// All what is needed while creating dropdown menu, is to correctly assign css classes to divs.
//
// main container div -> 'dropdown-menu'; within previous div add button with class 'dropdown-button' and div with class 'dropdown-content'.
// like this:
//
// <div class="dropdown-menu">
//      <button class="dropdown-button">Click here to open dropdown</button>
//      <div class="dropdown-content">My content!</div>
// </div>
//
// JS function will automaticly assign onclick attribute to button.
//
// <>-----------------------------------------<> DROPDOWN FUNCTIONS CODE <>--------------------------------------------------------------------------------------<>
//

assignDropdowns();

function assignDropdowns() {
    let menus = document.getElementsByClassName("dropdown-menu");
    for (var i = 0; i < menus.length; i++) {
        let button = menus[i].getElementsByClassName("dropdown-button")[0];
        let callEvent = 'dropdown(event)';
        button.setAttribute("onclick", callEvent);
    }
}

function dropdown(e) { // This function will open dropdown depending on button clicked
    let menu
    let target = e.target;
    let menus = document.getElementsByClassName("dropdown-menu");
    for (var i = 0; i < menus.length; i++) {
        if (menus[i].contains(target)) {
             menu = menus[i];
        }
    }
    var content = menu.querySelector('.dropdown-content');
    if (content.classList.contains('active')) {
        content.classList.remove('active');
    } else {
        content.classList.add('active');
    }
}

function CloseDropdownsOnClick(e) { // This will close dropdowns on click in window                  <-!-> NOT DEBUGGED <-!->
    var target = e.target;
    var menus = document.querySelectorAll(".menu .content");
    if (!activeMenus) {
        return;
    }
    var activeMenus = menus.querySelectorAll(".show");
    for (const menu of activeMenus) {
        if (menu == target || menu.contains(target)) {
            pass();
        } else {
            if (menu.classList.contains('show')) {
                content.classList.remove("show");
            }
        }
    }
}

//
// <>---------------------------------------<> DROPDOWN FUNCTIONS CODE END <>------------------------------------------------------------------------------------<>
//
