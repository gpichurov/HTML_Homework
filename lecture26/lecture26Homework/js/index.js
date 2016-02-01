var cars = [];
var editedRow;
var edit = false;
var counter = 1;
var cnt;

function add() {

    if (edit){

        cnt = editedRow;

        cars[cnt - 1].carName = $('#carName').val();
        cars[cnt - 1].carModel = $('#carModel').val();
        cars[cnt - 1].year = $('#year').val();
        cars[cnt - 1].kilometers = $('#kilometers').val();
        cars[cnt - 1].id = cnt;

        $('#row' + cnt)
            .empty()
            .append('<td class="col-sm-2">' + cnt +
            '</td><td class="col-sm-2">' + cars[cnt - 1].carName +
            '</td><td class="col-sm-2">' + cars[cnt - 1].carModel +
            '</td><td class="col-sm-2">' + cars[cnt - 1].year +
            '</td><td class="col-sm-2">' + cars[cnt - 1].kilometers +
            '</td><td class="col-sm-2"><div class="btn-group" role="group"><button id="edit' + cnt +
            '" type="button" onclick="editRow(' + cnt +
            ')" class="btn btn-default glyphicon glyphicon-edit"></button><button id="delete' + cnt +
            '" type="button" onclick="deleteRow(' + cnt +
            ')" class="btn btn-default glyphicon glyphicon-trash"></button></div></td>');

        edit = false;
    } else {
        cars.push({'id':cnt, 'carName':$('#carName').val(), 'carModel':$('#carModel').val(),
            'year':$('#year').val(), 'kilometers':$('#kilometers').val()});

        cnt = counter;
        counter++;

        $('tbody').append('<tr id="row' + cnt + '"><td class="col-sm-2">' + cnt +
            '</td><td class="col-sm-2">' + cars[cnt - 1].carName +
            '</td><td class="col-sm-2">' + cars[cnt - 1].carModel +
            '</td><td class="col-sm-2">' + cars[cnt - 1].year +
            '</td><td class="col-sm-2">' + cars[cnt - 1].kilometers +
            '</td><td class="col-sm-2"><div class="btn-group" role="group"><button id="edit' + cnt +
            '" type="button" onclick="editRow(' + cnt +
            ')" class="btn btn-default glyphicon glyphicon-edit"></button><button id="delete' + cnt +
            '" type="button" onclick="deleteRow(' + cnt +
            ')" class="btn btn-default glyphicon glyphicon-trash"></button></div></td></tr>');
    }
}

function deleteRow(id){
    if (confirm('Are you sure??')){
        $('#row' + id).remove();
    }
}

function editRow(id){
    editedRow = id;
    edit = true;
    $('#carName').val(cars[id - 1].carName);
    $('#carModel').val(cars[id - 1].carModel);
    $('#year').val(cars[id - 1].year);
    $('#kilometers').val(cars[id - 1].kilometers)
}

function validate() {
    if (($('#carName').val() == "") || ($('#carName').val() == null) ||
        ($('#carModel').val() == '') || ($('#carName').val() == null) ||
        ($('#year').val() == '') || ($('#year').val() == null) ||
        ($('#kilometers').val() == '') || ($('#kilometers').val() == null)){
        $('#validate')
            .addClass('alert alert-danger col-sm-offset-2 text-center')
            .text('All fields are requested !!!');
    } else {
        $('#validate')
            .text('')
            .removeClass();
        add();
        $('#carName').val('');
        $('#carModel').val('');
        $('#year').val('');
        $('#kilometers').val('')
    }
}