/* /// COLOR MANAGER /// */          
var checkPage = function(){
    /* Remove attr */
    $('section > ul li').removeClass('light-8');
    $('section > ul li').removeClass('light-10');
    $('aside > ul li').removeClass('light-8');
    $('aside > ul li').removeClass('light-10');
    $('nav').removeClass('nav-dark-8');
    $('nav').removeClass('nav-dark-10');
    $('article').removeClass('article-dark-8');
    /* Set attr */
    if($('ul li').is('.slide-1.activeslide')) {
        $('section > ul li').addClass('light-8');
        $('aside > ul li').addClass('light-8');
        $('nav').addClass('nav-dark-8');
        $('article').addClass('article-dark-8');                    
    }
    else if($('ul li').is('.slide-2.activeslide')) {
        $('section > ul li').addClass('light-10');
        $('aside > ul li').addClass('light-10');
        $('nav').addClass('nav-dark-10');
        $('article').addClass('article-dark-8');
    }
}
var intrvl = setInterval(checkPage,100);
$(document).ready(function() { 
    checkPage();
});