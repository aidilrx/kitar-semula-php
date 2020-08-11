function toggleSearch() {
    var toggleBtn = document.getElementsByClassName('toggle-search')[0];
    var toggleTarget = document.getElementsByClassName('toggle-target')[0];
    toggleBtn.classList.toggle('toggled');
    console.log(toggleBtn.classList);
    if (toggleBtn.classList[toggleBtn.classList.length - 1] !== 'toggled') {
        console.log('There is toggle class in toggleBtn');
        toggleBtn.style.color = 'red';
        toggleBtn.style.visibility = 'hidden';
        toggleBtn.style.position = 'absolute';
        toggleBtn.style.left = '-9999px';
        // toggleBtn.classList.replace('toggle', 'toggled');
        console.log(toggleBtn.classList);

        toggleTarget.style.width = '100px';
        toggleTarget.style.display = 'block';
    }
}