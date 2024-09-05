const searchBar = document.querySelector(".home .search input"),
searchBtn = document.querySelector(".home .search button");

searchBtn.onclick = () =>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active")
}