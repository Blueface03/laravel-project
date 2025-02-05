/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

document.addEventListener('DOMContentLoaded', function () {
        const searchButton = document.getElementById('searchButton');
        const searchWrapper = document.getElementById('searchWrapper');

        searchButton.addEventListener('click', function () {
            if (searchWrapper.style.display === 'none' || searchWrapper.style.display === '') {
                searchWrapper.style.display = 'block';
            } else {
                searchWrapper.style.display = 'none';
            }
        });
    });
document.getElementById("navbarColor").addEventListener("input", function (event) {
  let selectedColor = event.target.value;
  document.querySelector(".navbar").style.backgroundColor = selectedColor;
  localStorage.setItem("navbarColor", selectedColor); // Simpan warna di localStorage
});
