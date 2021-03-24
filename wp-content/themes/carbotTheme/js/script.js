function toggleMenu() {
    console.log("ade it here");
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu;

// "use strict";

// var test = document.querySelectorAll("ul#primaryNav li a");

// var Book = "book.php";

// var i;
// for (i=0; i<test.length; i++) {
//     var myPage = test[i].getAttribute("href");

//     if (Book === myPage) {
//         test[i].parentNode.className="active";
//         // test[i].parentNode.parentNode.parentNode.className="parent";
//      } else {
//         test[i].parentNode.className="";
//     }
// }

function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	return  (arr.length < 2) ? hrefString : arr[arr.length-2].toLowerCase() + arr[arr.length-1].toLowerCase();
}

function setActiveMenu(arr, crtPage)
{
	for (var i=0; i < arr.length; i++)
	{
		if(extractPageName(arr[i].href) == crtPage)
		{
			if (arr[i].parentNode.tagName != "DIV")
			{
				arr[i].className = "active";
				arr[i].parentNode.className = "active";
			}
		}
	}
}

function setPage()
{
	hrefString = document.location.href ? document.location.href : document.location;

	if (document.getElementById("primaryNav") !=null )
	setActiveMenu(document.getElementById("primaryNav").getElementsByTagName("a"), extractPageName(hrefString));
}

window.onload=function()
{
	setPage();
}