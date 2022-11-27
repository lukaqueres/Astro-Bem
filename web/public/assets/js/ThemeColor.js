// Dodanie Localstorage jeżeli nie ma
if (localStorage.getItem("theme") === null) 
{
    localStorage.setItem("theme", "light");
}

// Ustaiwa Odpowiedni Tryb
if (localStorage.getItem("theme") === "dark") 
{
    document.body.classList.add("dark-theme");
    SetTheme();
}

// Zmiana Theme po kliknięciu
function ChangeTheme()
{
    document.body.classList.toggle("dark-theme");
    SetTheme();
}

// Zmiana Prawdziwa
function SetTheme()
{
    var r = document.querySelector(":root");
    if(document.body.classList.contains("dark-theme"))
    {
        localStorage.setItem("theme", "dark");
        r.style.setProperty("--base-color-level-1", "#222");
        r.style.setProperty("--base-color-level-2", "#333");
        r.style.setProperty("--base-color-level-3", "#444");
        r.style.setProperty("--text-color-level-1", "#eee");
        r.style.setProperty("--text-color-level-2", "#999");
    }
    else
    {
        localStorage.setItem("theme", "light");
        r.style.setProperty("--base-color-level-1", "#eee");
        r.style.setProperty("--base-color-level-2", "#ddd");
        r.style.setProperty("--base-color-level-3", "#ccc");
        r.style.setProperty("--text-color-level-1", "#222");
        r.style.setProperty("--text-color-level-2", "#888");
    }
}