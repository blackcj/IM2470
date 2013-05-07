// JavaScript Document
  function animate() {
  	//create a TimelineLite instance
	var tl = new TimelineMax();
	tl.insert(new TweenMax("#sun", 8, {bezier:{autoRotate:true, values:[{x:0, y:0}, {x:150, y:-300}, {x:300, y:0}]}}));
	tl.insert(changeSunColor());
	tl.play();
  }
  
  var sunColor = new TimelineMax();;
  // Changes the sun from orange to yellow and back to orange
  function changeSunColor() {
	sunColor.clear();
	sunColor.insert(new TweenMax("div", 8, {rotationY:360, transformOrigin:"left top"}));
	//sunColor.insert(new TweenMax("#sun", 4, {backgroundColor:"#FFFF00", width:60, height:60}));
	//sunColor.append(new TweenMax("#sun", 1, {backgroundColor:"#FF4400", width:70, height:70}));
	sunColor.repeat(-1);
	return sunColor;  
  }