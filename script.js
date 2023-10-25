// Fuction to display Current Date
function formatDate(date) {
  const day = String(date.getDate()).padStart(2, '0');
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const year = date.getFullYear();
  return `${day}/${month}/${year}`;
}
// Get current date
const today = new Date();
const formattedDate = formatDate(today);
// Display the current date on the page
document.getElementById('date').textContent = formattedDate;
//////

///////// Script to active navigation link 
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
  }
})
/////////

///////// HomePage Table Details Page redirect
function redirectToDetail(LiveAnzeigePKID) {
  // Assuming LiveAnzeigePKID are placeholders for actual row identifiers.
  window.location.href = 'layer-main.html?id=' + LiveAnzeigePKID; 
}

/*var table = document.querySelector('table');
        var rowCount = 5; // Change this to the desired number of rows
        var topPosition = 472; // Initial top position

        while (rowCount > 1) {
            var row = document.createElement('tr');
            for (var i = 1; i <= 4; i++) {
                var cell = document.createElement('td');
                cell.style.position = 'absolute';
                cell.style.top = topPosition + 'px';
                cell.textContent = 'Data ' + i;
                row.appendChild(cell);
            }
            table.appendChild(row);
            rowCount--;
            topPosition += 30; // Increase the top position for each new row
        }*/