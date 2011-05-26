
/* The following code block executes when the page is initially loaded, and does a lot of setup work */
$(document).ready( function() {

	// Animate call to action

	$("#dont-miss-it").css({ marginTop: "-3000px" }).animate({ 
	  marginTop: 0
	  }, 3000 );


	// This adds fancy tooltips to any element with class "fancyToolTip"
	$(".fancyToolTip").tipTip({maxWidth: "350px"});

	// Initialize the Pretty Photo Overlay Plugin
	$("a[rel^='prettyPhoto']").prettyPhoto();

    Climax = {};
    
	// Waypoints //
    var waypoints = [];
    Climax.Waypoint = function(elem) {
        this.elem = elem;
        waypoints.push(this);
    };
    
    Climax.Waypoint.originModifier = 125;
    Climax.Waypoint.heightModifier = 150;
    
    Climax.Waypoint.prototype = {
        isVisible: function() {
            var elem = this.elem;
            var originY = Math.max(elem.offsetTop - Climax.Waypoint.originModifier);
            var height = elem.offsetHeight - Climax.Waypoint.heightModifier;
            var scrollY = window.scrollY;
            
            return scrollY >= originY && scrollY <= originY + height;
        },
        
        navNode: function() {
            if (!this._navNode)
                this._navNode = $('#' + this.elem.getAttribute('data-nav'));
            
            return this._navNode;
        }
    };
    
    var current = null;
    Climax.Waypoint.getCurrent = function() {
        if (current && current.isVisible())
            return current;
        
        for (var i = -1, count = waypoints.length; ++i < count;) {
            var waypoint = waypoints[i];
            if (waypoint === current)
                continue;
            
            if (waypoint && waypoint.isVisible()) {
                Climax.Waypoint.currentWillChange(waypoint, current);
                current = waypoint;
                
                return waypoint;
            }
        }
    };
    
    Climax.Waypoint.currentWillChange = function(newWaypoint, oldWaypoint) {
        oldWaypoint && oldWaypoint.navNode().removeClass('link-active');
        newWaypoint && newWaypoint.navNode().addClass('link-active');
    };
    
    $('.section').each(function(i, elem) {
        new Climax.Waypoint(elem);
    });
    
    // Render //
    Climax.renderLater = function() {
        if (Climax._renderTimeout)
            return;
        
        Climax._renderTimeout = setTimeout(Climax.render, 10);
    };
    
    Climax.render = function() {
        if (Climax._renderTimeout)
            Climax._renderTimeout = clearTimeout(Climax._renderTimeout);
        
        Climax.Waypoint.getCurrent();
    };
    
    // Nav Scroll //
    var scrollElement = 'html, body';
    $('html, body').each(function () {
        var initScrollTop = $(this).attr('scrollTop');
        $(this).attr('scrollTop', initScrollTop + 1);
        if ($(this).attr('scrollTop') == initScrollTop + 1) {
            scrollElement = this.nodeName.toLowerCase();
            $(this).attr('scrollTop', initScrollTop);
            return false;
        }
    });

    // Smooth scrolling for internal links //
    $("a[href^='#']").click(function(event) {
        event.preventDefault();
        
        var $this = $(this),
            target = this.hash,
            $target = $(target);
        
        $(scrollElement).stop().animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing');
      
    });

    
    $(window).scroll(function() {
        Climax.renderLater();
    });
    
    Climax.renderLater();
});
