function toggleMenu() {
    const navigation = document.querySelector('.navigation');
    const menuToggle = document.querySelector('.toggleMenu');
    menuToggle.classList.toggle('active')
    navigation.classList.toggle('active')
  }