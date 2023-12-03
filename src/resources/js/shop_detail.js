$(function(){
    var select = $('#select');
    var selected = $('#selected');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + 'が選択されました');
    });
})