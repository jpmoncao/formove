const btnMenuMobile = document.getElementById('menu-mobile')
const menuMobile = document.getElementById('menu-mobile-container')
const dropdown = document.getElementById('dropdown')
const dropdownContent = document.getElementById('dropdown-content')

const menuIsActive = () => {
    btnMenuMobile.classList.toggle('active')
    menuMobile.classList.toggle('active')
    dropdownVerification()
}

const dropdownVerification = () => {
    if(!menuMobile.classList.contains('active') && dropdown.classList.contains('active')) {
        dropdown.classList.remove('active')
    }
}

const dropdownIsActive = () => {
    dropdown.classList.toggle('active')
}

btnMenuMobile.addEventListener('click', menuIsActive)
dropdownContent.addEventListener('click', dropdownIsActive)