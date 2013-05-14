// JavaScript Document

  function animate() {
  	//create a TimelineLite instance
	var tl = new TimelineMax();
	tl.insert(animateSun());
	tl.insert(animateSky());
	tl.play();
  }
	

  var skyColor = new TimelineMax();;

  function animateSky() {
	skyColor.clear();
	skyColor.insert(new TweenMax("#sky", 8, {css:{className:"nightsky"}}));
	skyColor.append(new TweenMax("#sky", 8, {css:{className:"daysky"}}));
	skyColor.repeat(-1);
	return skyColor;  
  }
  
  var sunAnimation = new TimelineMax();;
  // Changes the sun from orange to yellow and back to orange
  function animateSun() {
	sunAnimation.clear();
	sunAnimation.insert(new TweenMax("#sun", 8, {bezier:{autoRotate:true, values:[{x:0, y:0}, {x:150, y:-200}, {x:300, y:0}]}}));
	sunAnimation.repeat(-1);
	return sunAnimation;  
  }