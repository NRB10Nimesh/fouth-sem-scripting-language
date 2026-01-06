// a. Get first paragraph by tag name
const firstPara = document.querySelector("p");

// b. Get each paragraph using id
const p1 = document.querySelector("#p1");
const p2 = document.querySelector("#p2");
const p3 = document.querySelector("#p3");
const p4 = document.querySelector("#p4");

// c. Get all p as NodeList
const allPara = document.querySelectorAll("p");

// d. Loop and log text content
allPara.forEach(p => console.log(p.textContent));

// e. Change fourth paragraph text
p4.textContent = "Fourth Paragraph";

// f. Set id and class attributes
allPara[0].setAttribute("class", "para1");
allPara[1].id = "secondID";
allPara[2].className = "para3";
allPara[3].id = "fourthID";

// g. Change style
allPara.forEach(p => {
  p.style.color = "blue";
  p.style.background = "lightgray";
  p.style.border = "1px solid black";
  p.style.fontSize = "20px";
  p.style.fontFamily = "Arial";
});

// h. Color paragraphs by position
allPara.forEach((p, i) => {
  if (i === 0 || i === 2) p.style.color = "green";
  else p.style.color = "red";
});

// i. Set text, id, class to each
allPara.forEach((p, i) => {
  p.textContent = `Paragraph number ${i + 1}`;
  p.id = `para-${i + 1}`;
  p.className = `class-para-${i + 1}`;
});