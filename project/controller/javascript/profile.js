const searchBar = document.querySelector(".profile .search input"),
searchBtn = document.querySelector(".profile .search button");

searchBtn.onclick = () =>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active")
}
