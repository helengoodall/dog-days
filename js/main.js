$(init);

function init()
{
	startCloudSmall();
	startCloudBig();
	
	$("#logo")
		.mouseover(mouseoverLogo)
		.mouseout(mouseoutLogo)

	if (!$.browser.msie)
	{
		$("#latestModule a").mousemove(mousemoveLatestModuleItem);
	}
	
	$("#gallery a").click(clickGallery);
	
	$("#newsletterForm").submit(submitNewsletter);
	$('#newsletterForm .extras').addClass('collapsed');
	// Expand extra options when focusing the email address field
	$('#uihdw-uihdw').focus(function(event) {
		$(this).unbind(event);
		$('#newsletterForm .extras').removeClass('collapsed');
		var targetHeight = $('#newsletterForm .extras').height();
		$('#newsletterForm .extras').css('height', 0).css('overflow', 'hidden');
		$('#newsletterForm .extras').animate({height: targetHeight}, 500);
	});

	$("#cloudSmall, #cloudBig").click(whoaDoubleRainbow);
	
	$('.styleGrid img')
		.mousemove(mousemoveStyleGrid)
		.load(function() {
			mousemoveStyleGrid.call($('.styleGrid img').get(0), {offsetX: 800, offsetY: 0});
		})
		
	$(window).resize(function() {
		var MAX_WIDTH = 1000;
		var homeGrid = $('#homeGrid');
		homeGrid.css('font-size', homeGrid.outerWidth() / MAX_WIDTH * 100 + '%');
	});
	
	$(window).resize();
}

function startCloudSmall()
{
	$("#cloudSmall").animate(
		{
			left: "100%"
		},
		80000,
		"linear",
		function()
		{
			$("#cloudSmall").css("left", -Math.ceil($("#cloudSmall").width() / $(window).width() * 100) + "%");
			
			startCloudSmall();
		}
	);
}

function startCloudBig()
{
	$("#cloudBig").animate(
		{
			left: "100%"
		},
		130000,
		"linear",
		function()
		{
			$("#cloudBig").css("left", -Math.ceil($("#cloudBig").width() / $(window).width() * 100) + "%");
			
			startCloudBig();
		}
	)
}

function mouseoverLogo(event)
{
	var logo = $("#logo").get(0);
	
	if (typeof logo.stopped == "undefined" || logo.stopped)
	{
		logo.stopped = false;
		logo.moving = true;
		moveTail();
	}
}

function mouseoutLogo(event)
{
	var IMAGE_HEIGHT = 26;
	var logo = $("#logo").get(0);
	logo.moving = false;
}

function moveTail()
{
	var IMAGE_HEIGHT = 26;
	
	var logo = $("#logo").get(0);
	var tail = $("#tail").get(0);
	
	if (typeof tail.position == "undefined")
	{
		tail.position = 0;
		tail.direction = "right";
	}
	
	if (tail.direction == "right")
	{
		tail.position++;
	}
	else
	{
		tail.position--;
	}
	
	$(tail).css("background-position", "0 " + -tail.position * IMAGE_HEIGHT + "px");
	
	if (tail.position == 6)
	{
		tail.direction = "left";
	}

	if (tail.position == 0)
	{
		tail.direction = "right";
		
		if (!logo.moving)
		{
			logo.stopped = true;
			
			return;
		}
	}
	
	setTimeout(moveTail, 50);
}

function mousemoveLatestModuleItem(event)
{
	var ON_HEIGHT = 165;
	var latestModule = $("#latestModule").get(0);
	
	if (typeof latestModule.locked == "undefined")
	{
		latestModule.locked = false;
	}
	
	if (!$(this).parent("li").hasClass("on") && !latestModule.locked)
	{
		latestModule.locked = true;
		
		$("#latestModule li.on a")
			.css("height", ON_HEIGHT)
			.stop()
			.animate(
				{
					height: $("#latestModule li.on a span").outerHeight()
				}
			)
			
		$("#latestModule li.on .image")
			.animate(
				{
					opacity: 0
				}
			)
		
		$("#latestModule li.on").removeClass("on");
			
		$(this).parent("li")
			.addClass("on alreadyExpanded")
		
		$(this)
			.animate(
				{
					height: ON_HEIGHT
				},
				function()
				{
					latestModule.locked = false;
				}
			)
			
		$(".image", $(this).parent("li"))
			.animate(
				{
					opacity: 1
				}
			)
		
	}
};

function mousemoveStyleGrid(event) {
	var IMAGE_WIDTH = 800;
	var IMAGE_HEIGHT = 599;
	var IMAGE_GAP = 4;
	var image = $(this);
	var styleGrid = image.parents('.styleGrid')
	var width = image.width();
	var height = image.height();
	var popover = null;
	
	// First row
	if (event.offsetY < height/3) {
		// First column
		if (event.offsetX < width/4) {
			var popover = $('.popover1', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(1);
				popover.appendTo(styleGrid);
				popover
					.css('left', 0)
					.css('top', 0)
					.css('width', (IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
		// Second column
		else if (event.offsetX < width/2) {
			var popover = $('.popover2', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(2);
				popover.appendTo(styleGrid);
				popover
					.css('left', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 4 + IMAGE_GAP) * width/IMAGE_WIDTH)
					.css('top', 0)
					.css('width', (IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
		else {
			var popover = $('.popover3', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(3);
				popover.appendTo(styleGrid);
				popover
					.css('left', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP*2) * width/IMAGE_WIDTH)
					.css('top', 0)
					.css('width', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP) * width/IMAGE_WIDTH)
					.css('height', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * 2 + IMAGE_GAP) * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
	}
	// Second row
	else if (event.offsetY < height*0.67) {
		// First column
		if (event.offsetX < width/4) {
			var popover = $('.popover4', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(4);
				popover.appendTo(styleGrid);
				popover
					.css('left', 0)
					.css('top', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 + IMAGE_GAP) * height/IMAGE_HEIGHT)
					.css('width', (IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
		// Third column
		else if (event.offsetX > width/2) {
			var popover = $('.popover3', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(3);
				popover.appendTo(styleGrid);
				popover
					.css('left', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP*2) * width/IMAGE_WIDTH)
					.css('top', 0)
					.css('width', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP) * width/IMAGE_WIDTH)
					.css('height', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * 2 + IMAGE_GAP) * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
	}
	// Third row
	else {
		// First column
		if (event.offsetX < width/2) {
			var popover = $('.popover5', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(5);
				popover.appendTo(styleGrid);
				popover
					.css('left', 0)
					.css('top', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * 2 + IMAGE_GAP*2) * height/IMAGE_HEIGHT)
					.css('width', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP) * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
		// Third column
		else if (event.offsetX < width*0.75) {
			var popover = $('.popover6', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(6);
				popover.appendTo(styleGrid);
				popover
					.css('left', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 2 + IMAGE_GAP*2) * width/IMAGE_WIDTH)
					.css('top', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * 2 + IMAGE_GAP*2) * height/IMAGE_HEIGHT)
					.css('width', (IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
		// Fourth column
		else {
			var popover = $('.popover7', styleGrid);
			
			if (popover.length <= 0) {
				popover = createPopover(7);
				popover.appendTo(styleGrid);
				popover
					.css('left', ((IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * 3 + IMAGE_GAP*3) * width/IMAGE_WIDTH)
					.css('top', ((IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * 2 + IMAGE_GAP*2) * height/IMAGE_HEIGHT)
					.css('width', (IMAGE_WIDTH - IMAGE_GAP * 3) / 4 * width/IMAGE_WIDTH)
					.css('height', (IMAGE_HEIGHT - IMAGE_GAP * 2) / 3 * height/IMAGE_HEIGHT)
				showPopoverText(popover);
			}
		}
	}

	$('.popover').not(popover != null ? popover : true).each(function() {
		var text = $('.text', this);
		text.animate({'margin-bottom': -text.height(), opacity: 0}, 200, function() {
			$(this).parents('.popover').remove();
		});
	});
}

function createPopover(index) {
	var itemText = $('li', $('.styleGrid').nextAll('ol')).eq(index - 1).text().replace(/^.\./, '');
	var itemLink = $('a', $('li', $('.styleGrid').nextAll('ol')).eq(index - 1)).attr('href');
	var popover = $('<a href="' + itemLink + '" class="popover popover' + index + '"><span class="text">' + itemText + '</span></a>');
	
	return popover;
}

function showPopoverText(popover) {
	var text = $('.text', popover);
	text
		.css('marginBottom', -text.height())
		.animate({'margin-bottom': 0, opacity: 1}, 300)
}

function clickGallery()
{
	var mask = $("#mask");
	
	if (mask.length <= 0)
	{
		mask = $('<div id="mask"></div>').appendTo("body");
	}
	
	mask
		.css("width", $(document).width())
		.css("height", $(document).height())
		
	var lightbox = $("#lightboxImage");
	
	if (lightbox.length <= 0)
	{
		lightbox = $('<div id="lightbox"><div id="lightboxLoading"></div><div id="lightboxImage"></div><div id="lightboxCaption"></div><a id="lightboxClose" href="#" title="Close image gallery"></a><a id="lightboxPrevious" href="#" title="Previous image"></a><a id="lightboxNext" href="#" title="Next image"></a></div>').appendTo("body");
	}
	
	$("#lightboxLoading")
		.animate(
			{
				opacity: 1
			}
		)
	
	var lis = $("#gallery li");
	var lightboxMaxIndex = lis.length - 1;
	
	var lightboxIndex = 0;
	
	for (var i = 0; i <= lightboxMaxIndex; i++)
	{
		if (lis.get(i) == this.parentNode)
		{
			lightboxIndex = i;
		}
	}
	
	$("#lightboxNext").click(function()
		{
			lightboxIndex++;
			
			if (lightboxIndex >lightboxMaxIndex)
			{
				lightboxIndex = 0;
			}
			
			loadImage();
			
			return false;
		}
	)
	
	$("#lightboxPrevious").click(function()
		{
			lightboxIndex--;
			
			if (lightboxIndex < 0)
			{
				lightboxIndex = lightboxMaxIndex;
			}
			
			loadImage();
			
			return false;
		}
	)
	
	loadImage(this.href);
	
	function loadImage()
	{
		$("#lightboxImage img").css("visibility", "hidden");
		$("#lightboxCaption")
			.css("height", $("#lightboxCaption").outerHeight())
			.html("")
			.animate(
				{
					height: 0
				},
				200,
				function()
				{
					$(this).css("visibility", "hidden");
				}
			)
		
		var lightboxImageFile = $('<img src="' + $("a", lis.eq(lightboxIndex)).get(0).href + '" alt="' + $("img", lis.eq(lightboxIndex)).get(0).alt + '" title="' + $("img", lis.eq(lightboxIndex)).get(0).title + '" />');
		lightboxImageFile.load(loadedImage);
		
		function loadedImage(event)
		{
			var lightboxImage = $("#lightboxImage");
			var imageWidth = this.width;
			var imageHeight = this.height;
			var imageRatio = imageWidth / imageHeight;
			
			if (imageWidth > $("#lightbox").width() - 100)
			{
				imageWidth = $("#lightbox").width() - 100;
				imageHeight = imageWidth / imageRatio;
			}
	
			if (imageHeight > $("#lightbox").height() - 160)
			{
				imageHeight = $("#lightbox").height() - 160;
				imageWidth = imageHeight * imageRatio;
			}
			
			var width = imageWidth + lightboxImage.outerWidth() - lightboxImage.innerWidth();
			var height = imageHeight + lightboxImage.outerHeight() - lightboxImage.innerHeight();
			
			$(this)
				.css("width", "100%")
				.css("height", "100%")
				
			lightboxImage
				.animate(
					{
						opacity: 1,
						width: imageWidth,
						height: imageHeight,
						marginLeft: Math.round(-width / 2),
						marginTop: Math.round(-height / 2)
					},
					function()
					{
						$(this).html(lightboxImageFile);
						
						var ARROW_IMAGE_WIDTH = 13;
						
						$("#lightboxPrevious")
							.css("background-position", $("#lightboxPrevious").width() - Math.round(imageWidth / 2) - $("#lightboxClose").width() - ARROW_IMAGE_WIDTH + "px 50%")
							.css("display", "block")
							
						$("#lightboxNext")
							.css("background-position", Math.round($("#lightbox").width() / 2 + imageWidth / 2) + $("#lightboxClose").width() + "px 50%")
							.css("display", "block")
						
						$("#lightboxClose")
							.animate(
								{
									opacity: 1
								}
							)
							.click(closeLightbox)
						
						if ($("#lightboxImage img").get(0).title != "")
						{
							$("#lightboxCaption")
								.stop()
								.html('<div class="inner">' + $("#lightboxImage img").get(0).title + '</div>')
								.css("marginLeft", $("#lightboxImage").css("marginLeft"))
								.css("marginTop", $("#lightboxImage").height() / 2)
								.css("width", $("#lightboxImage").outerWidth())
								.css("height", 0)
								.css("visibility", "visible")
								.animate(
									{
										height: $("#lightboxCaption .inner").outerHeight()
									}
								)
						}
					}
				)
			
			$("#lightboxClose")
				.animate(
					{
						marginLeft: Math.round(imageWidth / 2),
						marginTop: Math.round(-imageHeight / 2) - $("#lightboxClose").height()
					}
				)

			$("#lightboxPrevious").css("display", "none");
			$("#lightboxNext").css("display", "none");
		}
	}
	
	function closeLightbox(event)
	{
		$("#lightboxLoading").remove();
		
		$("#lightboxCaption")
			.animate(
				{
					opacity: 0
				},
				150
			)
			
		$(this)
			.animate(
				{
					opacity: 0
				},
				150,
				function()
				{
					$("#lightboxImage")
						.animate(
							{
								opacity: 0,
								width: 0,
								height: 0,
								marginLeft: 0,
								marginTop: 0
							},
							300,
							function()
							{
								$("#lightbox").remove();
								$("#mask")
									.animate(
										{
											opacity: 0
										},
										200,
										function()
										{
											$(this).remove();
										}
									)
							}
						)
				}
			)
			
		return false;
	}

	return false;
}

function submitNewsletter()
{
	if ($("#name").get(0).value == "")
	{
		alert("Please fill in your name");
		
		$("#name").focus();
		
		return false;
	}
	
	if ($("#uihdw-uihdw").get(0).value == "")
	{
		alert("Please fill in your email address");
		
		$("#uihdw-uihdw").focus();
		
		return false;
	}
}

function whoaDoubleRainbow()
{
	$("#dR").remove();
	
	var dR = document.createElement("canvas");
	dR.id = "dR";
	dR.width = 500;
	dR.height = 200;
	$(dR).css("left", $("#logo").offset().left - 75);
	$("body").append(dR);
	
	function animate(step)
	{
		var dR = document.getElementById("dR");
		var W = 500; // Width
		var H = 200; // Height
		var L = 4; // Line width
		var R = 300; // Radius
		var offset = 40; // Offset of inner rainbow
		
		if (typeof step == "undefined")
		{
			var step = 0;
		}
		
		var MAX_STEPS = 50;
		var c = dR.getContext("2d");
		c.clearRect(0, 0, dR.width, dR.height);
		var colors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];
		
		// First rainbow
		for (var i = 0; i < colors.length; i++)
		{
			c.lineWidth = L;
			c.strokeStyle = colors[i];c.beginPath();
			c.moveTo(L * i, R + L / 2);
			c.arc(W / 2, R + L / 2, R - L * i, Math.PI, Math.PI + Math.PI * step / MAX_STEPS, false);
			c.stroke();
		}
		
		// Second rainbow
		for (var i = 0; i < colors.length; i++)
		{
			c.lineWidth = L;
			c.strokeStyle = colors[i];
			c.beginPath();
			c.moveTo(L * i + offset, R + L / 2);
			c.arc(W / 2, R + L / 2, R - L * i - offset, Math.PI, Math.PI + Math.PI * step / MAX_STEPS, false);
			c.stroke();
		}
		
		step++;
		
		if (step < MAX_STEPS)
		{
			setTimeout(function(){animate(step);}, 40);
		}
	}
	
	animate();
}

function recordOutboundLink(link, category, action) {
	try {
		var myTracker=_gat._getTrackerByName();
		_gaq.push(['myTracker._trackEvent', category ,  action ]);
		setTimeout('document.location = "' + link.href + '"', 100)
	}
	catch(err){}
}</html>