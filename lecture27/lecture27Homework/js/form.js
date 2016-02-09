var newSubject;
function addNewSubject() {
    newSubject = prompt('Enter the new subject:');

    if (newSubject) {
        $('#subject')
            .append('<option value="' + newSubject + '">' + newSubject + '</option>');
    }

    $.ajax({ url: 'addNewSubject.php',
        data: {subject: newSubject},
        type: 'post'
    });
}