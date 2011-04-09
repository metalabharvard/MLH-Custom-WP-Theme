
var count;
var founders = new Array('bobby','jesse','james','kara','jeffrey');

$(document).ready(function() {
	
	/**Get current time, logo cycle count */
	
	var time= new Date();
	var minutes=time.getMinutes();
	count=(minutes-minutes%5)/5;
	
	
	/** If IE Browser, show static logo */
	
	if (navigator.appName== 'Microsoft Internet Explorer'){

		var logo=document.createElement('div');		
		logo.setAttribute('class','logoDisplayed');
		logo.setAttribute('id','logo'+count);
		logoContainer=document.getElementById('logo');
		logoContainer.appendChild(logo);
	}
	
	
	
	/** Otherwise load all 12 logos and add animation */
	
	else {
	
		/** Change nav Id if mobile browser */
		
		if(navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)){
			$('#nav').attr('id', 'navMobile');
		}
		
		
		for (i=0;i<12;i++){
			var logo=document.createElement('div');
			if(i==count) logo.setAttribute('class','logoDisplayed');
			else logo.setAttribute('class','logoHidden');
			logo.setAttribute('id','logo'+i);
			logoContainer=document.getElementById('logo');
			logoContainer.appendChild(logo);
			$('#logo').addClass('normalLogo');
		}
	
		/** On mouse enter, logo cycles with fade transition */
		
		$('#logo').mouseenter(function(){
			var oldCount=count;
			count++;
			count=count%12;
			$('#logo'+count).fadeIn(1000);
			$('#logo'+oldCount).fadeOut(1000);
		});
		
		$('#logo').click(function(){window.location="http://metalab.harvard.edu";});
		
	}

	$('#nav a').each(function(){
		if($(this).attr('href') == window.location.href){
			$(this).addClass('rightOn');
		}
	});


});



//PEOPLE PAGE


/**

Page default load is to Founders tab with random bio selected
Support for direct members tab, associates tab and individual bios in founders tab

*/

function people(){
	
	
	var hash=window.location.hash.substr(1);
	
	if(hash=="members"){
		$('#membersTab').addClass('selected');
		$('#membersWrapper').show();
	}
	else if(hash=="associates"){
		$('#associatesTab').addClass('selected');
		$('#associatesWrapper').show();
	}
	else{
		$('#foundersTab').addClass('selected');
		$('#foundersWrapper').show();
		if(hash=="james"||hash=="bobby"||hash=="jesse"||hash=="kara"||hash=="jeffrey") var name=hash;
		else var name=founders[Math.floor(Math.random()*5)];
		
		$('div[name="'+name+'"]').addClass('selected');
		$('#bioWrapper').empty().html($('#'+name).html());
		window.location.hash=name;
	}
	/**
	
		Activate tabs, founders tab loads random bio
	*/
	
	$('.peopleNav').click(function(){
		$('.peopleNav').removeClass('selected');
		$(this).addClass('selected');
		var cat=$(this).attr('name');
		if(cat!='founders') window.location.hash=cat;
		else{
		
			var r = Math.floor(Math.random()*5);
			var name=founders[r];
			$('.founderImage').removeClass('selected');
			$('div[name="'+name+'"]').addClass('selected');
			var html = $('#'+name).html();
			$('#bioWrapper').empty().html($('#'+name).html());
			window.location.hash=name;
		
		
		}
		$('.typeWrapper').hide();
		$('#'+cat+'Wrapper').show();
	
	
	});
	
	
	
	/* Hover over image to select, selected bio appears */
	
	$('.founder').hover(function(){
	
		$('.founderImage').removeClass('selected');
		$(this).addClass('selected');
		var name = $(this).attr('name');
		var html = $('#'+name).html();
		
		$('#bioWrapper').empty().html(html);
		window.location.hash=name;
	});


}