function insert() {
    //var table = document.getElementById("table");
    //var newRow = document.createElement("tr");
    //table.parentNode.innerHTML += <tr> <td>Nikolay</td> <td>Dimitrov</td> <td>25</td> </tr>;
    //table.parentNode.appendChild(newRow);
    //document.getElementsByTagName("tr")[0].appendChild(newRow);

    var tableRef = document.getElementById('table').getElementsByTagName('tbody')[0];

    var newRow   = tableRef.insertRow(tableRef.rows.length);

    var newCell1  = newRow.insertCell(0);
    var newText1  = document.createTextNode('First Name')
    newCell1.appendChild(newText1);

    var newCell2  = newRow.insertCell(1);
    var newText2  = document.createTextNode('Last Name')
    newCell2.appendChild(newText2);

    var newCell3  = newRow.insertCell(2);
    var newText3  = document.createTextNode('Age')
    newCell3.appendChild(newText3);
}
