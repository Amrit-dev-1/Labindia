// function startSliderAnimation() {
//     gsap.to(".custom-slider", {
//         x: "-100%",
//         duration: 30,
//         ease: "linear",
//         repeat: -1,
//         onUpdate: function() {
//             // Check if the slider has moved out of view
//             if (this.targets()[0].offsetLeft <= -this.targets()[0].clientWidth) {
//                 // Reset the position of the slider to the right of the viewport
//                 gsap.set(this.targets(), {
//                     x: "100%"
//                 });
//             }
//         }
//     });
// }

// // Start the slider animation when the page is loaded
// window.addEventListener('load', startSliderAnimation);