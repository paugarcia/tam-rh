$(document).ready(function(){
    $('.selectpicker').selectpicker({
        // style: 'btn-info',
        // size: 4
    });
    $('.tooltiped').tooltip()
    $('.tooltiped').mouseenter(function(){
        $(this).tooltip('show')
    }).mouseleave(function(){
        $(this).tooltip('hide')
    })
})
