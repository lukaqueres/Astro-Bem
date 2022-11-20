function ChangeTheme()
{
    var r = document.querySelector(":root");
    document.body.classList.toggle("dark-theme");

    if(document.body.classList.contains("dark-theme"))
    {
        r.style.setProperty("--base-color-level-1", "#222");
        r.style.setProperty("--base-color-level-2", "#333");
        r.style.setProperty("--base-color-level-3", "#444");
        r.style.setProperty("--text-color-level-1", "#eee");
        r.style.setProperty("--text-color-level-2", "#999");
    }
    else
    {
        r.style.setProperty("--base-color-level-1", "#eee");
        r.style.setProperty("--base-color-level-2", "#ddd");
        r.style.setProperty("--base-color-level-3", "#ccc");
        r.style.setProperty("--text-color-level-1", "#222");
        r.style.setProperty("--text-color-level-2", "#888");
    }
}