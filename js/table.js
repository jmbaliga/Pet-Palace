function sortTable(n) {
  var table, arrayOfRows, switching, i, x, y, shouldSwitch, direction, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  direction = "asc";

  while (switching) {
    switching = false;
    arrayOfRows = table.rows;

    for (i = 1; i < (arrayOfRows.length - 1); i++) {
      shouldSwitch = false;
      x = arrayOfRows[i].getElementsByTagName("TD")[n];
      y = arrayOfRows[i + 1].getElementsByTagName("TD")[n];
      if (direction == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (direction == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      arrayOfRows[i].parentNode.insertBefore(arrayOfRows[i + 1], arrayOfRows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && direction == "asc") {
        direction = "desc";
        switching = true;
      }
    }
  }
}
