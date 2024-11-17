const skills = ["Python", "Machine Learning", "SQL", "Data Visualization", "Big Data", "Statistical Analysis"];
const typedText = document.getElementById('typed-text');
let skillIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
    const currentSkill = skills[skillIndex];
    const speed = isDeleting ? 50 : 70; // Typing and deleting speed

    if (isDeleting) {
        typedText.textContent = currentSkill.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typedText.textContent = currentSkill.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === currentSkill.length) {
        setTimeout(() => {
            isDeleting = true;
        }, 1000); // Pause before deleting
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        skillIndex = (skillIndex + 1) % skills.length;
    }

    setTimeout(type, speed);
}

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(type, 1000);
});
