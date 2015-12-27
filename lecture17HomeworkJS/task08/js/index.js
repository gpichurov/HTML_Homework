function insert() {
    //var table = document.getElementById("table");
    //var newRow = document.createElement("tr");
    //table.parentNode.innerHTML += <tr> <td>Nikolay</td> <td>Dimitrov</td> <td>25</td> </tr>;
    //table.parentNode.appendChild(newRow);
    //document.getElementsByTagName("tr")[0].appendChild(newRow);

    var tableRef = document.getElementById('table').getElementsByTagName('tbody')[0];

    var newRow   = tableRef.insertRow(tableRef.rows.length);

    var newCell  = newRow.insertCell(0);
    var newText  = document.createTextNode('First Name')
    newCell.appendChild(newText);

    var newCell  = newRow.insertCell(1);
    var newText  = document.createTextNode('Last Name')
    newCell.appendChild(newText);

    var newCell  = newRow.insertCell(2);
    var newText  = document.createTextNode('Age')
    newCell.appendChild(newText);
};
