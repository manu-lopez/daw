let xhr = new XMLHttpRequest();

xhr.onreadystatechange = () => {
  if (xhr.readyState == 4 && xhr.status == 200) {
    console.log(xhr);
  }
}
xhr.open("GET", "datos.json", true);
xhr.send();