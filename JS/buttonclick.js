$(document).ready(function(){
    $('#faqbutton1').click(function(){
        $child=$(this).children('button');
        $child.toggleClass("glyphicon-chevron-down").toggleClass("glyphicon-chevron-up");
    });
});