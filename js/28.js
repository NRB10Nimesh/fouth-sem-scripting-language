const year = document.getElementById("year");
const date = document.getElementById("date");
const items = document.querySelectorAll("#taskList li");

// a. Year color changes every second
setInterval(() => {
  year.style.color =
    "#" + Math.floor(Math.random() * 16777215).toString(16);
}, 1000);

// b. Date time & background change every second
setInterval(() => {
  date.textContent = new Date().toLocaleString();
  date.style.background =
    "#" + Math.floor(Math.random() * 16777215).toString(16);
  date.style.padding = "10px";
}, 1000);

// c, d, e: color coding list
items.forEach(li => {
  if (li.textContent.includes("Done"))
    li.style.background = "green";
  else if (li.textContent.includes("Ongoing"))
    li.style.background = "yellow";
  else
    li.style.background = "red";

  li.style.padding = "10px";
  li.style.margin = "5px";
  li.style.listStyle = "none";
});