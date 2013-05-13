// JavaScript Document

  function animate() {
  	//create a TimelineLite instance
	var tl = new TimelineMax();
	tl.insert(animateSun());
	tl.append(animateSky());
	tl.play();
  }
	

  var skyColor = new TimelineMax();;

  function animateSky() {
	skyColor.clear();
	skyColor.insert(new TweenMax("#sky", 8, {css:{className:"nightsky"}, repeat:10, delay:0.5, repeatDelay:0.5, yoyo:true}));
	skyColor.repeat(-1);
	return skyColor;  
  }
  
  var sunAnimation = new TimelineMax();;
  // Changes the sun from orange to yellow and back to orange
  function animateSun() {
	sunAnimation.clear();
	sunAnimation.insert(new TweenMax("#sun", 8, {bezier:{autoRotate:true, values:[{x:0, y:0}, {x:150, y:-300}, {x:300, y:0}]}}));
	sunColor.insert(new TweenMax("#sun", 4, {backgroundColor:"#FFFF00", width:60, height:60}));
	sunColor.append(new TweenMax("#sun", 1, {backgroundColor:"#FF4400", width:70, height:70}));
	sunAnimation.repeat(-1);
	return sunAnimation;  
  }