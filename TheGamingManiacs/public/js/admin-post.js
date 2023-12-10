const showMoreButtons = document.querySelectorAll(".show-more-button");

showMoreButtons.forEach(element => {
    const showMoreDropdown = element.querySelector('.show-more-dropdown');
    element.addEventListener('mouseover', (e) => {
        showMoreDropdown.classList.remove('hidden');
    })

    element.addEventListener('mouseout', (e) => {
        showMoreDropdown.classList.add('hidden');
    })

    document.addEventListener('click', (e) => {
        // if(!e.target.classList.contains('show-more-button') || !e.target.querySelector('.show-more-dropdown')){
        //     showMoreDropdown.classList.add('hidden');
        // }
        if(e.target == element){
            console.log('true');
        }
    })
});

