const left = document.querySelector('.left')
const right = document.querySelector('.right')
const containerr = document.querySelector('.containerr')

left.addEventListener('mouseenter', () => containerr.classList.add('hover-left'))
left.addEventListener('mouseleave', () => containerr.classList.remove('hover-left'))

right.addEventListener('mouseenter', () => containerr.classList.add('hover-right'))
right.addEventListener('mouseleave', () => containerr.classList.remove('hover-right'))