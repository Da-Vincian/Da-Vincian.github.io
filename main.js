var storedItem = localStorage.getItem("storedItem");

function save()
{
	var Item = document.getElementById("input").value;
	localStorage.setItem("storedItem", Item);
	document.getElementById("savedText").innerHTML = Item + "SAVED";
}
function get()
{
	localStorage.getItem("storedItem");
	document.getElementById("openedText").innerHTML = storedItem + " OPENED";
}