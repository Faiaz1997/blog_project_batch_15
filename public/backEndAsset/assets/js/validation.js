function checkCategoryName(){
    var category = $('#category').val();
    var regex = /^[a-z,A-Z, ]{2,15}$/;
    if(regex.test(category)){
        $('#errorMessage').html('')
        return true;
    }
    else{
        $('#errorMessage').html('You can use 2 to 15 letters')
        return false;
    }
}

$('#category').keyup(function () {
    var res = checkCategoryName();
    if(res == true){
        $('#catBtn').prop('disabled',false)
    }
    else{
        $('#catBtn').prop('disabled',true)
    }
})

$('#catForm').submit(function () {
    if(checkCategoryName() == true){
        $('#catBtn').prop('disabled',false)
    }
    else{
        $('#catBtn').prop('disabled',true)
    }
})
