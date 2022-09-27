const btnMenuMobile = document.getElementById('menu-mobile')
const menuMobile = document.getElementById('menu-mobile-container')
const dropdown = document.getElementById('dropdown')
const dropdownCTA = document.getElementById('dropdown-content')

const menuIsActive = () => {
    btnMenuMobile.classList.toggle('active')
    menuMobile.classList.toggle('active')
}

const dropdownIsActive = () => {
    dropdown.classList.toggle('active')
}

btnMenuMobile.addEventListener('click', menuIsActive)
dropdownCTA.addEventListener('click', dropdownIsActive)
