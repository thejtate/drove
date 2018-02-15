var metal = new SpinScroll('canvas-zone-metal');

metal.setImages('theme/images/new-metal-blue/', 36);

function animate() {

	if (metal.ready) { metal.drawImages() };

	requestAnimationFrame(animate);
};