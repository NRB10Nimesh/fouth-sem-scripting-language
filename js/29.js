const container = document.getElementById("numberContainer");

function isPrime(n) {
  if (n < 2) return false;
  for (let i = 2; i <= Math.sqrt(n); i++)
    if (n % i === 0) return false;
  return true;
}

for (let i = 0; i <= 100; i++) {
  const div = document.createElement("div");
  div.textContent = i;
  div.style.display = "inline-block";
  div.style.width = "50px";
  div.style.margin = "5px";
  div.style.textAlign = "center";
  div.style.padding = "10px";
  div.style.fontSize = "20px";

  if (isPrime(i)) div.style.background = "red";
  else if (i % 2 === 0) div.style.background = "green";
  else div.style.background = "yellow";

  container.appendChild(div);
}