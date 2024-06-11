gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, GSDevTools);

const list = document.querySelector(".carousel__nav");
const listItems = gsap.utils.toArray(".carousel__nav__item", list);
const slides = gsap.utils.toArray(".carousel__item");
const tl = gsap.timeline({
	//onUpdate: () => console.log("update", tl.time())
});
const myST = ScrollTrigger.create({
	animation: tl,
  id: "st",
	trigger: ".our-work",
	start: "top top",
	end: "+=500%",
	pin: ".our-work",
	scrub: true,
	snap: {
		snapTo: 1 / (slides.length)
	},
	markers: true
})

gsap.set(slides, { yPercent: 125,scale:0.5 ,opacity: 1 });
listItems.forEach((item, i) => {
	
  item.addEventListener("click", e => {
    e.preventDefault();
		const percent = tl.labels[e.target.getAttribute("data-target")] / tl.totalDuration();
    const scrollPos = myST.start + (myST.end - myST.start) * percent;
    gsap.to(window, {duration: 2, scrollTo: scrollPos});
	});
	
  const previousItem = listItems[i - 1];
  if (previousItem) {
    tl
			.to(item, { background: "#ed3c3c",boxShadow:'0 0 16px #ed3c3c' }, 0.5 * (i-1))
      .to(
        slides[i],
        {
          opacity: 1,
					yPercent:0,
					scale:1,
        },
        '<'
      )
      .to(previousItem, { backgroundColor: '#424b58',	boxShadow:'0 0 16px transparent' }, '<')
      .to(
        slides[i - 1],
        {
          opacity: 1,
					yPercent:-125,
					scale:0.5,
        },
        '<'
      ).add("our-work-"+(i+1))
  } else {
		console.log("bottom", i, slides[i])
		gsap.set(item, { background: "#ed3c3c",boxShadow:'0 0 16px #ed3c3c' });
    tl.to(slides[i], { 
			yPercent:0, 
			opacity: 1,
			scale:1, 
			duration:0,
			onUpdate: () => console.log("UPDATE")
		}, 0);
		tl.add("our-work-"+(i+1), "+=0.5")
  }
});

console.log(tl.labels)
// GSDevTools.create({animation: tl});
