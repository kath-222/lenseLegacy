//a) text banner 
// get date and time
let currentDate = new Date().toLocaleDateString();
let currentTime = new Date().toLocaleTimeString();
document.getElementById("currentDate").innerText = currentDate;
document.getElementById("currentTime").innerText = currentTime;

// Movement of text
const textBanner = document.getElementById("textBanner");
let position = window.innerWidth; // start from the right

function moveTextBanner() {
position--;

if (position < -textBanner.offsetWidth) {
    position = window.innerWidth; // Reset to off-screen to the right
}

textBanner.style.transform = `translateX(${position}px)`;
requestAnimationFrame(moveTextBanner);
}

moveTextBanner();//call function to start

//b) photo gallary automatic rotation
//the code change the image sourse so the image change each time
let currentAutoImage = 0; // Start with the first image
const autoGalleryImages = [
    "40.jpg",
    "38.jpg",
    "36.jpg",
    "43.jpg",
    "52.jpg"
];

setInterval(() => {
    currentAutoImage = (currentAutoImage + 1) % autoGalleryImages.length;
    const currentImageElement = document.getElementById("currentAutoImage");
    currentImageElement.src = autoGalleryImages[currentAutoImage];
}, 3000); // Change image every 3 seconds

