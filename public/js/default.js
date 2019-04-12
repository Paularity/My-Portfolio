// Menu
function menuToggle(toggled, overlay, mainNav, iconBar) {   
    if(toggled == false)
    {
        $(overlay).css({ "transform" : "scale(80)" });        
        $(mainNav).css({             
            "opacity" : "1",
            "width" : "100%", 
        });
        $(iconBar).css({ "background-color":"transparent" });
        $("body").append('<style>'+iconBar+':after{ top: 0; transform: rotate(135deg); }</style>');
        $("body").append('<style>'+iconBar+':before{ top: 0; transform: rotate(-135deg); }</style>');
    }   
    else {
        $(overlay).css({ "transform" : "scale(1)" });        
        $(mainNav).css({ 
            "opacity" : "0",
            "width" : "0",            
        });              
        $(iconBar).css({ "background-color":"#333" });
        $("body").append('<style>'+iconBar+':after{ top: 15px; transform: rotate(0); }</style>');
        $("body").append('<style>'+iconBar+':before{ top: -15px; transform: rotate(0); }</style>');
    }
}

function menuDisplay()
{
    var toggled = false;
    var overlay = ".overlay";
    var mainNav = ".main-nav";
    var iconBar = ".nav-toggle-btn .nav-icon-bar";     
  
    $('.nav-toggle-btn').click(function (e) { 
        menuToggle(toggled, overlay, mainNav, iconBar);
        toggled = !toggled;
    });   
    $('.nav-links').click(function (e) { 
        menuToggle(toggled, overlay, mainNav, iconBar);
        toggled = !toggled;
    });

} menuDisplay();

